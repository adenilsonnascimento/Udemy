// Variáveis globais para armazenar a altura e a largura da janela, além das vidas
let altura = 0;
let largura = 0;
let vidas = 1;

// Função que ajusta as dimensões do palco do jogo de acordo com o tamanho da janela do navegador
function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight; // Define a altura como a altura da janela
    largura = window.innerWidth; // Define a largura como a largura da janela

    console.log(largura, altura); // Exibe as dimensões no console para fins de depuração
}

// Chama a função para definir as dimensões iniciais do palco
ajustaTamanhoPalcoJogo();

// Função que cria uma posição aleatória para o mosquito e o adiciona na tela
function posicaoRandomica() {
    // Remove o mosquito anterior, caso ele ainda esteja na tela, para evitar sobreposição
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove();

        // Caso o número de vidas seja maior que 3, o jogo é interrompido
        if (vidas > 3) {
            alert('Interromper o jogo (game over)');
        } else {
            // Caso contrário, atualiza o ícone da vida para mostrar que uma vida foi perdida
            document.getElementById('v' + vidas).src = "imagens/coracao_vazio.png";
            vidas++; // Aumenta a quantidade de vidas
        }
    }

    // Calcula uma posição aleatória para o eixo X (horizontal)
    let posicaoX = Math.floor(Math.random() * largura) - 90;
    // Calcula uma posição aleatória para o eixo Y (vertical)
    let posicaoY = Math.floor(Math.random() * altura) - 90;

    // Impede que as posições sejam menores que 0 (fora da tela)
    posicaoX = posicaoX < 0 ? 0 : posicaoX;
    posicaoY = posicaoY < 0 ? 0 : posicaoY;

    console.log(posicaoX, posicaoY); // Exibe as coordenadas calculadas no console

    // Cria o elemento HTML para o mosquito
    let mosquito = document.createElement('img');
    mosquito.src = 'imagens/mosquito.png'; // Define o caminho para a imagem do mosquito
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio(); // Aplica classes aleatórias para tamanho e orientação
    mosquito.style.left = posicaoX + 'px'; // Define a posição horizontal do mosquito
    mosquito.style.top = posicaoY + 'px'; // Define a posição vertical do mosquito
    mosquito.style.position = 'absolute'; // Define o posicionamento absoluto na tela
    mosquito.id = 'mosquito'; // Define um ID único para identificar o mosquito

    // Adiciona o mosquito ao corpo do documento (tela do jogo)
    document.body.appendChild(mosquito);

    // Quando o mosquito é clicado, ele é removido da tela
    mosquito.onclick = function() {
        this.remove();
    };
}

// Função que retorna uma classe aleatória para definir o tamanho do mosquito
function tamanhoAleatorio() {
    // Gera um número aleatório entre 0 e 2
    let classe = Math.floor(Math.random() * 3);

    // Retorna a classe correspondente ao número gerado
    switch (classe) {
        case 0:
            return 'mosquito1'; // Classe para o menor tamanho
        case 1:
            return 'mosquito2'; // Classe para o tamanho médio
        case 2:
            return 'mosquito3'; // Classe para o maior tamanho
    }
}

// Função que retorna uma classe aleatória para definir o lado do mosquito (orientação)
function ladoAleatorio() {
    // Gera um número aleatório entre 0 e 1
    let classe = Math.floor(Math.random() * 2);

    // Retorna a classe correspondente ao número gerado
    switch (classe) {
        case 0:
            return 'ladoA'; // Classe para o lado padrão
        case 1:
            return 'ladoB'; // Classe para o lado invertido
    }
}
