<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>O que são Operadores Aritméticos</h1>
    <p>Os operadores aritméticos em PHP são utilizados para realizar operações matemáticas básicas, como adição, subtração, multiplicação, divisão e módulo.</p>

    <?php
    $a = 10;
    $b = 5;

    // Adição
    $soma = $a + $b;
    echo "A soma de $a e $b é: $soma<br/>";

    // Subtração
    $subtracao = $a - $b;
    echo "A subtração de $a e $b é: $subtracao<br/>";

    // Multiplicação
    $multiplicacao = $a * $b;
    echo "A multiplicação de $a e $b é: $multiplicacao<br/>";

    // Divisão
    $divisao = $a / $b;
    echo "A divisão de $a por $b é: $divisao<br/>";

    // Módulo
    $modulo = $a % $b;
    echo "O módulo de $a por $b é: $modulo<br/>";
    ?>

    <h2>Informações Adicionais sobre Operadores Aritméticos em PHP</h2>
    <ul>
        <li><strong>Adição (<code>+</code>):</strong> Soma dois valores.</li>
        <li><strong>Subtração (<code>-</code>):</strong> Subtrai um valor do outro.</li>
        <li><strong>Multiplicação (<code>*</code>):</strong> Multiplica dois valores.</li>
        <li><strong>Divisão (<code>/</code>):</strong> Divide um valor pelo outro.</li>
        <li><strong>Módulo (<code>%</code>):</strong> Retorna o resto da divisão de um valor pelo outro.</li>
    </ul>

    <p>Os operadores aritméticos são fundamentais para realizar cálculos matemáticos em PHP, permitindo a manipulação e processamento de dados numéricos de forma eficiente.</p>
</body>

</html>