<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Funções - Introdução</h1>
    <p>Funções em PHP são blocos de código que podem ser reutilizados em diferentes partes de um programa. Elas ajudam a organizar e modularizar o código, tornando-o mais legível e fácil de manter.</p>

    <?php
    // Definindo uma função simples
    function saudacao($nome) {
        return "Olá, $nome!";
    }

    // Chamando a função
    $mensagem = saudacao("Maria");
    echo $mensagem;
    ?>

    <h2>Informações Adicionais sobre Funções em PHP</h2>
    <ul>
        <li><strong>Definição:</strong> Funções são definidas usando a palavra-chave <code>function</code> seguida pelo nome da função e parênteses <code>()</code>.</li>
        <li><strong>Parâmetros:</strong> Funções podem aceitar parâmetros, que são valores passados para a função quando ela é chamada.</li>
        <li><strong>Retorno:</strong> Funções podem retornar valores usando a palavra-chave <code>return</code>.</li>
        <li><strong>Reutilização:</strong> Funções permitem a reutilização de código, evitando a duplicação e facilitando a manutenção.</li>
    </ul>

    <p>Utilizar funções é uma prática essencial em PHP para criar código modular, reutilizável e fácil de entender.</p>
</body>

</html>
