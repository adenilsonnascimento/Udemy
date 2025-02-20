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

    <h3>Pós-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a após o incremento é " . $a++ . "<br/>";
    echo "O valor atualizado é $a";
    ?>

    <h3>Pré-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a pré o incremento é " . ++$a . "<br/>";
    echo "O valor atualizado é $a";
    ?>

    <h3>Pós-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a após o decremento é " . $a-- . "<br/>";
    echo "O valor atualizado é $a";
    ?>

    <h3>Pré-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a pré o decremento é " . --$a . "<br/>";
    echo "O valor atualizado é $a";
    ?>

    <h2>Informações Adicionais sobre Operadores de Incremento e Decremento em PHP</h2>
    <ul>
        <li><strong>Pós-incremento (<code>$a++</code>):</strong> Aumenta o valor da variável em 1, mas retorna o valor original antes do incremento.</li>
        <li><strong>Pré-incremento (<code>++$a</code>):</strong> Aumenta o valor da variável em 1 e retorna o valor incrementado.</li>
        <li><strong>Pós-decremento (<code>$a--</code>):</strong> Diminui o valor da variável em 1, mas retorna o valor original antes do decremento.</li>
        <li><strong>Pré-decremento (<code>--$a</code>):</strong> Diminui o valor da variável em 1 e retorna o valor decrementado.</li>
    </ul>

    <p>Os operadores de incremento e decremento são ferramentas úteis em PHP para manipular valores de variáveis de forma eficiente, especialmente em loops e outras estruturas de controle.</p>
</body>

</html>
