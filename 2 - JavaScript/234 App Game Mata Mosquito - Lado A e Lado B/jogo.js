// Declaração de variáveis globais para armazenar a altura e largura da janela
let altura = 0
let largura = 0

// Função para ajustar as dimensões do palco do jogo com base no tamanho da janela
function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight // Obtém a altura visível da janela
    largura = window.innerWidth // Obtém a largura visível da janela

    console.log(largura, altura) // Exibe as dimensões no console
}

// Inicializa as dimensões do palco do jogo
ajustaTamanhoPalcoJogo()

// Função para gerar uma posição aleatória para o mosquito
function posicaoRandomica() {
    // Calcula uma posição X aleatória, considerando o limite da largura da janela
    let posicaoX = Math.floor(Math.random() * largura) - 90
    // Calcula uma posição Y aleatória, considerando o limite da altura da janela
    let posicaoY = Math.floor(Math.random() * altura) - 90

    // Garante que as posições não sejam negativas
    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log(posicaoX, posicaoY) // Exibe as posições no console

    // Cria dinamicamente um elemento HTML para o mosquito
    let mosquito = document.createElement('img') // Cria um elemento <img>
    mosquito.src = 'imagens/mosquito.png' // Define o caminho para a imagem do mosquito
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio() // Define as classes CSS para tamanho e orientação
    mosquito.style.left = posicaoX + 'px' // Define a posição horizontal
    mosquito.style.top = posicaoY + 'px' // Define a posição vertical
    mosquito.style.position = 'absolute' // Define que o mosquito será posicionado de forma absoluta

    // Adiciona o elemento ao corpo do documento
    document.body.appendChild(mosquito)
}

// Função para gerar um tamanho aleatório para o mosquito
function tamanhoAleatorio() {
    let classe = Math.floor(Math.random() * 3) // Gera um número aleatório entre 0 e 2
    
    // Retorna uma classe baseada no número gerado
    switch(classe) {
        case 0:
            return 'mosquito1' // Tamanho pequeno
        case 1:
            return 'mosquito2' // Tamanho médio
        case 2:
            return 'mosquito3' // Tamanho grande
    }
}

// Função para gerar a orientação aleatória do mosquito
function ladoAleatorio() {
    let classe = Math.floor(Math.random() * 2) // Gera um número aleatório entre 0 e 1
    
    // Retorna uma classe baseada no número gerado
    switch(classe) {
        case 0:
            return 'ladoA' // Orientação normal
        case 1:
            return 'ladoB' // Orientação invertida
    }
}
