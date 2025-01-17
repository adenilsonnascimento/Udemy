// Classe Despesa: Define os dados de uma despesa (ano, mês, dia, tipo, descrição e valor)
class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor) {
        // Inicializa as propriedades da despesa com os valores passados
        this.ano = ano;
        this.mes = mes;
        this.dia = dia;
        this.tipo = tipo;
        this.descricao = descricao;
        this.valor = valor;
    }

    // Método para validar se todos os dados da despesa estão preenchidos corretamente
    validarDados() {
        // Verifica se algum campo está vazio, nulo ou indefinido
        for (let i in this) {
            if (this[i] == undefined || this[i] == '' || this[i] == null) {
                return false; // Se algum campo estiver vazio, retorna falso
            }
        }
        return true; // Se todos os campos estiverem preenchidos, retorna verdadeiro
    }
}

// Classe Bd: Gerencia as operações de armazenamento no localStorage
class Bd {

    constructor() {
        // Verifica se já existe um ID armazenado no localStorage para as despesas
        let id = localStorage.getItem('id');

        // Se não existe, inicializa o ID com o valor 0
        if (id === null) {
            localStorage.setItem('id', 0);
        }
    }

    // Método para obter o próximo ID disponível no localStorage
    getProximoId() {
        // Recupera o ID atual, converte para inteiro e soma 1 para gerar o próximo ID
        let proximoId = localStorage.getItem('id');
        return parseInt(proximoId) + 1;
    }

    // Método para gravar a despesa no localStorage
    gravar(d) {
        // Obtém o próximo ID para a despesa
        let id = this.getProximoId();

        // Armazena a despesa no localStorage com o ID gerado
        localStorage.setItem(id, JSON.stringify(d));

        // Atualiza o ID para o próximo valor
        localStorage.setItem('id', id);
    }
}

// Instancia um objeto da classe Bd para manipular o armazenamento de despesas
let bd = new Bd();

// Função para cadastrar uma nova despesa
function cadastrarDespesa() {
    // Obtém os valores dos campos de entrada (ano, mês, dia, tipo, descrição, valor)
    let ano = document.getElementById('ano');
    let mes = document.getElementById('mes');
    let dia = document.getElementById('dia');
    let tipo = document.getElementById('tipo');
    let descricao = document.getElementById('descricao');
    let valor = document.getElementById('valor');

    // Cria um objeto despesa com os valores dos campos
    let despesa = new Despesa(
        ano.value,
        mes.value,
        dia.value,
        tipo.value,
        descricao.value,
        valor.value
    );

    // Verifica se a despesa é válida (se todos os dados estão preenchidos)
    if (despesa.validarDados()) {
        // Se for válida, grava a despesa no localStorage
        bd.gravar(despesa);
        // Exibe o modal de sucesso
        $('#sucessoGravacao').modal('show');
    } else {
        // Se não for válida, exibe o modal de erro
        $('#erroGravacao').modal('show');
    }
}
