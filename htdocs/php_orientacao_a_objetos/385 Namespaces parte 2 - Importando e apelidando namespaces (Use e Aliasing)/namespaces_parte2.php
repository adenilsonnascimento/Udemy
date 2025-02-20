<?php
// Importa o arquivo "lib1.php" localizado no diretório "./bibliotecas/lib1/".
require "./bibliotecas/lib1/lib1.php";

// Importa o arquivo "lib2.php" localizado no diretório "./bibliotecas/lib2/".
require "./bibliotecas/lib2/lib2.php";

// Define um alias para a classe Cliente do namespace A, chamando-a de C1.
use A\Cliente as C1;

// Define um alias para a classe Cliente do namespace B, chamando-a de C2.
use B\Cliente as C2;

// Instancia um objeto da classe Cliente do namespace A (usando o alias C1).
$c = new C1();

// Exibe as informações do objeto $c, incluindo suas propriedades e valores.
print_r($c);

// Usa o método mágico __get para acessar a propriedade 'nome' do objeto $c e imprime seu valor.
echo $c->__get('nome');

// Instancia um objeto da classe Cliente do namespace B (usando o alias C2).
$c = new C2();

// Exibe as informações do objeto $c, incluindo suas propriedades e valores.
print_r($c);

// Usa o método mágico __get para acessar a propriedade 'nome' do objeto $c e imprime seu valor.
echo $c->__get('nome');
