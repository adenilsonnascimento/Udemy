// Definindo a classe Despesa
class Despesa {
  // O construtor inicializa as propriedades do objeto Despesa
  constructor(ano, mes, dia, tipo, descricao, valor) {
    this.ano = ano;        // Ano da despesa
    this.mes = mes;        // Mês da despesa
    this.dia = dia;        // Dia da despesa
    this.tipo = tipo;      // Tipo da despesa (ex: Alimentação, Saúde, etc.)
    this.descricao = descricao; // Descrição da despesa
    this.valor = valor;    // Valor da despesa
  }
}

// Função para cadastrar a despesa
function cadastrarDespesa() {
  // Obtendo os valores dos campos do formulário
  let ano = document.getElementById('ano');             // Ano selecionado
  let mes = document.getElementById('mes');             // Mês selecionado
  let dia = document.getElementById('dia');             // Dia digitado
  let tipo = document.getElementById('tipo');           // Tipo de despesa selecionado
  let descricao = document.getElementById('descricao'); // Descrição digitada
  let valor = document.getElementById('valor');         // Valor digitado

  // Criando uma nova instância do objeto Despesa com os valores obtidos
  let despesa = new Despesa(
    ano.value,       // Valor do ano
    mes.value,       // Valor do mês
    dia.value,       // Valor do dia
    tipo.value,      // Tipo de despesa
    descricao.value, // Descrição da despesa
    valor.value      // Valor da despesa
  );

  // Função para gravar a despesa no localStorage
  gravar(despesa);
}

// Função para gravar os dados da despesa no localStorage
function gravar(d) {
  // Converte o objeto despesa em uma string JSON e grava no localStorage
  localStorage.setItem('despesa', JSON.stringify(d));
}
