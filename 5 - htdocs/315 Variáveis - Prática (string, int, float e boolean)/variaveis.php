<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Trabalhando com Variáveis em PHP</h1>
    <p>Este exemplo demonstra como declarar e utilizar variáveis em PHP, uma das funcionalidades mais básicas e essenciais da linguagem. Vamos ver como diferentes tipos de variáveis são usadas e exibidas.</p>

    <?php
        // string
        $nome = 'Jorge Sant Ana';

        // int
        $idade = 29;

        // float
        $peso = 82.5;

        // boolean
        $fumante_sn = true; // (true = 1) ou (false = vazio)

        // ... lógica ...
        $idade = '30';
    ?>

    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

    <h2>Informações Adicionais sobre Variáveis em PHP</h2>
    <ul>
        <li><strong>Declaração de Variáveis:</strong> Em PHP, as variáveis são declaradas usando o símbolo <code>$</code> seguido do nome da variável. Elas não precisam ser explicitamente tipadas.</li>
        <li><strong>Tipos de Dados:</strong> PHP suporta vários tipos de dados, incluindo strings, inteiros, floats, booleanos, arrays, objetos, entre outros.</li>
        <li><strong>Interpolação de Strings:</strong> Variáveis podem ser interpoladas dentro de strings usando aspas duplas (<code>"</code>), permitindo a inclusão direta de seus valores.</li>
    </ul>

    <p>Variáveis são fundamentais para armazenar e manipular dados em PHP, permitindo a criação de scripts dinâmicos e interativos.</p>
</body>

</html>