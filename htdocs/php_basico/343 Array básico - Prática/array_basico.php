<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Arrays em PHP - Introdução</h1>
    <p>Este exemplo demonstra como criar e manipular arrays sequenciais (numéricos) e associativos em PHP. Arrays são estruturas de dados que permitem armazenar múltiplos valores em uma única variável.</p>

    <?php
    // Arrays sequenciais (numéricos)
    // $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
    /*
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
    $lista_frutas[] = 'Abacaxi';

    // Funções para debugar arrays
    echo '<pre>';
        var_dump($lista_frutas);
    echo '</pre>';

    echo '<hr />';
    echo '<pre>';
        print_r($lista_frutas);
    echo '</pre>';

    // Acessando um elemento específico do array
    echo $lista_frutas[4];
    */

    // Arrays associativos
    $lista_frutas = [
        'a' => 'Banana',
        'b' => 'Maçã',
        'x' => 'Morango',
        'z' => 'Uva',
        '2' => 'Abacate'
    ];
    $lista_frutas['w'] = 'Abacaxi';

    // Funções para debugar arrays associativos
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    // Acessando um elemento específico do array associativo
    echo $lista_frutas["x"];
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Arrays Sequenciais (Numéricos)</strong>:<br>
        - <strong>Definição</strong>: Arrays onde os índices são números inteiros.<br>
        - <strong>Exemplo</strong>: <code>$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];</code><br>
        - <strong>Adicionando Elemento</strong>: <code>$lista_frutas[] = 'Abacaxi';</code> adiciona 'Abacaxi' ao final do array.<br>
        - <strong>Debug</strong>: <code>var_dump($lista_frutas);</code> e <code>print_r($lista_frutas);</code> exibem informações detalhadas sobre o array.<br>
        - <strong>Acessando Elemento</strong>: <code>echo $lista_frutas[4];</code> exibe o quinto elemento do array.<br><br>

        2. <strong>Arrays Associativos</strong>:<br>
        - <strong>Definição</strong>: Arrays onde os índices são strings ou números.<br>
        - <strong>Exemplo</strong>: <code>$lista_frutas = ['a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', 'z' => 'Uva', '2' => 'Abacate'];</code><br>
        - <strong>Adicionando Elemento</strong>: <code>$lista_frutas['w'] = 'Abacaxi';</code> adiciona 'Abacaxi' ao array com o índice 'w'.<br>
        - <strong>Debug</strong>: <code>var_dump($lista_frutas);</code> exibe informações detalhadas sobre o array associativo.<br>
        - <strong>Acessando Elemento</strong>: <code>echo $lista_frutas["x"];</code> exibe o elemento com o índice 'x'.<br>
    </p>
</body>
</html>