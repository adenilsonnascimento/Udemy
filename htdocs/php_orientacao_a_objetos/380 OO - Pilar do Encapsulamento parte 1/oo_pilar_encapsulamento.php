<?php
// Definição da classe Pai
class Pai
{
	private $nome = 'Jorge'; // Atributo privado, acessível apenas dentro da classe
	protected $sobrenome = 'Silva'; // Atributo protegido, acessível na classe e em subclasses
	public $humor = 'Feliz'; // Atributo público, acessível de qualquer lugar

	// Método mágico __get para acessar atributos inacessíveis ou privados/protected
	public function __get($attr)
	{
		return $this->$attr; // Retorna o valor do atributo especificado
	}

	// Método mágico __set para definir valores em atributos inacessíveis ou privados/protected
	public function __set($attr, $value)
	{
		$this->$attr = $value; // Define o valor do atributo especificado
	}

	// Método privado, acessível apenas dentro da classe
	private function executarMania()
	{
		echo 'Assobiar'; // Exibe uma mensagem indicando a mania
	}

	// Método protegido, acessível na classe e em subclasses
	protected function responder()
	{
		echo 'Oi'; // Exibe uma mensagem indicando a resposta
	}

	// Método público para executar uma ação aleatória
	public function executarAcao()
	{
		$x = rand(1, 10); // Gera um número aleatório entre 1 e 10
		if ($x >= 1 && $x <= 8) { // Se o número estiver entre 1 e 8
			$this->responder(); // Chama o método protegido responder()
		} else { // Caso contrário (números 9 ou 10)
			$this->executarMania(); // Chama o método privado executarMania()
		}
	}
}

// Criação de uma instância da classe Pai
$pai = new Pai();

// Chamada do método executarAcao()
echo $pai->executarAcao();
