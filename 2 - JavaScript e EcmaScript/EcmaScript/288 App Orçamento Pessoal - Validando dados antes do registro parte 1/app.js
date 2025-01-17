// Classe Despesa que representa uma despesa, contendo as informações como ano, mês, dia, tipo, descrição e valor
class Despesa {
    // Construtor para inicializar os dados da despesa
    constructor(ano, mes, dia, tipo, descricao, valor) {
        this.ano = ano        // Ano da despesa
        this.mes = mes        // Mês da despesa
        this.dia = dia        // Dia da despesa
        this.tipo = tipo      // Tipo de despesa (Alimentação, Educação, etc.)
        this.descricao = descricao  // Descrição detalhada da despesa
        this.valor = valor    // Valor da despesa
    }

    // Método para validar se todos os dados da despesa foram preenchidos
    validarDados() {
        for (let i in this) {
            // Se algum dado for vazio, undefined ou null, retorna falso
            if (this[i] == undefined || this[i] == '' || this[i] == null) {
                return false
            }
        }
        // Se todos os dados forem válidos, retorna verdadeiro
        return true
    }
}

// Classe Bd que representa o banco de dados local (Local Storage)
class Bd {
    constructor() {
        let id = localStorage.getItem('id')  // Verifica se o ID já está armazenado no Local Storage

        // Se o ID não estiver no Local Storage, define o ID inicial como 0
        if (id === null) {
            localStorage.setItem('id', 0)
        }
    }

    // Método para obter o próximo ID disponível no Local Storage
    getProximoId() {
        let proximoId = localStorage.getItem('id')  // Recupera o ID atual
        return parseInt(proximoId) + 1  // Retorna o próximo ID, incrementando o valor atual
    }

    // Método para gravar uma nova despesa no Local Storage
    gravar(d) {
        let id = this.getProximoId()  // Obtém o próximo ID disponível

        // Armazena a despesa no Local Storage usando o ID como chave
        localStorage.setItem(id, JSON.stringify(d))

        // Atualiza o ID para o próximo
        localStorage.setItem('id', id)
    }
}

// Instancia um objeto da classe Bd para interagir com o Local Storage
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

    // Cria um novo objeto Despesa com os dados coletados do formulário
    let despesa = new Despesa(
        ano.value, 
        mes.value, 
        dia.value, 
        tipo.value, 
        descricao.value,
        valor.value
    )
    
    // Verifica se os dados da despesa são válidos
    if(despesa.validarDados()) {
        // Se os dados forem válidos, você pode gravar no banco de dados
        // bd.gravar(despesa)

        // Exibe uma mensagem de sucesso no console (aqui, um "dialog" de sucesso pode ser mostrado na interface)
        console.log('Dados válidos')
    } else {
        // Se os dados forem inválidos, exibe uma mensagem de erro no console (pode ser um "dialog" de erro)
        console.log('Dados inválidos')
    }
}
