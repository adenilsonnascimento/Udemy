// Função para cadastrar uma despesa
function cadastrarDespesa() {
  
  // Obtém o valor selecionado no campo "ano" com o ID 'ano'
  let ano = document.getElementById('ano');
  
  // Obtém o valor selecionado no campo "mes" com o ID 'mes'
  let mes = document.getElementById('mes');
  
  // Obtém o valor digitado no campo "dia" com o ID 'dia'
  let dia = document.getElementById('dia');
  
  // Obtém o valor selecionado no campo "tipo" (ex: Alimentação, Educação, etc.) com o ID 'tipo'
  let tipo = document.getElementById('tipo');
  
  // Obtém o valor digitado no campo "descricao" com o ID 'descricao'
  let descricao = document.getElementById('descricao');
  
  // Obtém o valor digitado no campo "valor" com o ID 'valor'
  let valor = document.getElementById('valor');

  // Exibe no console os valores capturados nos campos de formulário para debug ou verificação
  console.log(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value);
}
