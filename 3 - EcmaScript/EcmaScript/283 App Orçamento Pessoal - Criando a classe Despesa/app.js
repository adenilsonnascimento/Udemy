// Definindo a classe Despesa
class Despesa {
  // O construtor da classe Despesa recebe os parâmetros ano, mes, dia, tipo, descricao e valor
  constructor(ano, mes, dia, tipo, descricao, valor) {
    this.ano = ano;            // Atribui o valor de ano à propriedade da classe
    this.mes = mes;            // Atribui o valor de mes à propriedade da classe
    this.dia = dia;            // Atribui o valor de dia à propriedade da classe
    this.tipo = tipo;          // Atribui o valor de tipo (categoria da despesa) à propriedade da classe
    this.descricao = descricao; // Atribui a descrição da despesa à propriedade da classe
    this.valor = valor;        // Atribui o valor da despesa à propriedade da classe
  }
}

// Função chamada ao cadastrar a despesa
function cadastrarDespesa() {

  // Pegando os elementos do HTML pelos seus IDs para recuperar os valores preenchidos pelo usuário
  let ano = document.getElementById('ano');
  let mes = document.getElementById('mes');
  let dia = document.getElementById('dia');
  let tipo = document.getElementById('tipo');
  let descricao = document.getElementById('descricao');
  let valor = document.getElementById('valor');

  // Criando um novo objeto da classe Despesa com os valores dos campos preenchidos no formulário
  let despesa = new Despesa(
    ano.value,          // O valor do campo 'ano' é atribuído à propriedade 'ano' da classe
    mes.value,          // O valor do campo 'mes' é atribuído à propriedade 'mes' da classe
    dia.value,          // O valor do campo 'dia' é atribuído à propriedade 'dia' da classe
    tipo.value,         // O valor do campo 'tipo' é atribuído à propriedade 'tipo' da classe
    descricao.value,    // O valor do campo 'descricao' é atribuído à propriedade 'descricao' da classe
    valor.value         // O valor do campo 'valor' é atribuído à propriedade 'valor' da classe
  );

  // Exibindo o objeto despesa no console para verificar se os dados foram corretamente preenchidos
  console.log(despesa);
}
