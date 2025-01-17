// Declarando variáveis para altura e largura da tela do jogo
let altura = 0
let largura = 0
let vidas = 1 // Quantidade inicial de vidas do jogador
let tempo = 15 // Tempo inicial do cronômetro em segundos

// Função que ajusta o tamanho do palco do jogo com base no tamanho atual da janela
function ajustaTamanhoPalcoJogo() {
	altura = window.innerHeight // Obtém a altura visível da janela
	largura = window.innerWidth // Obtém a largura visível da janela

	console.log(largura, altura) // Exibe as dimensões no console para depuração
}

ajustaTamanhoPalcoJogo() // Ajusta o tamanho do palco ao iniciar o jogo

// Função que decrementa o cronômetro a cada segundo
let cronometro = setInterval(function () {
	tempo -= 1 // Decrementa o tempo

	// Verifica se o tempo acabou
	if (tempo < 0) {
		clearInterval(cronometro) // Para o cronômetro
		clearInterval(criaMosca) // Para a criação de moscas
		window.location.href = 'vitoria.html' // Redireciona para a tela de vitória
	} else {
		// Atualiza o elemento de cronômetro na página
		document.getElementById('cronometro').innerHTML = tempo
	}
}, 1000) // Executa a cada 1000 ms (1 segundo)

// Função que gera a posição aleatória para uma nova mosca
function posicaoRandomica() {
	// Remove a mosca anterior, se ela existir
	if (document.getElementById('mosquito')) {
		document.getElementById('mosquito').remove()

		// Verifica se o jogador perdeu todas as vidas
		if (vidas > 3) {
			window.location.href = 'fim_de_jogo.html' // Redireciona para a tela de fim de jogo
		} else {
			// Atualiza o coração para indicar uma vida perdida
			document.getElementById('v' + vidas).src = "imagens/coracao_vazio.png"
			vidas++ // Incrementa o contador de vidas perdidas
		}
	}

	// Calcula posições X e Y aleatórias para a mosca, com ajuste para não ultrapassar os limites da tela
	let posicaoX = Math.floor(Math.random() * largura) - 90
	let posicaoY = Math.floor(Math.random() * altura) - 90

	posicaoX = posicaoX < 0 ? 0 : posicaoX // Garante que X não seja negativo
	posicaoY = posicaoY < 0 ? 0 : posicaoY // Garante que Y não seja negativo

	console.log(posicaoX, posicaoY) // Exibe as coordenadas no console para depuração

	// Cria o elemento HTML da mosca
	let mosquito = document.createElement('img')
	mosquito.src = 'imagens/mosquito.png' // Define a imagem da mosca
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio() // Adiciona classes para tamanho e direção
	mosquito.style.left = posicaoX + 'px' // Define a posição X
	mosquito.style.top = posicaoY + 'px' // Define a posição Y
	mosquito.style.position = 'absolute' // Define a posição como absoluta
	mosquito.id = 'mosquito' // Adiciona um ID para identificação
	mosquito.onclick = function () {
		this.remove() // Remove a mosca ao ser clicada
	}

	document.body.appendChild(mosquito) // Adiciona a mosca no corpo da página
}

// Função que retorna um tamanho aleatório para a mosca
function tamanhoAleatorio() {
	let classe = Math.floor(Math.random() * 3) // Gera um número entre 0 e 2

	switch (classe) {
		case 0:
			return 'mosquito1' // Classe para tamanho pequeno
		case 1:
			return 'mosquito2' // Classe para tamanho médio
		case 2:
			return 'mosquito3' // Classe para tamanho grande
	}
}

// Função que retorna um lado aleatório para a mosca (direita ou esquerda)
function ladoAleatorio() {
	let classe = Math.floor(Math.random() * 2) // Gera um número entre 0 e 1

	switch (classe) {
		case 0:
			return 'ladoA' // Classe para lado normal
		case 1:
			return 'ladoB' // Classe para lado invertido
	}
}
