// Declara as variáveis globais que serão usadas para armazenar dimensões do palco, vidas, e tempo restante
let altura = 0 // Altura do palco do jogo
let largura = 0 // Largura do palco do jogo
let vidas = 1 // Quantidade de vidas iniciais
let tempo = 15 // Tempo inicial do cronômetro em segundos

// Função que ajusta as dimensões do palco do jogo com base no tamanho da janela
function ajustaTamanhoPalcoJogo() {
	altura = window.innerHeight // Obtém a altura visível da janela
	largura = window.innerWidth // Obtém a largura visível da janela

	console.log(largura, altura) // Exibe as dimensões no console para depuração
}

// Chama a função para definir as dimensões ao carregar o jogo
ajustaTamanhoPalcoJogo()

// Cronômetro que reduz o tempo restante a cada segundo
let cronometro = setInterval(function () {
	tempo -= 1 // Decrementa o tempo restante

	// Verifica se o tempo acabou
	if (tempo < 0) {
		clearInterval(cronometro) // Para o cronômetro
		clearInterval(criaMosca) // Para a criação das moscas
		window.location.href = 'vitoria.html' // Redireciona para a tela de vitória
	} else {
		// Atualiza o cronômetro exibido na tela
		document.getElementById('cronometro').innerHTML = tempo
	}
}, 1000) // Executa a cada 1000ms (1 segundo)

// Função que posiciona a mosca de forma aleatória no palco
function posicaoRandomica() {
	// Remove a mosca anterior, se ela existir
	if (document.getElementById('mosquito')) {
		document.getElementById('mosquito').remove()

		// Verifica se o jogador perdeu todas as vidas
		if (vidas > 3) {
			window.location.href = 'fim_de_jogo.html' // Redireciona para a tela de fim de jogo
		} else {
			// Atualiza o coração para indicar que uma vida foi perdida
			document.getElementById('v' + vidas).src = 'imagens/coracao_vazio.png'
			vidas++ // Incrementa o número de vidas perdidas
		}
	}

	// Calcula posições X e Y aleatórias, ajustando para evitar que saiam da tela
	let posicaoX = Math.floor(Math.random() * largura) - 90
	let posicaoY = Math.floor(Math.random() * altura) - 90

	// Garante que as posições não sejam negativas
	posicaoX = posicaoX < 0 ? 0 : posicaoX
	posicaoY = posicaoY < 0 ? 0 : posicaoY

	console.log(posicaoX, posicaoY) // Exibe as coordenadas no console para depuração

	// Cria um novo elemento HTML para a mosca
	let mosquito = document.createElement('img')
	mosquito.src = 'imagens/mosquito.png' // Define a imagem da mosca
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio() // Adiciona classes para tamanho e lado
	mosquito.style.left = posicaoX + 'px' // Define a posição X
	mosquito.style.top = posicaoY + 'px' // Define a posição Y
	mosquito.style.position = 'absolute' // Define a posição como absoluta
	mosquito.id = 'mosquito' // Adiciona um ID para identificação
	mosquito.onclick = function () {
		this.remove() // Remove a mosca ao ser clicada
	}

	// Adiciona o elemento da mosca ao corpo do documento
	document.body.appendChild(mosquito)
}

// Função que retorna uma classe de tamanho aleatório para a mosca
function tamanhoAleatorio() {
	let classe = Math.floor(Math.random() * 3) // Gera um número aleatório entre 0 e 2

	// Retorna a classe correspondente ao número gerado
	switch (classe) {
		case 0:
			return 'mosquito1' // Classe para tamanho pequeno
		case 1:
			return 'mosquito2' // Classe para tamanho médio
		case 2:
			return 'mosquito3' // Classe para tamanho grande
	}
}

// Função que retorna uma classe de lado aleatório para a mosca
function ladoAleatorio() {
	let classe = Math.floor(Math.random() * 2) // Gera um número aleatório entre 0 e 1

	// Retorna a classe correspondente ao número gerado
	switch (classe) {
		case 0:
			return 'ladoA' // Classe para o lado padrão
		case 1:
			return 'ladoB' // Classe para o lado invertido
	}
}
