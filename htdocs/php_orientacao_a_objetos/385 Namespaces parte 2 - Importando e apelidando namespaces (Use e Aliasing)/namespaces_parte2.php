<?php

// Inclusão de arquivos externos usando require

// require é uma palavra reservada que inclui e avalia o arquivo especificado

// Se o arquivo não for encontrado, um erro fatal é gerado e a execução do script é interrompida

require  "../bibliotecas/lib1/lib1.php";
require "../bibliotecas/lib2/lib2.php";

// Usando a palavra-chave use para importar classes de namespaces específicos

// As classes são renomeadas (alias) para evitar conflitos de nomes

use B\Cliente as ClienteB;
use A\Cliente as ClienteA;

// Instanciando a classe Cliente do namespace B

$clienteB = new ClienteB();
print_r($clienteB); // Exibe a estrutura do objeto $clienteB
echo $clienteB->__get('nome'); // Exibe o valor do atributo 'nome' do objeto $clienteB

echo '<br/>';

// Instanciando a classe Cliente do namespace A

$clienteA = new ClienteA();
print_r($clienteA); // Exibe a estrutura do objeto $clienteA
echo $clienteA->__get('nome'); // Exibe o valor do atributo 'nome' do objeto $clienteA

// https://packagist.org/ biblioteca de pacotes PHP
?>

<p>https://packagist.org/ biblioteca de pacotes PHP</p>



