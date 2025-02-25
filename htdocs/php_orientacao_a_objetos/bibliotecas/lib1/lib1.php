<?php 

namespace A;

// Classe Cliente que implementa a interface Cadastro do namespace B
class Cliente implements Cadastro {
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



?>