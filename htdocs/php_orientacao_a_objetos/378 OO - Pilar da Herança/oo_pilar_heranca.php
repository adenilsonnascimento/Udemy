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
}

// Criação de uma instância da classe Carro, passando a placa e a cor como parâmetros
$carro = new Carro('ABC1234', 'Branco');

// Criação de uma instância da classe Moto, passando a placa e a cor como parâmetros
$moto = new Moto('DEF1122', 'Preto');

// Exibição das propriedades dos objetos $carro e $moto usando print_r()
echo '<pre>'; // Formata a saída para facilitar a leitura
print_r($carro); // Exibe as propriedades do objeto $carro
echo '<br /><br />'; // Quebra de linha para melhorar a visualização
print_r($moto); // Exibe as propriedades do objeto $moto
echo '</pre>'; // Fecha a formatação da saída

echo '<hr />'; // Linha horizontal para separar as seções

// Chamada dos métodos específicos e herdados da classe Carro
$carro->abrirTetoSolar(); // Chama o método específico da classe Carro
echo '<br />'; // Quebra de linha
$carro->acelerar(); // Chama o método herdado da classe Veiculo
echo '<br />'; // Quebra de linha
$carro->freiar(); // Chama o método herdado da classe Veiculo

echo '<hr />'; // Linha horizontal para separar as seções

// Chamada dos métodos específicos e herdados da classe Moto
$moto->empinar(); // Chama o método específico da classe Moto
echo '<br />'; // Quebra de linha
$moto->acelerar(); // Chama o método herdado da classe Veiculo
echo '<br />'; // Quebra de linha
$moto->freiar(); // Chama o método herdado da classe Veiculo
