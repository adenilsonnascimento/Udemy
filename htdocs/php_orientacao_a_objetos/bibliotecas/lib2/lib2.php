<?php 

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


?>