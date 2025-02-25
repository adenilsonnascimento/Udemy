<?php
class Exemplo
{
    // Atributo estático, compartilhado entre todas as instâncias da classe
    public static $atributo1 = 'Eu sou um atributo static (Estático) <br />';

    // Atributo normal, específico de cada instância da classe
    public $atributo2 = 'Eu sou atributo normal';

    // Método estático, pode ser chamado sem instanciar a classe
    public static function metodo1()
    {
        // echo $this->atributo2; // Daria erro! Métodos estáticos não têm acesso ao $this
        echo 'Eu sou um método estático';
    }

    // Método normal, só pode ser chamado em uma instância da classe
    public function metodo2()
    {
        echo 'Eu sou um método normal';
    }
}

// Só se consegue acessa os atributos staticos e métodos estáticos sem instanciar a classe

echo Exemplo::$atributo1; // Acessa o atributo estático diretamente

Exemplo::metodo1(); // Chama o método estático diretamente
