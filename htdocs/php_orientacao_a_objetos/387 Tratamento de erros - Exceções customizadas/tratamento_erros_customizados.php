<?php

// Definindo uma classe customizada de exceção que estende a classe Exception do PHP
class MinhaExceptionCustomizada extends Exception
{
	// Propriedade privada para armazenar a mensagem de erro
	private $erro = '';

	// Construtor da classe que recebe a mensagem de erro como parâmetro
	public function __construct($erro)
	{
		$this->erro = $erro;
	}

	// Método para exibir a mensagem de erro customizada em um formato específico
	public function exibirMensagemErroCustomizada()
	{
		echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
		echo $this->erro;
		echo '</div>';
	}
}

try {
	// Lançando uma exceção customizada com uma mensagem específica
	throw new MinhaExceptionCustomizada('Este é um erro customizado');
} catch (MinhaExceptionCustomizada $e) {
	// Capturando a exceção customizada e exibindo a mensagem de erro customizada
	$e->exibirMensagemErroCustomizada();
} catch (Error $e) {
	// Capturando erros nativos do PHP e exibindo a mensagem de erro em um formato diferente
	echo '<div style="border: solid 1px #000; padding: 15px; background-color: yellow; color: black;">';
	echo 'Erro nativo do PHP: ' . $e->getMessage();
	echo '</div>';
}
