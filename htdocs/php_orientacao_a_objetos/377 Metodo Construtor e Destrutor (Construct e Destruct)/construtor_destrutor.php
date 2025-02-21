<?php
// Definição da classe Pessoa
class Pessoa
{
	public $nome = null; 

	// Método construtor (__construct) é chamado automaticamente ao criar uma nova instância da classe
	function __construct($nome)
	{
		echo 'Objeto iniciado'; 
		$this->nome = $nome; // Define o valor do atributo $nome com o valor passado como parâmetro
	}

	// Método destrutor (__destruct) é chamado automaticamente quando o objeto é removido da memória
	function __destruct()
	{
		echo 'Objeto removido'; 
	}
     

	//________________________________________________________________
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

//________________________________________________________________
// Criação de uma instância da classe Pessoa
$pessoa = new Pessoa('Adenilson'); // O construtor é chamado automaticamente aqui

echo '<br />Nome: ' . $pessoa->__get('nome'); 

echo '<br />' . $pessoa->correr(); 
echo '<br />'; 

 unset($pessoa);  //remove o objeto da memória, chamando o destrutor
