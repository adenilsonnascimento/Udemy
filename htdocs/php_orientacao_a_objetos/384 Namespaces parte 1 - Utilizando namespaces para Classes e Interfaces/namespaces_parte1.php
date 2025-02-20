<?php
// Define o namespace "A".
namespace A;

// Declaração da classe Cliente no namespace "A", que implementa a interface CadastroInterface do namespace "B".
class Cliente implements \B\CadastroInterface
{
	public $nome = 'Jorge'; // Propriedade pública que armazena o nome do cliente.

	// Método construtor da classe, executado automaticamente ao instanciar um objeto.
	public function __construct()
	{
		echo '<pre>'; // Inicia uma tag <pre> para formatar a saída de forma legível.
		print_r(get_class_methods($this)); // Exibe os métodos disponíveis na classe atual (incluindo os herdados e implementados).
		echo '</pre>'; // Fecha a tag <pre>.
	}

	// Método mágico __get, usado para acessar propriedades não acessíveis ou inexistentes.
	public function __get($attr)
	{
		return $this->$attr; // Retorna o valor da propriedade cujo nome foi passado como argumento.
	}

	// Implementação do método salvar(), definido na interface CadastroInterface do namespace "B".
	public function salvar()
	{
		echo 'Salvar'; // Imprime "Salvar" quando o método é chamado.
	}

	// Implementação do método remover(), que não faz parte da interface CadastroInterface.
	public function remover()
	{
		echo 'Remover'; // Imprime "Remover" quando o método é chamado.
	}
}

// Declaração da interface CadastroInterface no namespace "A".
interface CadastroInterface
{
	public function salvar(); // Define o método salvar() como obrigatório para qualquer classe que implemente esta interface.
}

// Define o namespace "B".
namespace B;

// Declaração da classe Cliente no namespace "B", que implementa a interface CadastroInterface do namespace "A".
class Cliente implements \A\CadastroInterface
{
	public $nome = 'Jamilton'; // Propriedade pública que armazena o nome do cliente.

	// Método construtor da classe, executado automaticamente ao instanciar um objeto.
	public function __construct()
	{
		echo '<pre>'; // Inicia uma tag <pre> para formatar a saída de forma legível.
		print_r(get_class_methods($this)); // Exibe os métodos disponíveis na classe atual (incluindo os herdados e implementados).
		echo '</pre>'; // Fecha a tag <pre>.
	}

	// Método mágico __get, usado para acessar propriedades não acessíveis ou inexistentes.
	public function __get($attr)
	{
		return $this->$attr; // Retorna o valor da propriedade cujo nome foi passado como argumento.
	}

	// Implementação do método remover(), definido na interface CadastroInterface do namespace "A".
	public function remover()
	{
		echo 'Remover'; // Imprime "Remover" quando o método é chamado.
	}

	// Implementação do método salvar(), que não faz parte da interface CadastroInterface.
	public function salvar()
	{
		echo 'Salvar'; // Imprime "Salvar" quando o método é chamado.
	}
}

// Declaração da interface CadastroInterface no namespace "B".
interface CadastroInterface
{
	public function remover(); // Define o método remover() como obrigatório para qualquer classe que implemente esta interface.
}

//---------------
// Instancia um objeto da classe Cliente no namespace "B".
$c = new \B\Cliente();

// Exibe as informações do objeto $c, incluindo suas propriedades e valores.
print_r($c);

// Usa o método mágico __get para acessar a propriedade 'nome' do objeto $c e imprime seu valor.
echo $c->__get('nome');
