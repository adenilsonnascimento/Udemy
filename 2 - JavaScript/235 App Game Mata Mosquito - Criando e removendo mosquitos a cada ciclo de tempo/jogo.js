// Variáveis para armazenar as dimensões da janela do navegador
let altura = 0;
let largura = 0;

// Função que ajusta as dimensões do palco do jogo com base no tamanho da janela
function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight; // Altura da janela
    largura = window.innerWidth; // Largura da janela

    console.log(largura, altura); // Exibe as dimensões no console para depuração
}

// Chama a função ao carregar o script para definir as dimensões iniciais
ajustaTamanhoPalcoJogo();

// Função que cria um mosquito em uma posição aleatória na tela
function posicaoRandomica() {
    // Remove o mosquito anterior (caso exista) para evitar duplicatas na tela
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove();
    }

    // Calcula a posição horizontal (X) aleatória dentro dos limites da janela
    let posicaoX = Math.floor(Math.random() * largura) - 90;
    // Calcula a posição vertical (Y) aleatória dentro dos limites da janela
    let posicaoY = Math.floor(Math.random() * altura) - 90;

    // Garante que as posições não sejam negativas
    posicaoX = posicaoX < 0 ? 0 : posicaoX;
    posicaoY = posicaoY < 0 ? 0 : posicaoY;

    console.log(posicaoX, posicaoY); // Exibe as coordenadas no console para depuração

    // Cria o elemento HTML para representar o mosquito
    let mosquito = document.createElement('img');
    mosquito.src = 'imagens/mosquito.png'; // Define o caminho da imagem do mosquito
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio(); // Define classes de tamanho e orientação
    mosquito.style.left = posicaoX + 'px'; // Define a posição horizontal
    mosquito.style.top = posicaoY + 'px'; // Define a posição vertical
    mosquito.style.position = 'absolute'; // Posiciona o mosquito de forma absoluta na tela
    mosquito.id = 'mosquito'; // Define um ID único para o mosquito

    // Adiciona o mosquito ao corpo do documento (tela)
    document.body.appendChild(mosquito);
}

// Função que retorna uma classe aleatória para variar o tamanho do mosquito
function tamanhoAleatorio() {
    // Gera um número aleatório entre 0 e 2
    let classe = Math.floor(Math.random() * 3);

    // Retorna a classe correspondente com base no número gerado
    switch (classe) {
        case 0:
            return 'mosquito1'; // Classe para o menor tamanho
        case 1:
            return 'mosquito2'; // Classe para tamanho médio
        case 2:
            return 'mosquito3'; // Classe para o maior tamanho
    }
}

// Função que retorna uma classe aleatória para variar a orientação do mosquito
function ladoAleatorio() {
    // Gera um número aleatório entre 0 e 1
    let classe = Math.floor(Math.random() * 2);

    // Retorna a classe correspondente com base no número gerado
    switch (classe) {
        case 0:
            return 'ladoA'; // Classe para orientação padrão
        case 1:
            return 'ladoB'; // Classe para orientação invertida
    }
}
