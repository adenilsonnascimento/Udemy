<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Manipulação de Strings em PHP</h1>
    <p>Este exemplo demonstra várias funções de manipulação de strings em PHP, como conversão para minúsculas e maiúsculas, substituição de caracteres, e obtenção de substrings.</p>

    <?php
    $texto = 'curso completo de php';

    // string to lower
    echo $texto . '<br />';
    echo strtolower($texto);
    echo '<hr/>';

    // string to upper
    echo $texto . '<br />';
    echo strtoupper($texto);
    echo '<hr/>';

    // upper case first
    echo $texto . '<br />';
    echo ucfirst($texto);
    echo '<hr/>';

    // string length
    echo $texto . '<br />';
    echo strlen($texto);
    echo '<hr/>';

    // string replace
    echo $texto . '<br />';
    echo str_replace('.', ',', '22.20'); // é case-sensitive
    echo '<hr/>';

    // substring
    echo $texto . '<br />';
    echo substr($texto, 0, 14) . '...';
    echo '<hr/>';
    ?>
</body>
</html>
