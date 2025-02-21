<?php
// Definição da classe Funcionario
class Funcionario
{
    // Atributos da classe inicializados com valor null (nulo)
    public $nome = null; // Armazena o nome do funcionário
    public $telefone = null; // Armazena o telefone do funcionário
    public $numFilhos = null; // Armazena o número de filhos do funcionário


    //___________________________________________________
    // Método "setter" para definir o nome do funcionário
    function setNome($nome)
    {
        $this->nome = $nome; // Atribui o valor recebido ao atributo $nome do objeto atual
    }

    // Método "setter" para definir o telefone do funcionário
    function setTelefone($telefone)
    {
        $this->telefone = $telefone; // Atribui o valor recebido ao atributo $elefone do objeto atual
    }

    // Método "setter" para definir o número de filhos do funcionário
    function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos; // Atribui o valor recebido ao atributo $numFilhos do objeto atual
    }
    //___________________________________________________
    // Método "getter" para obter o nome do funcionário
    function getNome()
    {
        return $this->nome; // Retorna o valor do atributo $nome do objeto atual
    }

    // Método "getter" para obter o telefone do funcionário
    function getTelefone()
    {
        return $this->telefone; // Retorna o valor do atributo $telefone do objeto atual
    }

    // Método "getter" para obter o número de filhos do funcionário
    function getNumFilhos()
    {
        return $this->numFilhos; // Retorna o valor do atributo $numFilhos do objeto atual
    }

    //___________________________________________________
    // Método para resumir os dados do funcionário
    function resumirCadFunc()
    {
        /* 
                O operador $this refere-se ao próprio objeto que está chamando o método.
                Aqui, estamos acessando os atributos $nome e $numFilhos do objeto atual.
            */
        return "$this->nome possui $this->numFilhos filho(s) e telefone $this->telefone";;
    }

    // Método para modificar o telefone do funcionário
    function modificarTelefone($telefone)
    {
        $this->telefone = $telefone; // Atribui o valor recebido ao atributo $telefone do objeto atual
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

//___________________ Primeiro Funcionario ________________________________
// Criação de uma instância da classe Funcionario
$y = new Funcionario(); // $y é um objeto da classe Funcionario

// Define o nome do funcionário $y como 'José'
$y->setNome('José');

// Define o telefone do funcionário $y como '1234-5678'
$y->modificarTelefone('1234-5678');

// Define o número de filhos do funcionário $y como 2
$y->setNumFilhos(2);

// Exibe o nome e o número de filhos do funcionário $y usando os métodos getters
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) ' . 'e o telefone ' . $y->getTelefone() . ''; // Exibe: "José possui 2 filho(s) e o telefone 1234-5678"

echo '<br />'; // Quebra de linha para melhor visualização


//____________________ Segunda Funcionario _______________________________
// Criação de outra instância da classe Funcionario
$x = new Funcionario(); // $x é outro objeto da classe Funcionario

// Define o nome do funcionário $x como 'Maria'
$x->setNome('Maria');

// Define o telefone do funcionário $x como '9876-5432'
$x->setTelefone('9876-5432');

// Define o número de filhos do funcionário $x como 0
$x->setNumFilhos(0);

// Exibe o nome e o número de filhos do funcionário $x usando os métodos getters
echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) ' . 'e o telefone ' . $x->getTelefone() . ''; // Exibe: "Maria possui 0 filho(s)"


$s = new Funcionario();
$s->setNome('Adenilson');
$s->setTelefone('9234-5678');
$s->setNumFilhos(2);

echo '<br />';
echo $s->resumirCadFunc();
