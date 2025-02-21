<?php
// Definição da classe Funcionario
class Funcionario
{
    
    public $nome = null; 
    public $telefone = null; 
    public $numFilhos = null; 
    public $cargo = null; 
    public $salario = null; 


    //________________________________________________________________
    // Método mágico __set para definir dinamicamente o valor de um atributo (overloading/sobrecarga)
    function __set($atributo, $valor)
    {
        /*
                O método __set é chamado automaticamente quando se tenta atribuir um valor a um atributo inacessível ou não declarado explicitamente.
                $atributo: Nome do atributo que está sendo definido.
                $valor: Valor que será atribuído ao atributo.
            */
        $this->$atributo = $valor; // Define o valor do atributo dinamicamente
    }

    //________________________________________________________________
    // Método mágico __get para obter dinamicamente o valor de um atributo
    function __get($atributo)
    {
        /*
                O método __get é chamado automaticamente quando se tenta acessar um atributo inacessível ou não declarado explicitamente.
                $atributo: Nome do atributo que está sendo acessado.
            */
        return $this->$atributo; // Retorna o valor do atributo dinamicamente
    }

    //________________________________________________________________
    // Método para resumir os dados do funcionário
    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    // Método para modificar o número de filhos do funcionário
    function modificarNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }
    // Método para atribuir o cargo e salário do funcionário
    function setCargo($telefone,$cargo, $salario)
    {   
        $this->telefone = $telefone;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
}

 //________________________________________________________________
// Criação de uma instância da classe Funcionario
$y = new Funcionario(); // $y é um objeto da classe Funcionario

// Define o nome do funcionário $y como 'José' usando o método mágico __set
$y->__set('nome', 'José');
// Define o número de filhos do funcionário $y como 2 usando o método mágico __set
$y->__set('numFilhos', 2);
$y->setCargo('1234-5678', 'Desenvolvedor', 'R$ 1.000,00');
// Exibe o nome e o número de filhos do funcionário $y usando o método mágico __get
echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) e o telefone ' . $y->__get('telefone') . ' e o cargo ' . $y->__get('cargo') . ' e o salario ' . $y->__get('salario') . ''; // Exibe: "José possui 2 filho(s)"

echo '<br />'; // Quebra de linha para melhor visualização


$x = new Funcionario(); 
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 0);
$x->setCargo('6666-9999', 'Garçonet', 'R$ 1.500,00'); 
echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)  e o telefone ' . $x->__get('telefone') . ' e o cargo ' . $x->__get('cargo') . ' e o salario ' . $x->__get('salario') . ''; // Exibe: "Maria possui 0 filho(s)"