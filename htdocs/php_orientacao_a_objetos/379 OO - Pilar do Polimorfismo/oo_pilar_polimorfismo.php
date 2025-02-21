<?php

// Definição da classe Carro, que herda da classe Veiculo
class Carro extends Veiculo
{
	public $teto_solar = true; 

	// Método construtor para inicializar os atributos $placa e $cor
	function __construct($placa, $cor)
	{
		$this->placa = $placa;
		$this->cor = $cor; 
	}

	// Método específico da classe Carro para abrir o teto solar
	function abrirTetoSolar()
	{
		echo 'Abrir teto solar'; 
	}

	// Método específico da classe Carro para alterar a posição do volante
	function alterarPosicaoVolante()
	{
		echo 'Alterar posição volante'; 
	}
}

// Definição da classe Moto, que herda da classe Veiculo
class Moto extends Veiculo
{
	public $contraPesoGuidao = true; 

	// Método construtor para inicializar os atributos $placa e $cor
	function __construct($placa, $cor)
	{
		$this->placa = $placa; 
		$this->cor = $cor; 
	}

	// Método específico da classe Moto para empinar
	function empinar()
	{
		echo 'Empinar'; 
	}

	// Sobrescreve o método trocarMarcha da classe Veiculo
	function trocarMarcha()
	{
		echo 'Desengatar embreagem com a mão e engatar marcha com o pé'; 
	}
}

// Definição da classe Veiculo (classe pai)
class Veiculo
{
	public $placa = null; 
	public $cor = null; 

	// Método para acelerar o veículo
	function acelerar()
	{
		echo 'Acelerar'; 
	}

	// Método para freiar o veículo
	function freiar()
	{
		echo 'Freiar'; 
	}

	// Método genérico para trocar marcha
	function trocarMarcha()
	{
		echo 'Desengatar embreagem com o pé e engatar marcha com a mão'; 
	}
}

// Definição da classe Caminhao, que herda da classe Veiculo
class Caminhao extends Veiculo {}


$carro = new Carro('ABC1234', 'Branco');


$moto = new Moto('DEF1122', 'Preto');

$caminhao = new Caminhao();

// Chamada do método trocarMarcha para o objeto $carro
$carro->trocarMarcha(); 
echo '<br />';

// Chamada do método trocarMarcha para o objeto $moto
$moto->trocarMarcha(); 
echo '<br />'; 

// Chamada do método trocarMarcha para o objeto $caminhao
$caminhao->trocarMarcha(); 
