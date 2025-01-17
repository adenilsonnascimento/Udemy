// Definindo variáveis principais
let altura = 0;
let largura = 0;
let vidas = 1;
let tempo = 15;

// Definindo o tempo de criação dos mosquitos
let criaMosquitoTempo = 1500;

// Obtendo o nível do jogo a partir da URL
let nivel = window.location.search;
nivel = nivel.replace('?', '');

// Atribuindo o tempo de criação do mosquito conforme o nível
if(nivel === 'normal') {
	// Tempo de criação do mosquito para o nível normal
	criaMosquitoTempo = 1500;
} else if(nivel === 'dificil') {
	// Tempo de criação do mosquito para o nível difícil
	criaMosquitoTempo = 1000;
} else if (nivel === 'chucknorris') {
	// Tempo de criação do mosquito para o nível Chuck Norris
	criaMosquitoTempo = 750;
}

// Função para ajustar o tamanho da tela do jogo
function ajustaTamanhoPalcoJogo() {
	// Obtendo a altura e a largura da janela
	altura = window.innerHeight;
	largura = window.innerWidth;

	// Exibindo as dimensões no console (para debug)
	console.log(largura, altura);
}

// Chamando a função para ajustar o tamanho da tela
ajustaTamanhoPalcoJogo();

// Função para o cronômetro do jogo
let cronometro = setInterval(function() {
	// Diminuindo o tempo restante
	tempo -= 1;

	// Verificando se o tempo acabou
	if(tempo < 0) {
		// Parando o cronômetro e o intervalo de criação dos mosquitos
		clearInterval(cronometro);
		clearInterval(criaMosca);
		// Redirecionando para a tela de vitória
		window.location.href = 'vitoria.html';
	} else {
		// Atualizando o tempo restante na tela
		document.getElementById('cronometro').innerHTML = tempo;
	}
}, 1000);

// Função para definir uma posição aleatória para o mosquito
function posicaoRandomica() {
	// Remover o mosquito anterior (caso exista)
	if(document.getElementById('mosquito')) {
		document.getElementById('mosquito').remove();

		// Verificando se o número de vidas ultrapassou 3
		if(vidas > 3) {
			// Redirecionando para a tela de fim de jogo
			window.location.href = 'fim_de_jogo.html';
		} else {
			// Atualizando a imagem da vida (coração vazio)
			document.getElementById('v' + vidas).src = "imagens/coracao_vazio.png";
			// Incrementando o número de vidas
			vidas++;
		}
	}

	// Gerando posições aleatórias para o mosquito
	let posicaoX = Math.floor(Math.random() * largura) - 90;
	let posicaoY = Math.floor(Math.random() * altura) - 90;

	// Garantindo que o mosquito não fique fora da tela
	posicaoX = posicaoX < 0 ? 0 : posicaoX;
	posicaoY = posicaoY < 0 ? 0 : posicaoY;

	// Exibindo as posições no console (para debug)
	console.log(posicaoX, posicaoY);

	// Criando o elemento do mosquito
	let mosquito = document.createElement('img');
	mosquito.src = 'imagens/mosquito.png';
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio();
	mosquito.style.left = posicaoX + 'px';
	mosquito.style.top = posicaoY + 'px';
	mosquito.style.position = 'absolute';
	mosquito.id = 'mosquito';

	// Função que será chamada ao clicar no mosquito (remove o mosquito)
	mosquito.onclick = function() {
		this.remove();
	}

	// Adicionando o mosquito na página
	document.body.appendChild(mosquito);
}

// Função para retornar um tamanho aleatório para o mosquito
function tamanhoAleatorio() {
	// Gerando um número aleatório para definir o tamanho
	let classe = Math.floor(Math.random() * 3);
	
	// Retornando a classe do tamanho correspondente
	switch(classe) {
		case 0:
			return 'mosquito1'; // Tamanho pequeno
		case 1:
			return 'mosquito2'; // Tamanho médio
		case 2:
			return 'mosquito3'; // Tamanho grande
	}
}

// Função para retornar um lado aleatório para o mosquito (flip horizontal)
function ladoAleatorio() {
	// Gerando um número aleatório para definir o lado
	let classe = Math.floor(Math.random() * 2);
	
	// Retornando a classe do lado correspondente
	switch(classe) {
		case 0:
			return 'ladoA'; // Sem inversão
		case 1:
			return 'ladoB'; // Inversão horizontal
	}
}
