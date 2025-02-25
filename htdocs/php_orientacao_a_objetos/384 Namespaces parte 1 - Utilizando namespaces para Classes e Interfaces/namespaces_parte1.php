<?php 

// Definindo o namespace A
namespace A;

// Classe Cliente que implementa a interface Cadastro do namespace B
class Cliente implements \B\Cadastro {
    public $nome = 'Adenilson';

    public function __construct() {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    
    public function __get($atributo) {
        return $this->$atributo;
    }

    public function salvar() {
        echo 'Salvar';
    }

    public function remover() {
        echo 'Remover';
    }
}

// Interface Cadastro que define o método salvar
interface Cadastro {
    public function salvar();
}

// Definindo o namespace B
namespace B;

// Classe Cliente que implementa a interface Cadastro do namespace B
class Cliente implements Cadastro {
    public $nome = 'Jade Sales';

    public function __construct() {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function remover() {
        echo 'Remover';
    }
}

// Interface Cadastro que define o método remover
interface Cadastro {
    public function remover();
}

// Especificando o namespace ao instanciar a classe Cliente do namespace B
$cliente = new \B\Cliente();
print_r($cliente);
echo $cliente->__get('nome');

echo '<br/>';

// Especificando o namespace ao instanciar a classe Cliente do namespace A
$cliente = new \A\Cliente();
print_r($cliente);
echo $cliente->__get('nome');

?>


<h1>Interfaces</h1>
<p>Uma interface em PHP é uma estrutura que define métodos que devem ser implementados por qualquer classe que a implemente. Interfaces garantem que uma classe siga um contrato específico, ou seja, implemente todos os métodos definidos na interface.
No seu código, a interface Cadastro no namespace A define o método salvar, enquanto a interface Cadastro no namespace B define o método remover.</p>