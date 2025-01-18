// Define uma classe para o objeto de despesa
class Despesa {
    // Construtor para criar um novo objeto de despesa
	constructor(ano, mes, dia, tipo, descricao, valor) {
		this.ano = ano;  // Ano da despesa
		this.mes = mes;  // Mês da despesa
		this.dia = dia;  // Dia da despesa
		this.tipo = tipo;  // Tipo da despesa (ex: Alimentação, Saúde, etc.)
		this.descricao = descricao;  // Descrição da despesa
		this.valor = valor;  // Valor da despesa
	}

    // Método para validar os dados da despesa
	validarDados() {
		// Loop por cada propriedade do objeto
		for(let i in this) {
			// Verifica se alguma propriedade é indefinida, vazia ou nula
			if(this[i] == undefined || this[i] == '' || this[i] == null) {
				return false;  // Retorna falso se alguma propriedade for inválida
			}
		}
		return true;  // Retorna verdadeiro se todas as propriedades forem válidas
	}
}

// Define uma classe para gerenciar o armazenamento das despesas (localStorage)
class Bd {

    // Construtor para inicializar o armazenamento local
	constructor() {
		let id = localStorage.getItem('id');  // Obtém o ID atual do localStorage

		// Se não houver ID armazenado, inicializa com 0
		if(id === null) {
			localStorage.setItem('id', 0);
		}
	}

    // Método para obter o próximo ID disponível para uma nova despesa
	getProximoId() {
		let proximoId = localStorage.getItem('id');  // Obtém o ID atual
		return parseInt(proximoId) + 1;  // Incrementa e retorna o próximo ID
	}

    // Método para salvar um objeto de despesa no localStorage
	gravar(d) {
		let id = this.getProximoId();  // Obtém o próximo ID para a nova despesa

		localStorage.setItem(id, JSON.stringify(d));  // Armazena o objeto da despesa no localStorage

		localStorage.setItem('id', id);  // Atualiza o contador de IDs no localStorage
	}

    // Método para recuperar todas as despesas salvas no localStorage
	recuperarTodosRegistros() {

		// Inicializa um array para armazenar as despesas
		let despesas = Array();

		let id = localStorage.getItem('id');  // Obtém o ID atual

		// Loop por todos os IDs de despesas possíveis
		for(let i = 1; i <= id; i++) {

			// Recupera cada despesa pelo seu ID
			let despesa = JSON.parse(localStorage.getItem(i));

			// Ignora valores nulos, caso haja entradas ausentes
			if(despesa === null) {
				continue;
			}

			despesas.push(despesa);  // Adiciona a despesa ao array
		}

		return despesas;  // Retorna o array com todas as despesas
	}
}

// Inicializa o objeto Bd (localStorage)
let bd = new Bd()

// Função para lidar com o processo de registro de uma nova despesa
function cadastrarDespesa() {

	// Obtém os valores dos campos do formulário
	let ano = document.getElementById('ano');
	let mes = document.getElementById('mes');
	let dia = document.getElementById('dia');
	let tipo = document.getElementById('tipo');
	let descricao = document.getElementById('descricao');
	let valor = document.getElementById('valor');

	// Cria um novo objeto de despesa com os dados do formulário
	let despesa = new Despesa(
		ano.value, 
		mes.value, 
		dia.value, 
		tipo.value, 
		descricao.value,
		valor.value
	)

	// Valida os dados e lida com o resultado
	if(despesa.validarDados()) {
		// Descomente a linha abaixo para realmente salvar a despesa
		//bd.gravar(despesa)

		// Exibe uma mensagem de sucesso no modal
		document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso';
		document.getElementById('modal_titulo_div').className = 'modal-header text-success';
		document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso!';
		document.getElementById('modal_btn').innerHTML = 'Voltar';
		document.getElementById('modal_btn').className = 'btn btn-success';

		// Exibe o modal de sucesso
		$('#modalRegistraDespesa').modal('show'); 
	} else {
		// Exibe uma mensagem de erro no modal se a validação falhar
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro';
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger';
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!';
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir';
		document.getElementById('modal_btn').className = 'btn btn-danger';

		// Exibe o modal de erro
		$('#modalRegistraDespesa').modal('show'); 
	}
}

// Função para carregar e exibir todas as despesas
function carregaListaDespesas() {

	// Inicializa um array vazio para as despesas
	let despesas = Array();

	// Recupera todas as despesas salvas
	despesas = bd.recuperarTodosRegistros();

	// Exibe as despesas no console (para fins de depuração)
	console.log(despesas);
}
