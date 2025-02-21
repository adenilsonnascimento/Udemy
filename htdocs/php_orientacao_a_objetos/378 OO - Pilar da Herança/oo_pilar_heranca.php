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
	public $contraPesoGuidao = true; // Atributo específico da classe Moto

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
}

// Criação de uma instância da classe Carro, passando a placa e a cor como parâmetros
$carro = new Carro('ABC1234', 'Branco');

// Criação de uma instância da classe Moto, passando a placa e a cor como parâmetros
$moto = new Moto('DEF1122', 'Preto');

// Exibição das propriedades dos objetos $carro e $moto usando print_r()
echo '<pre>';
print_r($carro);
echo '<br /><br />';
print_r($moto);
echo '</pre>';

echo '<hr />';

// Chamada dos métodos específicos e herdados da classe Carro
$carro->abrirTetoSolar();
echo '<br />';
$carro->acelerar();
echo '<br />';
$carro->freiar();

echo '<hr />';

// Chamada dos métodos específicos e herdados da classe Moto
$moto->empinar();
echo '<br />';
$moto->acelerar();
echo '<br />';
$moto->freiar();
