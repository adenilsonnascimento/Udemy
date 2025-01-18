// Definindo a classe 'Despesa', que irá armazenar as informações sobre cada despesa.
class Despesa {
	constructor(ano, mes, dia, tipo, descricao, valor) {
		// Atribuindo valores passados para as propriedades do objeto.
		this.ano = ano
		this.mes = mes
		this.dia = dia
		this.tipo = tipo
		this.descricao = descricao
		this.valor = valor
	}

	// Método que valida se todos os dados da despesa foram preenchidos.
	validarDados() {
		// Percorrendo todas as propriedades da despesa e verificando se algum valor é inválido.
		for(let i in this) {
			if(this[i] == undefined || this[i] == '' || this[i] == null) {
				return false
			}
		}
		return true
	}
}

// Definindo a classe 'Bd', que gerencia o armazenamento e recuperação de despesas no 'localStorage'.
class Bd {

	constructor() {
		// Verificando se já existe um 'id' no localStorage, caso contrário, inicializa com 0.
		let id = localStorage.getItem('id')

		if(id === null) {
			localStorage.setItem('id', 0)
		}
	}

	// Método que retorna o próximo ID para uma nova despesa.
	getProximoId() {
		let proximoId = localStorage.getItem('id')
		return parseInt(proximoId) + 1
	}

	// Método para gravar uma despesa no 'localStorage'.
	gravar(d) {
		// Obtendo o próximo ID e armazenando a despesa.
		let id = this.getProximoId()

		localStorage.setItem(id, JSON.stringify(d))

		// Atualizando o 'id' no localStorage.
		localStorage.setItem('id', id)
	}

	// Método para recuperar todas as despesas armazenadas no 'localStorage'.
	recuperarTodosRegistros() {

		// Criando um array para armazenar as despesas.
		let despesas = Array()

		// Obtendo o ID máximo para saber até onde buscar as despesas.
		let id = localStorage.getItem('id')

		// Iterando sobre todos os IDs e recuperando as despesas armazenadas.
		for(let i = 1; i <= id; i++) {

			// Recuperando a despesa e verificando se o valor existe.
			let despesa = JSON.parse(localStorage.getItem(i))

			// Caso a despesa seja nula, pulamos para o próximo índice.
			if(despesa === null) {
				continue
			}

			// Adicionando a despesa ao array.
			despesas.push(despesa)
		}

		// Retornando todas as despesas.
		return despesas
	}

	// Método para realizar uma pesquisa de despesas (ainda não implementado).
	pesquisar(despesa){
		console.log(despesa);
	}
}

// Instanciando o objeto 'Bd', que será usado para gerenciar as despesas.
let bd = new Bd()

// Função para cadastrar uma nova despesa.
function cadastrarDespesa() {

	// Obtendo os valores dos campos do formulário.
	let ano = document.getElementById('ano')
	let mes = document.getElementById('mes')
	let dia = document.getElementById('dia')
	let tipo = document.getElementById('tipo')
	let descricao = document.getElementById('descricao')
	let valor = document.getElementById('valor')

	// Criando uma nova despesa com os valores informados.
	let despesa = new Despesa(
		ano.value, 
		mes.value, 
		dia.value, 
		tipo.value, 
		descricao.value,
		valor.value
	)

	// Verificando se a despesa possui todos os dados preenchidos.
	if(despesa.validarDados()) {
		// Se os dados forem válidos, grava a despesa no 'localStorage'.
		bd.gravar(despesa)

		// Exibindo um modal de sucesso.
		document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
		document.getElementById('modal_titulo_div').className = 'modal-header text-success'
		document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso!'
		document.getElementById('modal_btn').innerHTML = 'Voltar'
		document.getElementById('modal_btn').className = 'btn btn-success'

		// Mostrando o modal.
		$('#modalRegistraDespesa').modal('show') 

		// Limpando os campos do formulário após o cadastro.
		ano.value = '' 
		mes.value = ''
		dia.value = ''
		tipo.value = ''
		descricao.value = ''
		valor.value = ''
		
	} else {
		// Se os dados não forem válidos, exibe um modal de erro.
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!'
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
		document.getElementById('modal_btn').className = 'btn btn-danger'

		// Mostrando o modal de erro.
		$('#modalRegistraDespesa').modal('show') 
	}
}

// Função para carregar a lista de despesas armazenadas.
function carregaListaDespesas() {

	// Recuperando todas as despesas do 'localStorage'.
	let despesas = Array()

	despesas = bd.recuperarTodosRegistros() 

	// Obtendo a referência da tabela onde as despesas serão exibidas.
	let listaDespesas = document.getElementById("listaDespesas")

	// Iterando sobre cada despesa para exibir os dados na tabela.
	despesas.forEach(function(d){

		// Criando uma nova linha na tabela.
		var linha = listaDespesas.insertRow();

		// Adicionando as colunas (células) para cada campo da despesa.
		linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}` 

		// Ajustando o tipo de despesa para exibir o nome adequado.
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
		// Exibindo as outras colunas.
		linha.insertCell(1).innerHTML = d.tipo
		linha.insertCell(2).innerHTML = d.descricao
		linha.insertCell(3).innerHTML = d.valor
		console.log(d)
	})
}

// Função para pesquisar despesas, mas a lógica de pesquisa ainda não foi implementada.
function pesquisarDespesa(){
	 
	// Obtendo os valores de busca do formulário.
	let ano  = document.getElementById("ano").value
	let mes = document.getElementById("mes").value
	let dia = document.getElementById("dia").value
	let tipo = document.getElementById("tipo").value
	let descricao = document.getElementById("descricao").value
	let valor = document.getElementById("valor").value

	// Criando um objeto 'Despesa' com os filtros fornecidos.
	let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    // Chamando a função de pesquisa no 'Bd' (ainda não implementada).
    bd.pesquisar(despesa);
 }
