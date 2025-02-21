<?php
// Definição da classe Funcionario
class Funcionario
{

    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;


    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }


    function __get($atributo)
    {
        return $this->$atributo;
    }

    function resumirCadFunc()
    {
        return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s) e o telefone " . $this->__get('telefone') . " e o cargo " . $this->__get('cargo') . " e o salario " . $this->__get('salario') . "";
    }

    function cadastrarFuncionario($nome, $telefone, $numFilhos, $cargo, $salario)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->numFilhos = $numFilhos;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
}


$y = new Funcionario();

$y->__set('nome', 'José');
$y->__set('numFilhos', 2);
$y->__set('telefone', '1234-5678');
$y->__set('cargo', 'Desenvolvedor');
$y->__set('salario', 'R$ 1.000,00');

// Exibe o resumo do cadastro do funcionário $y usando o método resumirCadFunc()
echo $y->resumirCadFunc(); // Exibe: "José possui 2 filho(s)"

echo '<br />';


$x = new Funcionario();


$x->cadastrarFuncionario('Maria', '9876-5432', 0, 'Garçonete', 'R$ 1.500,00');

// Exibe o resumo do cadastro do funcionário $x usando o método resumirCadFunc()
echo $x->resumirCadFunc(); // Exibe: "Maria possui 0 filho(s)"
