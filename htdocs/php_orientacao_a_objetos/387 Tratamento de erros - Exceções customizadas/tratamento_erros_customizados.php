<?php
// Declaração de uma classe personalizada de exceção chamada MinhaExceptionCustomizada.
class MinhaExceptionCustomizada extends Exception
{
	private $erro = ''; // Propriedade privada para armazenar a mensagem de erro.

	// Método construtor que recebe uma mensagem de erro como parâmetro.
	public function __construct($erro)
	{
		$this->erro = $erro; // Atribui a mensagem de erro à propriedade privada.
	}

	// Método personalizado para exibir a mensagem de erro em um formato estilizado.
	public function exibirMensagemErroCustomizada()
	{
		echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
		echo $this->erro; // Exibe a mensagem de erro.
		echo '</div>';
	}
}

try {
	// Lança uma exceção personalizada com a mensagem 'Este é um erro customizado'.
	throw new MinhaExceptionCustomizada('Este é um erro customizado');
} catch (MinhaExceptionCustomizada $e) {
	// Bloco catch para capturar exceções personalizadas.
	$e->exibirMensagemErroCustomizada(); // Chama o método personalizado para exibir a mensagem de erro.

} catch (Error $e) {
	// Bloco catch para capturar erros do tipo Error.
	echo '<div style="border: solid 1px #000; padding: 15px; background-color: yellow; color: black;">';
	echo 'Erro nativo do PHP: ' . $e->getMessage(); // Exibe a mensagem de erro nativa.
	echo '</div>';
}
