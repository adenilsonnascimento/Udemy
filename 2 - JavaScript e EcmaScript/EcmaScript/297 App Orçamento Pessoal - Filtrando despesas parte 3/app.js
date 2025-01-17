// Classe para representar uma despesa
class Despesa {
	// Construtor que inicializa os dados da despesa
	constructor(ano, mes, dia, tipo, descricao, valor) {
		this.ano = ano
		this.mes = mes
		this.dia = dia
		this.tipo = tipo
		this.descricao = descricao
		this.valor = valor
	}

	// Método para validar se todos os campos da despesa foram preenchidos corretamente
	validarDados() {
		for(let i in this) {
			// Verifica se algum campo está vazio, nulo ou indefinido
			if(this[i] == undefined || this[i] == '' || this[i] == null) {
				return false
			}
		}
		// Se todos os campos estiverem preenchidos, retorna true
		return true
	}
}

// Classe para interagir com o armazenamento (localStorage) para salvar e recuperar despesas
class Bd {
	// Construtor para inicializar o id no localStorage
	constructor() {
		let id = localStorage.getItem('id')
		if(id === null) {
			localStorage.setItem('id', 0) // Se não existir id, inicializa com 0
		}
	}

	// Método para obter o próximo id disponível
	getProximoId() {
		let proximoId = localStorage.getItem('id')
		// Retorna o id incrementado
		return parseInt(proximoId) + 1
	}

	// Método para gravar uma nova despesa no localStorage
	gravar(d) {
		let id = this.getProximoId() // Obtém o próximo id
		// Salva a despesa no localStorage com o id gerado
		localStorage.setItem(id, JSON.stringify(d))
		// Atualiza o id no localStorage
		localStorage.setItem('id', id)
	}

	// Método para recuperar todas as despesas do localStorage
	recuperarTodosRegistros() {
		// Array para armazenar as despesas recuperadas
		let despesas = Array()
		let id = localStorage.getItem('id')

		// Loop para recuperar todas as despesas cadastradas
		for(let i = 1; i <= id; i++) {
			// Recupera a despesa com o id específico
			let despesa = JSON.parse(localStorage.getItem(i))

			// Verifica se o índice não existe ou foi removido e pula esse item
			if(despesa === null) {
				continue
			}

			// Adiciona a despesa ao array
			despesas.push(despesa)
		}

		// Retorna o array com todas as despesas recuperadas
		return despesas
	}

	// Método para filtrar as despesas com base nos critérios fornecidos
	pesquisar(despesa){
		// Inicializa o array de despesas filtradas
		let despesasFiltradas = Array()
		despesasFiltradas = this.recuperarTodosRegistros()

		// Filtro por ano
		if(despesa.ano != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
		}
		// Filtro por mês
		if(despesa.mes != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
		}
		// Filtro por dia
		if(despesa.dia != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
		}
		// Filtro por tipo
		if(despesa.tipo != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
		}
		// Filtro por descrição
		if(despesa.descricao != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
		}
		// Filtro por valor
		if(despesa.valor != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor)
		}
		
		// Retorna as despesas filtradas
		return despesasFiltradas
	}
}

// Instância da classe Bd para gerenciar o armazenamento
let bd = new Bd()

// Função para cadastrar uma nova despesa
function cadastrarDespesa() {
	// Obtém os valores dos campos do formulário
	let ano = document.getElementById('ano')
	let mes = document.getElementById('mes')
	let dia = document.getElementById('dia')
	let tipo = document.getElementById('tipo')
	let descricao = document.getElementById('descricao')
	let valor = document.getElementById('valor')

	// Cria uma nova instância de Despesa com os dados fornecidos
	let despesa = new Despesa(
		ano.value, 
		mes.value, 
		dia.value, 
		tipo.value, 
		descricao.value,
		valor.value
	)

	// Verifica se todos os dados estão corretos
	if(despesa.validarDados()) {
		// Se os dados forem válidos, grava a despesa
		bd.gravar(despesa)

		// Exibe mensagem de sucesso no modal
		document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
		document.getElementById('modal_titulo_div').className = 'modal-header text-success'
		document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso!'
		document.getElementById('modal_btn').innerHTML = 'Voltar'
		document.getElementById('modal_btn').className = 'btn btn-success'

		// Exibe o modal de sucesso
		$('#modalRegistraDespesa').modal('show') 

		// Limpa os campos do formulário
		ano.value = '' 
		mes.value = ''
		dia.value = ''
		tipo.value = ''
		descricao.value = ''
		valor.value = ''
		
	} else {
		// Se houver erro, exibe mensagem de erro no modal
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!'
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
		document.getElementById('modal_btn').className = 'btn btn-danger'

		// Exibe o modal de erro
		$('#modalRegistraDespesa').modal('show') 
	}
}

// Função para carregar a lista de despesas no HTML
function carregaListaDespesas(despesas = Array(), filtro = false) {

    // Se não passar despesas e não for filtro, carrega todas as despesas
    if(despesas.length == 0 && filtro == false){
		despesas = bd.recuperarTodosRegistros() 
	}

	// Seleciona o elemento onde será inserida a lista de despesas
	let listaDespesas = document.getElementById("listaDespesas")
    listaDespesas.innerHTML = ''
	// Para cada despesa, cria uma nova linha na tabela
	despesas.forEach(function(d){

		// Cria a linha (tr)
		let linha = listaDespesas.insertRow();

		// Preenche as colunas da linha com os dados da despesa
		linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}` 

		// Ajusta o tipo de despesa para um nome legível
		switch(d.tipo){
			case '1': d.tipo = 'Alimentação'
				break
			case '2': d.tipo = 'Educação'
				break
			case '3': d.tipo = 'Lazer'
				break
			case '4': d.tipo = 'Saúde'
				break
			case '5': d.tipo = 'Transporte'
				break
		}
		// Preenche as células da linha com os dados da despesa
		linha.insertCell(1).innerHTML = d.tipo
		linha.insertCell(2).innerHTML = d.descricao
		linha.insertCell(3).innerHTML = d.valor
	})

 }

// Função para pesquisar as despesas com os critérios fornecidos
 function pesquisarDespesa(){
	 
	// Obtém os valores dos filtros
	let ano  = document.getElementById("ano").value
	let mes = document.getElementById("mes").value
	let dia = document.getElementById("dia").value
	let tipo = document.getElementById("tipo").value
	let descricao = document.getElementById("descricao").value
	let valor = document.getElementById("valor").value

	// Cria uma nova despesa com os filtros
	let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

	// Chama o método de pesquisa e carrega as despesas filtradas
	let despesas = bd.pesquisar(despesa)
	 
	// Exibe as despesas filtradas
	this.carregaListaDespesas(despesas, true)

}
