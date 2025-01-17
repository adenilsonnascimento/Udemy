// Classe Despesa que representa uma despesa
class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor) {
        this.ano = ano         // Ano da despesa
        this.mes = mes         // Mês da despesa
        this.dia = dia         // Dia da despesa
        this.tipo = tipo       // Tipo da despesa (alimentação, educação, etc)
        this.descricao = descricao // Descrição da despesa
        this.valor = valor     // Valor da despesa
    }

    // Método para validar se todos os campos da despesa foram preenchidos
    validarDados() {
        for (let i in this) {
            // Se algum campo estiver vazio, undefined ou null, retorna false
            if (this[i] == undefined || this[i] == '' || this[i] == null) {
                return false
            }
        }
        return true
    }
}

// Classe Bd que representa o banco de dados utilizando o localStorage
class Bd {

    constructor() {
        let id = localStorage.getItem('id')

        // Se não houver id, define o id inicial como 0
        if (id === null) {
            localStorage.setItem('id', 0)
        }
    }

    // Método que retorna o próximo id disponível no localStorage
    getProximoId() {
        let proximoId = localStorage.getItem('id')
        return parseInt(proximoId) + 1
    }

    // Método para gravar uma despesa no localStorage
    gravar(d) {
        let id = this.getProximoId()

        // Armazena a despesa com o próximo id
        localStorage.setItem(id, JSON.stringify(d))

        // Atualiza o id no localStorage
        localStorage.setItem('id', id)
    }

    // Método para recuperar todas as despesas do localStorage
    recuperarTodosRegistros() {

        // Array para armazenar as despesas
        let despesas = Array()

        let id = localStorage.getItem('id')

        // Recupera todas as despesas armazenadas
        for (let i = 1; i <= id; i++) {

            // Recupera a despesa usando o id
            let despesa = JSON.parse(localStorage.getItem(i))

            // Se a despesa for null (índice pulado ou removido), ignora
            if (despesa === null) {
                continue
            }
            despesa.id = i
            despesas.push(despesa)
        }

        return despesas
    }

    // Método para pesquisar despesas com base em um filtro
    pesquisar(despesa) {

        // Inicia com todas as despesas recuperadas
        let despesasFiltradas = Array()
        despesasFiltradas = this.recuperarTodosRegistros()
        console.log(despesasFiltradas);
        console.log(despesa)

        // Filtro de ano
        if (despesa.ano != '') {
            console.log("filtro de ano");
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
        }

        // Filtro de mês
        if (despesa.mes != '') {
            console.log("filtro de mes");
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
        }

        // Filtro de dia
        if (despesa.dia != '') {
            console.log("filtro de dia");
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
        }

        // Filtro de tipo
        if (despesa.tipo != '') {
            console.log("filtro de tipo");
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
        }

        // Filtro de descrição
        if (despesa.descricao != '') {
            console.log("filtro de descricao");
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
        }

        // Filtro de valor
        if (despesa.valor != '') {
            console.log("filtro de valor");
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor)
        }

        return despesasFiltradas
    }

    // Método para remover uma despesa com base no id
    remover(id) {
        localStorage.removeItem(id)
    }
}

// Instancia um objeto de Bd
let bd = new Bd()

// Função para cadastrar uma despesa
function cadastrarDespesa() {

    // Obtém os valores dos campos de input
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    // Cria uma nova despesa com os dados fornecidos
    let despesa = new Despesa(
        ano.value, 
        mes.value, 
        dia.value, 
        tipo.value, 
        descricao.value,
        valor.value
    )

    // Verifica se os dados são válidos
    if (despesa.validarDados()) {
        // Se válidos, grava a despesa no banco
        bd.gravar(despesa)

        // Exibe o modal de sucesso
        document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
        document.getElementById('modal_titulo_div').className = 'modal-header text-success'
        document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso!'
        document.getElementById('modal_btn').innerHTML = 'Voltar'
        document.getElementById('modal_btn').className = 'btn btn-success'

        // Exibe o modal
        $('#modalRegistraDespesa').modal('show')

        // Limpa os campos de input
        ano.value = '' 
        mes.value = ''
        dia.value = ''
        tipo.value = ''
        descricao.value = ''
        valor.value = ''

    } else {
        // Se inválidos, exibe o modal de erro
        document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
        document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
        document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos corretamente!'
        document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
        document.getElementById('modal_btn').className = 'btn btn-danger'

        // Exibe o modal de erro
        $('#modalRegistraDespesa').modal('show')
    }
}

// Função para carregar a lista de despesas
function carregaListaDespesas(despesas = Array(), filtro = false) {

    // Se não houver despesas passadas e não for um filtro, carrega todas as despesas
    if (despesas.length == 0 && filtro == false) {
        despesas = bd.recuperarTodosRegistros()
    }

    let listaDespesas = document.getElementById("listaDespesas")
    listaDespesas.innerHTML = ''
    despesas.forEach(function (d) {

        // Cria uma linha (tr) na tabela
        let linha = listaDespesas.insertRow()

        // Cria as células (td) e preenche com os dados da despesa
        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`

        // Ajusta o tipo para um valor mais amigável
        switch (d.tipo) {
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
        linha.insertCell(1).innerHTML = d.tipo
        linha.insertCell(2).innerHTML = d.descricao
        linha.insertCell(3).innerHTML = d.valor

        // Cria o botão de exclusão
        let btn = document.createElement('button')
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fa fa-times"  ></i>'
        btn.id = `id_despesa_${d.id}`
        btn.onclick = function () {
            let id = this.id.replace('id_despesa_', '')
            // Remove a despesa pelo id
            bd.remover(id)
            window.location.reload()
        }
        linha.insertCell(4).append(btn)
        console.log(d)
    })
}

// Função para pesquisar despesas com base nos filtros
function pesquisarDespesa() {

    // Obtém os valores dos campos de filtro
    let ano = document.getElementById("ano").value
    let mes = document.getElementById("mes").value
    let dia = document.getElementById("dia").value
    let tipo = document.getElementById("tipo").value
    let descricao = document.getElementById("descricao").value
    let valor = document.getElementById("valor").value

    // Cria um objeto de despesa com os dados de filtro
    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    // Filtra as despesas com base no objeto criado
    let despesas = bd.pesquisar(despesa)

    // Carrega as despesas filtradas na tabela
    carregaListaDespesas(despesas, true)
}
