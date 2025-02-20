<?php
// Definição da classe Funcionario
class Funcionario
{
    // Atributos da classe inicializados com valor null (nulo)
    public $nome = null; // Armazena o nome do funcionário
    public $telefone = null; // Armazena o telefone do funcionário
    public $numFilhos = null; // Armazena o número de filhos do funcionário

    // Método "setter" para definir o nome do funcionário
    function setNome($nome)
    {
        $this->nome = $nome; // Atribui o valor recebido ao atributo $nome do objeto atual
    }

    // Método "setter" para definir o número de filhos do funcionário
    function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos; // Atribui o valor recebido ao atributo $numFilhos do objeto atual
    }

    // Método "getter" para obter o nome do funcionário
    function getNome()
    {
        return $this->nome; // Retorna o valor do atributo $nome do objeto atual
    }

    // Método "getter" para obter o número de filhos do funcionário
    function getNumFilhos()
    {
        return $this->numFilhos; // Retorna o valor do atributo $numFilhos do objeto atual
    }

    // Método para resumir os dados do funcionário
    function resumirCadFunc()
    {
        /* 
                O operador $this refere-se ao próprio objeto que está chamando o método.
                Aqui, estamos acessando os atributos $nome e $numFilhos do objeto atual.
            */
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    // Método para modificar o número de filhos do funcionário
    function modificarNumFilhos($numFilhos)
    {
        /*
                A variável $this->numFilhos refere-se ao atributo numFilhos do objeto atual.
                Já $numFilhos é o parâmetro recebido pelo método, que será usado para atualizar o valor do atributo.
            */
        $this->numFilhos = $numFilhos;
    }
}

// Criação de uma instância da classe Funcionario
$y = new Funcionario(); // $y é um objeto da classe Funcionario

// Define o nome do funcionário $y como 'José'
$y->setNome('José');

// Define o número de filhos do funcionário $y como 2
$y->setNumFilhos(2);

// Exibe o nome e o número de filhos do funcionário $y usando os métodos getters
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) '; // Exibe: "José possui 2 filho(s)"

echo '<br />'; // Quebra de linha para melhor visualização

// Criação de outra instância da classe Funcionario
$x = new Funcionario(); // $x é outro objeto da classe Funcionario

// Define o nome do funcionário $x como 'Maria'
$x->setNome('Maria');

// Define o número de filhos do funcionário $x como 0
$x->setNumFilhos(0);

// Exibe o nome e o número de filhos do funcionário $x usando os métodos getters
echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) '; // Exibe: "Maria possui 0 filho(s)"
