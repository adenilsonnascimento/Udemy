<?php
// Definição da classe Pessoa
class Pessoa
{
	public $nome = null; // Atributo público para armazenar o nome da pessoa

	// Método construtor (__construct) é chamado automaticamente ao criar uma nova instância da classe
	function __construct($nome)
	{
		echo 'Objeto iniciado'; // Exibe uma mensagem quando o objeto é criado
		$this->nome = $nome; // Define o valor do atributo $nome com o valor passado como parâmetro
	}

	// Método destrutor (__destruct) é chamado automaticamente quando o objeto é removido da memória
	function __destruct()
	{
		echo 'Objeto removido'; // Exibe uma mensagem quando o objeto é destruído
	}

	// Método mágico __get para acessar dinamicamente os atributos do objeto
	function __get($atributo)
	{
		return $this->$atributo; // Retorna o valor do atributo especificado
	}

	// Método para simular a ação de correr
	function correr()
	{
		return $this->__get('nome') . ' está correndo'; // Retorna uma string formatada com o nome e a ação de correr
	}
}

// Criação de uma instância da classe Pessoa, passando 'Jorge' como nome
$pessoa = new Pessoa('Jorge'); // O construtor é chamado automaticamente aqui

echo '<br />Nome: ' . $pessoa->__get('nome'); // Exibe o nome da pessoa usando o método mágico __get

echo '<br />' . $pessoa->correr(); // Chama o método correr() e exibe a mensagem formatada

echo '<br />'; // Quebra de linha para melhorar a visualização

// unset($pessoa); // Linha comentada propositalmente. Se descomentada, remove o objeto da memória, chamando o destrutor
