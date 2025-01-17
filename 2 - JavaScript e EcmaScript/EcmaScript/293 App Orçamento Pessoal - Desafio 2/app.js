// Definição da classe Despesa
class Despesa {
	constructor(ano, mes, dia, tipo, descricao, valor) {
		// Inicializa as propriedades da despesa com os parâmetros fornecidos
		this.ano = ano
		this.mes = mes
		this.dia = dia
		this.tipo = tipo
		this.descricao = descricao
		this.valor = valor
	}

	// Método para validar se todos os dados da despesa foram preenchidos corretamente
	validarDados() {
		// Verifica se algum campo está vazio, nulo ou indefinido
		for(let i in this) {
			if(this[i] == undefined || this[i] == '' || this[i] == null) {
				return false // Retorna false se algum dado estiver inválido
			}
		}
		return true // Retorna true se todos os dados estiverem válidos
	}
}

// Definição da classe Bd (Banco de Dados)
class Bd {

	constructor() {
		// Recupera o ID armazenado no localStorage para gerenciar os registros
		let id = localStorage.getItem('id')

		// Se não existir, inicializa o id com o valor 0
		if(id === null) {
			localStorage.setItem('id', 0)
		}
	}

	// Método para obter o próximo ID disponível
	getProximoId() {
		let proximoId = localStorage.getItem('id')
		return parseInt(proximoId) + 1 // Retorna o próximo ID disponível
	}

	// Método para gravar uma despesa no localStorage
	gravar(d) {
		// Obtém o próximo ID disponível
		let id = this.getProximoId()

		// Armazena a despesa no localStorage com o ID gerado
		localStorage.setItem(id, JSON.stringify(d))

		// Atualiza o ID no localStorage para o próximo valor
		localStorage.setItem('id', id)
	}

	// Método para recuperar todos os registros de despesas do localStorage
	recuperarTodosRegistros() {

		// Array que irá armazenar as despesas recuperadas
		let despesas = Array()

		// Recupera o ID máximo armazenado no localStorage
		let id = localStorage.getItem('id')

		// Itera sobre os IDs para recuperar todas as despesas
		for(let i = 1; i <= id; i++) {

			// Recupera cada despesa pelo ID
			let despesa = JSON.parse(localStorage.getItem(i))

			// Verifica se a despesa existe, caso contrário, pula o índice
			if(despesa === null) {
				continue
			}

			// Adiciona a despesa ao array
			despesas.push(despesa)
		}

		// Retorna o array de despesas
		return despesas
	}
	
}

// Instância do Banco de Dados
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

	// Cria um novo objeto Despesa com os valores obtidos
	let despesa = new Despesa(
		ano.value, 
		mes.value, 
		dia.value, 
		tipo.value, 
		descricao.value,
		valor.value
	)

	// Verifica se os dados são válidos
	if(despesa.validarDados()) {
		// Se forem válidos, grava a despesa no BD
		bd.gravar(despesa)

		// Exibe a mensagem de sucesso no modal
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
		// Se os dados forem inválidos, exibe o erro no modal
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!'
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
		document.getElementById('modal_btn').className = 'btn btn-danger'

		// Exibe o modal de erro
		$('#modalRegistraDespesa').modal('show') 
	}
}

// Função para carregar e exibir a lista de despesas cadastradas
function carregaListaDespesas() {

	// Recupera todas as despesas do BD
	let despesas = Array()

	despesas = bd.recuperarTodosRegistros() 

	// Obtém o elemento da lista de despesas na página
	let listaDespesas = document.getElementById("listaDespesas")

	// Itera sobre as despesas e as exibe na tabela
	despesas.forEach(function(d){

		// Cria uma nova linha para a tabela
		var linha = listaDespesas.insertRow();

		// Preenche as colunas da linha com as informações da despesa
		linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}` 

		// Ajusta o tipo da despesa de acordo com o valor
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
		console.log(d) // Log para depuração
	})

 }
