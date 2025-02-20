<?php
class Exemplo
{
    // Atributo estático, compartilhado entre todas as instâncias da classe
    public static $atributo1 = 'Eu sou um atributo static';

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

// $x = new Exemplo(); // Instanciação da classe (comentada)

/* 
Atributos e métodos estáticos podem ser acessados diretamente, sem precisar instanciar.
*/
/* 
echo Exemplo::$atributo1; // Acessa o atributo estático diretamente
echo '<br />';
echo Exemplo::metodo1(); // Chama o método estático diretamente
*/

// echo Exemplo::$metodo2(); // Não funciona, pois $metodo2 não é estático
// echo $x->atributo2; // Instâncias só acessam atributos e métodos não estáticos

Exemplo::metodo1(); // Chama o método estático diretamente
