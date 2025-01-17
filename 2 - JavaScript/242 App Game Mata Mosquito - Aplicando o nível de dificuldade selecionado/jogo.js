let altura = 0 // Armazena a altura do palco do jogo (tela).
let largura = 0 // Armazena a largura do palco do jogo (tela).
let vidas = 1 // Controla o número de vidas do jogador.
let tempo = 15 // Tempo total do jogo em segundos.

let criaMosquitoTempo = 1500 // Intervalo inicial de criação dos mosquitos.

let nivel = window.location.search // Captura o nível selecionado na URL.
nivel = nivel.replace('?', '') // Remove o '?' da string para capturar apenas o nível.

// Define o tempo de criação dos mosquitos com base no nível.
if (nivel === 'normal') {
	// Nível normal: intervalo de 1500ms.
	criaMosquitoTempo = 1500
} else if (nivel === 'dificil') {
	// Nível difícil: intervalo de 1000ms.
	criaMosquitoTempo = 1000
} else if (nivel === 'chucknorris') {
	// Nível Chuck Norris: intervalo de 750ms.
	criaMosquitoTempo = 750
}

// Ajusta as dimensões do palco do jogo com base na janela do navegador.
function ajustaTamanhoPalcoJogo() {
	altura = window.innerHeight // Captura a altura disponível.
	largura = window.innerWidth // Captura a largura disponível.

	console.log(largura, altura) // Exibe as dimensões no console.
}

ajustaTamanhoPalcoJogo() // Chama a função ao carregar o jogo.

// Cronômetro que controla o tempo restante do jogo.
let cronometro = setInterval(function () {
	tempo -= 1 // Decrementa o tempo.

	// Se o tempo chegar a 0, finaliza o jogo com vitória.
	if (tempo < 0) {
		clearInterval(cronometro) // Para o cronômetro.
		clearInterval(criaMosca) // Para a criação de mosquitos.
		window.location.href = 'vitoria.html' // Redireciona para a página de vitória.
	} else {
		// Atualiza o cronômetro na tela.
		document.getElementById('cronometro').innerHTML = tempo
	}
}, 1000)

// Define uma posição aleatória para o mosquito na tela.
function posicaoRandomica() {
	// Remove o mosquito anterior se existir.
	if (document.getElementById('mosquito')) {
		document.getElementById('mosquito').remove()

		// Verifica se o jogador perdeu todas as vidas.
		if (vidas > 3) {
			// Redireciona para a página de fim de jogo.
			window.location.href = 'fim_de_jogo.html'
		} else {
			// Atualiza a imagem de coração vazio.
			document.getElementById('v' + vidas).src = 'imagens/coracao_vazio.png'
			vidas++ // Incrementa a contagem de vidas perdidas.
		}
	}

	// Calcula posições aleatórias, garantindo que estejam dentro dos limites.
	let posicaoX = Math.floor(Math.random() * largura) - 90
	let posicaoY = Math.floor(Math.random() * altura) - 90

	posicaoX = posicaoX < 0 ? 0 : posicaoX // Ajusta para evitar posições negativas.
	posicaoY = posicaoY < 0 ? 0 : posicaoY // Ajusta para evitar posições negativas.

	console.log(posicaoX, posicaoY) // Exibe as posições no console.

	// Cria o elemento HTML para o mosquito.
	let mosquito = document.createElement('img')
	mosquito.src = 'imagens/mosquito.png' // Define a imagem do mosquito.
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio() // Define o tamanho e o lado do mosquito.
	mosquito.style.left = posicaoX + 'px' // Define a posição X.
	mosquito.style.top = posicaoY + 'px' // Define a posição Y.
	mosquito.style.position = 'absolute' // Define a posição absoluta.
	mosquito.id = 'mosquito' // Define um ID para o mosquito.
	mosquito.onclick = function () {
		this.remove() // Remove o mosquito ao ser clicado.
	}

	// Adiciona o mosquito ao corpo do documento.
	document.body.appendChild(mosquito)
}

// Define o tamanho aleatório do mosquito.
function tamanhoAleatorio() {
	let classe = Math.floor(Math.random() * 3) // Gera um número aleatório entre 0 e 2.

	switch (classe) {
		case 0:
			return 'mosquito1' // Tamanho pequeno.
		case 1:
			return 'mosquito2' // Tamanho médio.
		case 2:
			return 'mosquito3' // Tamanho grande.
	}
}

// Define aleatoriamente o lado do mosquito (esquerda ou direita).
function ladoAleatorio() {
	let classe = Math.floor(Math.random() * 2) // Gera um número aleatório entre 0 e 1.

	switch (classe) {
		case 0:
			return 'ladoA' // Lado esquerdo.
		case 1:
			return 'ladoB' // Lado direito.
	}
}
