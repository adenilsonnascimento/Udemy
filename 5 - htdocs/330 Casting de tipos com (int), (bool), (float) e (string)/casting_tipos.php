<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>O que é gettype</h1>
    <p>A função <code>gettype()</code> em PHP é utilizada para retornar o tipo de uma variável. Isso é útil para depuração e para garantir que as variáveis sejam do tipo esperado.</p>

    <?php
    // gettype() => retorna o tipo da variável
    $valor = 10;
    $valor2 = (float) $valor; // float, double ou real
    $valor3 = (string) $valor; 

    echo $valor . ' ' . gettype($valor);
    echo '<br />';
    echo $valor2 . ' ' . gettype($valor2);
    echo '<br />';
    echo $valor3 . ' ' . gettype($valor3);
    
    // converter de string para int
    $valor4 = '22.12';
    $valor5 = (integer) $valor4;
    echo '<br />';
    echo $valor5 . ' ' . gettype($valor5);
    ?>

    <h2>Informações Adicionais sobre gettype() em PHP</h2>
    <ul>
        <li><strong>Função:</strong> <code>gettype()</code> retorna uma string representando o tipo da variável passada como argumento.</li>
        <li><strong>Tipos Retornados:</strong> Os tipos comuns retornados incluem "integer", "double", "string", "boolean", "array", "object", entre outros.</li>
        <li><strong>Conversão de Tipos:</strong> Em PHP, é possível converter variáveis de um tipo para outro usando casting, como <code>(float)</code>, <code>(string)</code>, <code>(integer)</code>, etc.</li>
    </ul>

    <p>Utilizar a função <code>gettype()</code> é uma prática útil para depuração e verificação de tipos de variáveis em PHP, garantindo que o código funcione conforme esperado.</p>
</body>

</html>
