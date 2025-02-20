<?php
// Definição da classe Funcionario
class Funcionario
{
    // Atributos da classe (propriedades)
    public $nome = 'José'; // Nome padrão do funcionário
    public $telefone = '11 99999-8888'; // Telefone padrão do funcionário
    public $numFilhos = 2; // Número padrão de filhos do funcionário

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

// Chamada do método resumirCadFunc() para exibir o resumo do cadastro do funcionário
echo $y->resumirCadFunc(); // Exibe: "José possui 2 filho(s)"

echo '<br />'; // Quebra de linha para melhor visualização

// Alteração do número de filhos do funcionário $y para 3
$y->modificarNumFilhos(3);

// Chamada novamente do método resumirCadFunc() para exibir o novo resumo
echo $y->resumirCadFunc(); // Exibe: "José possui 3 filho(s)"

echo '<hr />'; // Linha horizontal para separar as saídas

// Criação de outra instância da classe Funcionario
$x = new Funcionario(); // $x é outro objeto da classe Funcionario

// Chamada do método resumirCadFunc() para exibir o resumo do cadastro do funcionário $x
echo $x->resumirCadFunc(); // Exibe: "José possui 2 filho(s)"

echo '<br />'; // Quebra de linha para melhor visualização

// Alteração do número de filhos do funcionário $x para 1
$x->modificarNumFilhos(1);

// Chamada novamente do método resumirCadFunc() para exibir o novo resumo
echo $x->resumirCadFunc(); // Exibe: "José possui 1 filho(s)"
