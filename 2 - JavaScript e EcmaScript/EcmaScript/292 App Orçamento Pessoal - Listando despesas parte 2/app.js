// Definindo a classe Despesa, que representa uma despesa no orçamento
class Despesa {
	// Construtor que recebe ano, mês, dia, tipo, descrição e valor
	constructor(ano, mes, dia, tipo, descricao, valor) {
		this.ano = ano
		this.mes = mes
		this.dia = dia
		this.tipo = tipo
		this.descricao = descricao
		this.valor = valor
	}

	// Método para validar se todos os dados da despesa foram preenchidos corretamente
	validarDados() {
		// Itera por todos os atributos da despesa e verifica se algum está vazio, nulo ou indefinido
		for(let i in this) {
			if(this[i] == undefined || this[i] == '' || this[i] == null) {
				return false // Se algum campo estiver vazio, retorna false
			}
		}
		return true // Se todos os campos estiverem preenchidos, retorna true
	}
}

// Definindo a classe Bd, que é responsável por gerenciar o armazenamento das despesas no localStorage
class Bd {

	// Construtor que inicializa o id no localStorage caso ainda não exista
	constructor() {
		let id = localStorage.getItem('id')

		if(id === null) {
			localStorage.setItem('id', 0) // Se não houver id, define o id como 0
		}
	}

	// Método que retorna o próximo id disponível no localStorage
	getProximoId() {
		let proximoId = localStorage.getItem('id')
		return parseInt(proximoId) + 1 // Retorna o próximo id
	}

	// Método que grava uma despesa no localStorage
	gravar(d) {
		let id = this.getProximoId() // Obtém o próximo id

		localStorage.setItem(id, JSON.stringify(d)) // Armazena a despesa no localStorage

		localStorage.setItem('id', id) // Atualiza o id no localStorage
	}

	// Método que recupera todas as despesas armazenadas no localStorage
	recuperarTodosRegistros() {

		// Array para armazenar todas as despesas
		let despesas = Array()

		let id = localStorage.getItem('id')

		// Recupera todas as despesas armazenadas no localStorage
		for(let i = 1; i <= id; i++) {

			// Recupera a despesa correspondente ao id
			let despesa = JSON.parse(localStorage.getItem(i))

			// Verifica se a despesa existe (caso tenha sido excluída ou não cadastrada)
			if(despesa === null) {
				continue // Se a despesa não existir, pula para o próximo id
			}

			despesas.push(despesa) // Adiciona a despesa ao array
		}

		return despesas // Retorna o array de despesas
	}
}

// Instancia a classe Bd para utilizar os métodos
let bd = new Bd()

// Função para cadastrar uma despesa
function cadastrarDespesa() {

	// Obtém os valores dos campos de entrada
	let ano = document.getElementById('ano')
	let mes = document.getElementById('mes')
	let dia = document.getElementById('dia')
	let tipo = document.getElementById('tipo')
	let descricao = document.getElementById('descricao')
	let valor = document.getElementById('valor')

	// Cria uma nova despesa com os dados inseridos
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
		// Se os dados forem válidos, grava a despesa
		bd.gravar(despesa)

		// Exibe o modal de sucesso
		document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
		document.getElementById('modal_titulo_div').className = 'modal-header text-success'
		document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso!'
		document.getElementById('modal_btn').innerHTML = 'Voltar'
		document.getElementById('modal_btn').className = 'btn btn-success'

		// Exibe o modal de sucesso
		$('#modalRegistraDespesa').modal('show') 
		
	} else {
		// Se houver erro na validação, exibe o modal de erro
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

	// Array para armazenar as despesas recuperadas
	let despesas = Array()

	despesas = bd.recuperarTodosRegistros() // Recupera todas as despesas cadastradas

	/*

	<tr>
		<td>15/03/2018</td>
		<td>Alimentação</td>
		<td>Compras do mês</td>
		<td>444.75</td>
	</tr>

	*/

	// Obtém a referência da tabela onde as despesas serão listadas
	let listaDespesas = document.getElementById("listaDespesas")

	// Itera sobre as despesas e cria uma linha para cada uma delas
	despesas.forEach(function(d){

		// Cria uma nova linha na tabela
		var linha = listaDespesas.insertRow();

		// Cria as células (colunas) da linha
		linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}` 

		// Ajusta o tipo de despesa (convertendo o número para o nome correspondente)
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
		// Adiciona as colunas à linha
		linha.insertCell(1).innerHTML = d.tipo
		linha.insertCell(2).innerHTML = d.descricao
		linha.insertCell(3).innerHTML = d.valor

		// Exibe a despesa no console (útil para debug)
		console.log(d)
	})

}
