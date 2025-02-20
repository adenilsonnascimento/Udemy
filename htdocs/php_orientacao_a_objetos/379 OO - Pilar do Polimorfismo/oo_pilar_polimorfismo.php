<?php

// Definição da classe Carro, que herda da classe Veiculo
class Carro extends Veiculo
{
	public $teto_solar = true; // Atributo específico da classe Carro

	// Método construtor para inicializar os atributos $placa e $cor
	function __construct($placa, $cor)
	{
		$this->placa = $placa; // Define o valor da placa do carro
		$this->cor = $cor; // Define o valor da cor do carro
	}

	// Método específico da classe Carro para abrir o teto solar
	function abrirTetoSolar()
	{
		echo 'Abrir teto solar'; // Exibe uma mensagem indicando a ação de abrir o teto solar
	}

	// Método específico da classe Carro para alterar a posição do volante
	function alterarPosicaoVolante()
	{
		echo 'Alterar posição volante'; // Exibe uma mensagem indicando a ação de alterar a posição do volante
	}
}

// Definição da classe Moto, que herda da classe Veiculo
class Moto extends Veiculo
{
	public $contraPesoGuidao = true; // Atributo específico da classe Moto

	// Método construtor para inicializar os atributos $placa e $cor
	function __construct($placa, $cor)
	{
		$this->placa = $placa; // Define o valor da placa da moto
		$this->cor = $cor; // Define o valor da cor da moto
	}

	// Método específico da classe Moto para empinar
	function empinar()
	{
		echo 'Empinar'; // Exibe uma mensagem indicando a ação de empinar
	}

	// Sobrescreve o método trocarMarcha da classe Veiculo
	function trocarMarcha()
	{
		echo 'Desengatar embreagem com a mão e engatar marcha com o pé'; // Exibe uma mensagem específica para motos
	}
}

// Definição da classe Veiculo (classe pai)
class Veiculo
{
	public $placa = null; // Atributo para armazenar a placa do veículo
	public $cor = null; // Atributo para armazenar a cor do veículo

	// Método para acelerar o veículo
	function acelerar()
	{
		echo 'Acelerar'; // Exibe uma mensagem indicando a ação de acelerar
	}

	// Método para freiar o veículo
	function freiar()
	{
		echo 'Freiar'; // Exibe uma mensagem indicando a ação de freiar
	}

	// Método genérico para trocar marcha
	function trocarMarcha()
	{
		echo 'Desengatar embreagem com o pé e engatar marcha com a mão'; // Exibe uma mensagem genérica para veículos
	}
}

// Definição da classe Caminhao, que herda da classe Veiculo
class Caminhao extends Veiculo {}

// Criação de uma instância da classe Carro, passando a placa e a cor como parâmetros
$carro = new Carro('ABC1234', 'Branco');

// Criação de uma instância da classe Moto, passando a placa e a cor como parâmetros
$moto = new Moto('DEF1122', 'Preto');

// Criação de uma instância da classe Caminhao
$caminhao = new Caminhao();

// Chamada do método trocarMarcha para o objeto $carro
$carro->trocarMarcha(); // Chama o método herdado da classe Veiculo
echo '<br />'; // Quebra de linha

// Chamada do método trocarMarcha para o objeto $moto
$moto->trocarMarcha(); // Chama o método sobrescrito na classe Moto
echo '<br />'; // Quebra de linha

// Chamada do método trocarMarcha para o objeto $caminhao
$caminhao->trocarMarcha(); // Chama o método herdado da classe Veiculo
