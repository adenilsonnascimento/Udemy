let altura = 0; // A variável 'altura' armazena a altura da janela
let largura = 0; // A variável 'largura' armazena a largura da janela
let vidas = 1; // A variável 'vidas' armazena a quantidade de vidas do jogador

// Função para ajustar o tamanho da tela de jogo de acordo com o tamanho da janela
function ajustaTamanhoPalcoJogo() {
	altura = window.innerHeight; // Obtém a altura da janela
	largura = window.innerWidth; // Obtém a largura da janela

	console.log(largura, altura); // Imprime no console as dimensões da tela
}

// Chama a função de ajuste de tamanho assim que o código é carregado
ajustaTamanhoPalcoJogo();

// Função para posicionar o mosquito de forma aleatória na tela
function posicaoRandomica() {

	// Remover o mosquito anterior, caso exista
	if (document.getElementById('mosquito')) {
		document.getElementById('mosquito').remove(); // Remove o mosquito anterior

		// Verifica se as vidas já foram esgotadas (mais de 3 vidas)
		if (vidas > 3) {
			window.location.href = 'fim_de_jogo.html'; // Redireciona para a página de fim de jogo
		} else {
			// Se o jogador ainda tiver vidas, diminui uma e atualiza a imagem do coração
			document.getElementById('v' + vidas).src = "imagens/coracao_vazio.png";
			vidas++; // Aumenta o número de vidas
		}
	}

	// Calcula a posição X e Y aleatória para o mosquito, levando em conta o tamanho da tela
	let posicaoX = Math.floor(Math.random() * largura) - 90; // Gera a posição X
	let posicaoY = Math.floor(Math.random() * altura) - 90; // Gera a posição Y

	// Garante que a posição não ficará negativa
	posicaoX = posicaoX < 0 ? 0 : posicaoX; 
	posicaoY = posicaoY < 0 ? 0 : posicaoY;

	console.log(posicaoX, posicaoY); // Imprime as coordenadas no console para debug

	// Cria o elemento HTML do mosquito
	let mosquito = document.createElement('img'); 
	mosquito.src = 'imagens/mosquito.png'; // Define a imagem do mosquito
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio(); // Atribui classes aleatórias para tamanho e lado
	mosquito.style.left = posicaoX + 'px'; // Define a posição horizontal
	mosquito.style.top = posicaoY + 'px'; // Define a posição vertical
	mosquito.style.position = 'absolute'; // Define a posição como absoluta para posicionamento livre na tela
	mosquito.id = 'mosquito'; // Atribui o id ao mosquito para possível manipulação futura
	mosquito.onclick = function() { // Adiciona um evento de clique ao mosquito
		this.remove(); // Remove o mosquito quando clicado
	}

	// Adiciona o mosquito à página
	document.body.appendChild(mosquito);
}

// Função para gerar um tamanho aleatório para o mosquito
function tamanhoAleatorio() {
	let classe = Math.floor(Math.random() * 3); // Gera um número aleatório entre 0 e 2

	switch (classe) {
		case 0:
			return 'mosquito1'; // Tamanho pequeno
		case 1:
			return 'mosquito2'; // Tamanho médio
		case 2:
			return 'mosquito3'; // Tamanho grande
	}
}

// Função para gerar um lado aleatório para o mosquito
function ladoAleatorio() {
	let classe = Math.floor(Math.random() * 2); // Gera um número aleatório entre 0 e 1
	
	switch (classe) {
		case 0:
			return 'ladoA'; // Lado A
		case 1:
			return 'ladoB'; // Lado B
	}
}
