// Definição de variáveis com let (em vez de var)
let altura = 0;
let largura = 0;
let vidas = 1;
let tempo = 15;

// Função que ajusta o tamanho da tela (largura e altura)
function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight; // Obtém a altura da janela
    largura = window.innerWidth; // Obtém a largura da janela

    console.log(largura, altura); // Exibe a largura e altura no console para debug
}

// Chama a função para ajustar o tamanho do palco
ajustaTamanhoPalcoJogo();

// Definição de um cronômetro que decremente o tempo a cada segundo
let cronometro = setInterval(function() {

    tempo -= 1; // Decrementa o tempo por 1 segundo

    // Se o tempo acabar (menor que 0), o cronômetro é parado e aparece a mensagem de vitória
    if (tempo < 0) {
        clearInterval(cronometro); // Limpa o intervalo do cronômetro
        clearInterval(criaMosca);  // Limpa o intervalo de criação das moscas
        alert('Vitoria'); // Exibe uma mensagem de vitória
    } else {
        document.getElementById('cronometro').innerHTML = tempo; // Atualiza o cronômetro na tela
    }

}, 1000); // Intervalo de 1 segundo (1000 milissegundos)


// Função que gera uma posição aleatória para o mosquito
function posicaoRandomica() {

    // Verifica se já existe um mosquito na tela e o remove
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove(); // Remove o mosquito anterior

        // Se o número de vidas for maior que 3, o jogo acaba
        if (vidas > 3) {
            window.location.href = 'fim_de_jogo.html'; // Redireciona para a página de fim de jogo
        } else {
            // Substitui o ícone do coração atual por um coração vazio
            document.getElementById('v' + vidas).src = "imagens/coracao_vazio.png";
            vidas++; // Incrementa a quantidade de vidas
        }
    }

    // Gera uma posição aleatória para o mosquito nas coordenadas X e Y
    let posicaoX = Math.floor(Math.random() * largura) - 90;
    let posicaoY = Math.floor(Math.random() * altura) - 90;

    // Impede que a posição X ou Y fiquem negativas
    posicaoX = posicaoX < 0 ? 0 : posicaoX;
    posicaoY = posicaoY < 0 ? 0 : posicaoY;

    console.log(posicaoX, posicaoY); // Exibe as posições no console para debug

    // Criação de um novo elemento de mosquito no HTML
    let mosquito = document.createElement('img');
    mosquito.src = 'imagens/mosquito.png'; // Define a imagem do mosquito
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio(); // Define o tamanho e o lado aleatório
    mosquito.style.left = posicaoX + 'px'; // Define a posição X do mosquito
    mosquito.style.top = posicaoY + 'px'; // Define a posição Y do mosquito
    mosquito.style.position = 'absolute'; // Define o posicionamento absoluto do mosquito
    mosquito.id = 'mosquito'; // Define o ID do mosquito para poder referenciá-lo posteriormente

    // Função de clique no mosquito que o remove da tela
    mosquito.onclick = function() {
        this.remove(); // Remove o mosquito quando clicado
    }

    // Adiciona o mosquito criado ao corpo da página
    document.body.appendChild(mosquito);
}

// Função que retorna um tamanho aleatório para o mosquito
function tamanhoAleatorio() {
    let classe = Math.floor(Math.random() * 3); // Gera um número aleatório entre 0 e 2
    
    switch(classe) {
        case 0:
            return 'mosquito1'; // Retorna a classe 'mosquito1' para o menor tamanho
        case 1:
            return 'mosquito2'; // Retorna a classe 'mosquito2' para o tamanho médio
        case 2:
            return 'mosquito3'; // Retorna a classe 'mosquito3' para o maior tamanho
    }
}

// Função que retorna um lado aleatório para o mosquito
function ladoAleatorio() {
    let classe = Math.floor(Math.random() * 2); // Gera um número aleatório entre 0 e 1

    switch(classe) {
        case 0:
            return 'ladoA'; // Retorna a classe 'ladoA' para o lado esquerdo
        case 1:
            return 'ladoB'; // Retorna a classe 'ladoB' para o lado direito
    }
}
