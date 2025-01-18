// Classe que representa uma despesa
class Despesa {
    // Construtor da classe Despesa, que recebe ano, mês, dia, tipo, descrição e valor
	constructor(ano, mes, dia, tipo, descricao, valor) {
		this.ano = ano // Atribui o ano da despesa
		this.mes = mes // Atribui o mês da despesa
		this.dia = dia // Atribui o dia da despesa
		this.tipo = tipo // Atribui o tipo de despesa (alimentação, transporte, etc.)
		this.descricao = descricao // Atribui a descrição da despesa
		this.valor = valor // Atribui o valor da despesa
	}

    // Método para validar se todos os dados da despesa foram preenchidos corretamente
	validarDados() {
		for(let i in this) { // Itera sobre os atributos da classe
			if(this[i] == undefined || this[i] == '' || this[i] == null) { // Se algum campo estiver vazio ou nulo
				return false // Retorna false, indicando que a validação falhou
			}
		}
		return true // Retorna true, indicando que todos os dados foram preenchidos
	}
}

// Classe para interagir com o armazenamento local (localStorage)
class Bd {
    // Construtor da classe Bd, responsável por inicializar o id no localStorage
	constructor() {
		let id = localStorage.getItem('id') // Obtém o valor do id armazenado no localStorage

		if(id === null) { // Se não houver id no localStorage
			localStorage.setItem('id', 0) // Inicializa o id com o valor 0
		}
	}

    // Método que retorna o próximo id disponível
	getProximoId() {
		let proximoId = localStorage.getItem('id') // Obtém o id atual do localStorage
		return parseInt(proximoId) + 1 // Retorna o próximo id (id + 1)
	}

    // Método para gravar uma nova despesa no localStorage
	gravar(d) {
		let id = this.getProximoId() // Obtém o próximo id

		localStorage.setItem(id, JSON.stringify(d)) // Armazena a despesa no localStorage usando o id como chave

		localStorage.setItem('id', id) // Atualiza o id no localStorage
	}
}

// Instância da classe Bd
let bd = new Bd()

// Função para cadastrar uma nova despesa
function cadastrarDespesa() {

    // Obtém os valores dos campos de entrada
	let ano = document.getElementById('ano')
	let mes = document.getElementById('mes')
	let dia = document.getElementById('dia')
	let tipo = document.getElementById('tipo')
	let descricao = document.getElementById('descricao')
	let valor = document.getElementById('valor')

    // Cria um novo objeto da classe Despesa
	let despesa = new Despesa(
		ano.value,  // Ano da despesa
		mes.value,  // Mês da despesa
		dia.value,  // Dia da despesa
		tipo.value, // Tipo da despesa
		descricao.value, // Descrição da despesa
		valor.value  // Valor da despesa
	)

    // Verifica se os dados da despesa são válidos
	if(despesa.validarDados()) {
        // Caso os dados sejam válidos, exibe uma mensagem de sucesso
		// Exibe o título e conteúdo do modal de sucesso
		document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
		document.getElementById('modal_titulo_div').className = 'modal-header text-success'
		document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso!'
		document.getElementById('modal_btn').innerHTML = 'Voltar'
		document.getElementById('modal_btn').className = 'btn btn-success'

		// Exibe o modal de sucesso
		$('#modalRegistraDespesa').modal('show') 
	} else {
        // Caso os dados não sejam válidos, exibe uma mensagem de erro
		// Exibe o título e conteúdo do modal de erro
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!'
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
		document.getElementById('modal_btn').className = 'btn btn-danger'

		// Exibe o modal de erro
		$('#modalRegistraDespesa').modal('show') 
	}
}
