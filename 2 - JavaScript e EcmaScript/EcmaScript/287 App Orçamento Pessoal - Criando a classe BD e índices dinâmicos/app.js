// Classe Despesa, responsável por representar uma despesa com seus atributos.
class Despesa {
	// O construtor define as propriedades da despesa: ano, mês, dia, tipo, descrição e valor.
	constructor(ano, mes, dia, tipo, descricao, valor) {
		this.ano = ano;           // Ano da despesa
		this.mes = mes;           // Mês da despesa
		this.dia = dia;           // Dia da despesa
		this.tipo = tipo;         // Tipo da despesa (ex: Alimentação, Lazer, etc.)
		this.descricao = descricao; // Descrição detalhada da despesa
		this.valor = valor;       // Valor da despesa
	}
}

// Classe Bd, responsável por gerenciar o armazenamento de despesas no LocalStorage.
class Bd {

	constructor() {
		// Verifica se já existe um ID salvo no LocalStorage.
		let id = localStorage.getItem('id');

		// Caso não exista, inicializa o ID com o valor 0.
		if(id === null) {
			localStorage.setItem('id', 0);
		}
	}

	// Método para obter o próximo ID disponível, baseado no valor atual do ID no LocalStorage.
	getProximoId() {
		let proximoId = localStorage.getItem('id'); // Obtém o ID atual.
		return parseInt(proximoId) + 1;              // Retorna o próximo ID incrementado em 1.
	}

	// Método para gravar uma despesa no LocalStorage.
	gravar(d) {
		let id = this.getProximoId(); // Obtém o próximo ID para a despesa.

		// Armazena a despesa no LocalStorage usando o ID gerado e a despesa convertida para string.
		localStorage.setItem(id, JSON.stringify(d));

		// Atualiza o ID no LocalStorage para o próximo valor.
		localStorage.setItem('id', id);
	}
}

// Instância da classe Bd para manipular o LocalStorage.
let bd = new Bd()

// Função para cadastrar uma nova despesa.
function cadastrarDespesa() {

	// Obtém os valores dos campos do formulário.
	let ano = document.getElementById('ano');
	let mes = document.getElementById('mes');
	let dia = document.getElementById('dia');
	let tipo = document.getElementById('tipo');
	let descricao = document.getElementById('descricao');
	let valor = document.getElementById('valor');

	// Cria uma nova instância de Despesa com os valores obtidos.
	let despesa = new Despesa(
		ano.value,      // Ano da despesa
		mes.value,      // Mês da despesa
		dia.value,      // Dia da despesa
		tipo.value,     // Tipo da despesa
		descricao.value, // Descrição da despesa
		valor.value     // Valor da despesa
	);

	// Chama o método gravar da classe Bd para salvar a despesa no LocalStorage.
	bd.gravar(despesa);
}
