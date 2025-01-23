<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Operadores de Atribuição em PHP</h1>
    <p>Os operadores de atribuição em PHP são utilizados para atribuir valores a variáveis e realizar operações aritméticas ao mesmo tempo. Eles simplificam a escrita de expressões matemáticas e tornam o código mais conciso.</p>

    <?php
    // Operadores de atribuição
    // =  -> atribuição simples
    // += -> adição e atribuição
    // -= -> subtração e atribuição
    // *= -> multiplicação e atribuição
    // /= -> divisão e atribuição
    // %= -> módulo e atribuição

    $x = 10;
    $y = 8;

    // Exemplos de uso dos operadores de atribuição
    //$x = $x + 5;
    //$x += 5;
    //$x -= $y;
    //$x /= $y;
    //$x *= $y;
    $x %= $y; // $x = $x % $y
    echo $x;
    ?>

    <h2>Informações Adicionais sobre Operadores de Atribuição em PHP</h2>
    <ul>
        <li><strong>Atribuição Simples (<code>=</code>):</strong> Atribui um valor a uma variável.</li>
        <li><strong>Adição e Atribuição (<code>+=</code>):</strong> Soma um valor à variável e atribui o resultado à própria variável.</li>
        <li><strong>Subtração e Atribuição (<code>-=</code>):</strong> Subtrai um valor da variável e atribui o resultado à própria variável.</li>
        <li><strong>Multiplicação e Atribuição (<code>*=</code>):</strong> Multiplica a variável por um valor e atribui o resultado à própria variável.</li>
        <li><strong>Divisão e Atribuição (<code>/=</code>):</strong> Divide a variável por um valor e atribui o resultado à própria variável.</li>
        <li><strong>Módulo e Atribuição (<code>%=</code>):</strong> Calcula o módulo da variável por um valor e atribui o resultado à própria variável.</li>
    </ul>

    <p>Os operadores de atribuição são ferramentas poderosas em PHP, permitindo a realização de operações aritméticas e a atribuição de valores de forma eficiente e concisa.</p>
</body>

</html>