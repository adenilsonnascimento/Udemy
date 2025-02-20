<?php
// Definição da classe Funcionario
class Funcionario
{
    // Atributos da classe inicializados com valor null (nulo)
    public $nome = null; // Armazena o nome do funcionário
    public $telefone = null; // Armazena o telefone do funcionário
    public $numFilhos = null; // Armazena o número de filhos do funcionário
    public $cargo = null; // Armazena o cargo do funcionário
    public $salario = null; // Armazena o salário do funcionário

    // Método mágico __set para definir dinamicamente o valor de um atributo
    function __set($atributo, $valor)
    {
        /*
                O método __set é chamado automaticamente quando se tenta atribuir um valor a um atributo inacessível ou não declarado explicitamente.
                $atributo: Nome do atributo que está sendo definido.
                $valor: Valor que será atribuído ao atributo.
            */
        $this->$atributo = $valor; // Define o valor do atributo dinamicamente
    }

    // Método mágico __get para obter dinamicamente o valor de um atributo
    function __get($atributo)
    {
        /*
                O método __get é chamado automaticamente quando se tenta acessar um atributo inacessível ou não declarado explicitamente.
                $atributo: Nome do atributo que está sendo acessado.
            */
        return $this->$atributo; // Retorna o valor do atributo dinamicamente
    }

    /* 
        // Métodos "setter" e "getter" comentados, pois os métodos mágicos __set e __get substituem sua funcionalidade
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        function getNome() {
            return $this->nome;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }
        */

    // Método para resumir os dados do funcionário
    function resumirCadFunc()
    {
        /* 
                O operador $this refere-se ao próprio objeto que está chamando o método.
                Aqui, estamos usando o método mágico __get para acessar os atributos 'nome' e 'numFilhos'.
            */
        return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
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

// Define o nome do funcionário $y como 'José' usando o método mágico __set
$y->__set('nome', 'José');

// Define o número de filhos do funcionário $y como 2 usando o método mágico __set
$y->__set('numFilhos', 2);

// Exibe o resumo do cadastro do funcionário $y usando o método resumirCadFunc()
echo $y->resumirCadFunc(); // Exibe: "José possui 2 filho(s)"

echo '<br />'; // Quebra de linha para melhor visualização

// Criação de outra instância da classe Funcionario
$x = new Funcionario(); // $x é outro objeto da classe Funcionario

// Define o nome do funcionário $x como 'Maria' usando o método mágico __set
$x->__set('nome', 'Maria');

// Define o número de filhos do funcionário $x como 0 usando o método mágico __set
$x->__set('numFilhos', 0);

// Exibe o resumo do cadastro do funcionário $x usando o método resumirCadFunc()
echo $x->resumirCadFunc(); // Exibe: "Maria possui 0 filho(s)"
