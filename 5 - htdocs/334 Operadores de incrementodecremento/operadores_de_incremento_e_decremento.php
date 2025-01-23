<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Operadores de Incremento e Decremento em PHP</h1>
    <p>Os operadores de incremento e decremento em PHP são utilizados para aumentar ou diminuir o valor de uma variável em uma unidade. Eles são frequentemente usados em loops e outras estruturas de controle.</p>

    <?php
    $x = 10;

    // Incremento
    echo "Valor inicial de x: $x<br/>";
    $x++;
    echo "Valor de x após incremento: $x<br/>";

    // Decremento
    $x--;
    echo "Valor de x após decremento: $x<br/>";

    // Incremento prefixado
    ++$x;
    echo "Valor de x após incremento prefixado: $x<br/>";

    // Decremento prefixado
    --$x;
    echo "Valor de x após decremento prefixado: $x<br/>";
    ?>

    <h2>Informações Adicionais sobre Operadores de Incremento e Decremento em PHP</h2>
    <ul>
        <li><strong>Incremento (<code>++</code>):</strong> Aumenta o valor da variável em 1. Pode ser usado como prefixo (<code>++$x</code>) ou sufixo (<code>$x++</code>).</li>
        <li><strong>Decremento (<code>--</code>):</strong> Diminui o valor da variável em 1. Pode ser usado como prefixo (<code>--$x</code>) ou sufixo (<code>$x--</code>).</li>
        <li><strong>Prefixo vs. Sufixo:</strong> Quando usado como prefixo, o incremento ou decremento ocorre antes da avaliação da expressão. Quando usado como sufixo, ocorre após a avaliação da expressão.</li>
    </ul>

    <p>Os operadores de incremento e decremento são ferramentas úteis em PHP para manipular valores de variáveis de forma eficiente, especialmente em loops e outras estruturas de controle.</p>
</body>

</html>
