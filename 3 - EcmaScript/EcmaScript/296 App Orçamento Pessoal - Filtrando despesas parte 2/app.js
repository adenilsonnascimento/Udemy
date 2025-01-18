class Despesa {
	// Construtor que inicializa as propriedades do objeto
	constructor(ano, mes, dia, tipo, descricao, valor) {
		this.ano = ano // Ano da despesa
		this.mes = mes // Mês da despesa
		this.dia = dia // Dia da despesa
		this.tipo = tipo // Tipo da despesa (ex: Alimentação, Saúde, etc)
		this.descricao = descricao // Descrição da despesa
		this.valor = valor // Valor da despesa
	}

	// Método para validar se todos os dados da despesa foram preenchidos
	validarDados() {
		for(let i in this) { // Iterando sobre todas as propriedades do objeto
			if(this[i] == undefined || this[i] == '' || this[i] == null) { // Verifica se alguma propriedade está vazia
				return false // Retorna falso se algum dado estiver ausente
			}
		}
		return true // Retorna verdadeiro se todos os dados estiverem preenchidos
	}
}

class Bd {
	// Construtor que inicializa o banco de dados (localStorage)
	constructor() {
		let id = localStorage.getItem('id') // Obtém o id do último registro cadastrado

		if(id === null) { // Caso o id não exista
			localStorage.setItem('id', 0) // Define o id inicial como 0
		}
	}

	// Método que retorna o próximo id a ser utilizado
	getProximoId() {
		let proximoId = localStorage.getItem('id') // Obtém o id atual
		return parseInt(proximoId) + 1 // Retorna o próximo id incrementado
	}

	// Método para gravar uma nova despesa no localStorage
	gravar(d) {
		let id = this.getProximoId() // Obtém o próximo id
		localStorage.setItem(id, JSON.stringify(d)) // Armazena a despesa como string no localStorage
		localStorage.setItem('id', id) // Atualiza o id no localStorage
	}

	// Método para recuperar todas as despesas do localStorage
	recuperarTodosRegistros() {
		let despesas = Array() // Cria um array vazio para armazenar as despesas
		let id = localStorage.getItem('id') // Obtém o id do último registro

		// Recupera todas as despesas cadastradas
		for(let i = 1; i <= id; i++) {
			let despesa = JSON.parse(localStorage.getItem(i)) // Recupera a despesa por id

			if(despesa === null) { // Caso o índice esteja vazio ou removido
				continue // Pula esse índice
			}

			despesas.push(despesa) // Adiciona a despesa ao array
		}

		return despesas // Retorna todas as despesas recuperadas
	}

	// Método para pesquisar despesas com base nos filtros
	pesquisar(despesa){
		let despesasFiltradas = Array() // Cria um array vazio para armazenar as despesas filtradas
		despesasFiltradas = this.recuperarTodosRegistros() // Recupera todas as despesas

		// Filtra as despesas de acordo com os dados fornecidos
		if(despesa.ano != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano) // Filtra por ano
		}
		if(despesa.mes != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes) // Filtra por mês
		}
		if(despesa.dia != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia) // Filtra por dia
		}
		if(despesa.tipo != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo) // Filtra por tipo
		}
		if(despesa.descricao != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao) // Filtra por descrição
		}
		if(despesa.valor != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor) // Filtra por valor
		}

		// Exibe as despesas filtradas no console para debug
		console.log(despesasFiltradas);
	}
}

// Cria uma instância do banco de dados (localStorage)
let bd = new Bd()

// Função para cadastrar uma nova despesa
function cadastrarDespesa() {

	// Obtém os valores dos campos de input
	let ano = document.getElementById('ano')
	let mes = document.getElementById('mes')
	let dia = document.getElementById('dia')
	let tipo = document.getElementById('tipo')
	let descricao = document.getElementById('descricao')
	let valor = document.getElementById('valor')

	// Cria uma nova instância da classe Despesa com os valores dos campos
	let despesa = new Despesa(
		ano.value, 
		mes.value, 
		dia.value, 
		tipo.value, 
		descricao.value,
		valor.value
	)

	// Verifica se todos os dados foram preenchidos corretamente
	if(despesa.validarDados()) {
		bd.gravar(despesa) // Grava a despesa no banco de dados (localStorage)

		// Exibe um modal de sucesso ao cadastrar a despesa
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
		// Exibe um modal de erro caso algum campo não tenha sido preenchido corretamente
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!'
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
		document.getElementById('modal_btn').className = 'btn btn-danger'

		// Exibe o modal de erro
		$('#modalRegistraDespesa').modal('show') 
	}
}

// Função para carregar a lista de despesas e exibi-las na página
function carregaListaDespesas() {
	let despesas = Array()
	despesas = bd.recuperarTodosRegistros() // Recupera todas as despesas cadastradas

	let listaDespesas = document.getElementById("listaDespesas") // Obtém a referência da tabela onde as despesas serão listadas

	// Itera sobre todas as despesas e as exibe na tabela
	despesas.forEach(function(d){
		var linha = listaDespesas.insertRow() // Cria uma nova linha na tabela
		linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}` // Exibe a data da despesa

		// Ajusta o tipo da despesa com base no valor
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

		// Exibe o tipo, descrição e valor da despesa
		linha.insertCell(1).innerHTML = d.tipo
		linha.insertCell(2).innerHTML = d.descricao
		linha.insertCell(3).innerHTML = d.valor
		console.log(d) // Exibe a despesa no console para debug
	})
}

// Função para pesquisar despesas com base nos filtros
function pesquisarDespesa(){
	// Obtém os valores dos campos de filtro
	let ano  = document.getElementById("ano").value
	let mes = document.getElementById("mes").value
	let dia = document.getElementById("dia").value
	let tipo = document.getElementById("tipo").value
	let descricao = document.getElementById("descricao").value
	let valor = document.getElementById("valor").value

	// Cria uma nova instância de Despesa com os filtros
	let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

	// Chama o método de pesquisa para filtrar as despesas
    bd.pesquisar(despesa);
}
