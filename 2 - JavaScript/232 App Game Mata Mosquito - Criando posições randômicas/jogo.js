// Define duas variáveis globais que armazenarão as dimensões da janela do navegador
let altura = 0
let largura = 0

// Função para ajustar as dimensões do palco do jogo com base no tamanho da janela do navegador
function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight // Obtém a altura visível da janela do navegador
    largura = window.innerWidth // Obtém a largura visível da janela do navegador

    console.log(largura, altura) // Exibe as dimensões da janela no console
}

// Inicializa as dimensões do palco do jogo chamando a função logo que o código é executado
ajustaTamanhoPalcoJogo()

// Função para gerar uma posição aleatória para o elemento "mosquito"
function posicaoRandomica() {
    // Calcula uma posição X aleatória dentro do limite da largura da janela
    let posicaoX = Math.floor(Math.random() * largura) - 90
    // Calcula uma posição Y aleatória dentro do limite da altura da janela
    let posicaoY = Math.floor(Math.random() * altura) - 90

    // Ajusta a posição X para evitar valores negativos
    posicaoX = posicaoX < 0 ? 0 : posicaoX
    // Ajusta a posição Y para evitar valores negativos
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log(posicaoX, posicaoY) // Exibe as posições X e Y no console

    // Cria dinamicamente um elemento HTML para o mosquito
    let mosquito = document.createElement('img') // Cria uma nova tag <img>
    mosquito.src = 'imagens/mosquito.png' // Define o caminho da imagem do mosquito
    mosquito.className = 'mosquito1' // Atribui uma classe CSS ao elemento
    mosquito.style.left = posicaoX + 'px' // Define a posição horizontal do mosquito
    mosquito.style.top = posicaoY + 'px' // Define a posição vertical do mosquito
    mosquito.style.position = 'absolute' // Define que o mosquito será posicionado de forma absoluta

    // Adiciona o elemento mosquito ao corpo do documento
    document.body.appendChild(mosquito)
}
