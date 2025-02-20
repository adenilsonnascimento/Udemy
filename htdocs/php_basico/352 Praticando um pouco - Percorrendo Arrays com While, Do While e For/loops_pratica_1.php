<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra como iterar sobre arrays multidimensionais em PHP usando diferentes tipos de loops, como <code>while</code>, <code>do...while</code>, e <code>for</code>.</p>

    <?php
    $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
    );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    echo '<br /><br /><br />';

    // count -> conta a quantidade de elementos de array
    echo 'O array possui ' . count($registros) . ' registros<br><br>';

    // Iterando sobre o array usando while
    echo "<h2>Loop While</h2>";
    $idx = 0;
    while ($idx < count($registros)) {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr />';
        $idx++;
    }

    // Iterando sobre o array usando do...while
    echo "<h2>Loop Do...While</h2>";
    $idx = 0;
    do {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr />';
        $idx++;
    } while ($idx < count($registros));

    // Iterando sobre o array usando for
    echo "<h2>Loop For</h2>";
    for ($idx = 0; $idx < count($registros); $idx++) {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr />';
    }
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Loop While</strong>:<br>
        - <strong>Descrição</strong>: Executa um bloco de código repetidamente enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>while ($idx < count($registros)) { ... }</code><br>
        - <strong>Resultado</strong>: O loop continua executando enquanto <code>$idx</code> for menor que a quantidade de registros.<br><br>

        2. <strong>Loop Do...While</strong>:<br>
        - <strong>Descrição</strong>: Executa um bloco de código pelo menos uma vez e, em seguida, repete a execução enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>do { ... } while ($idx < count($registros));</code><br>
        - <strong>Resultado</strong>: O bloco de código é executado uma vez antes da condição ser testada. Se a condição for verdadeira, o loop continua; caso contrário, ele para.<br><br>

        3. <strong>Loop For</strong>:<br>
        - <strong>Descrição</strong>: Usado quando você sabe de antemão quantas vezes deseja executar um bloco de código.<br>
        - <strong>Exemplo</strong>: <code>for ($idx = 0; $idx < count($registros); $idx++) { ... }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código para cada registro no array, exibindo o título e o conteúdo de cada notícia.<br>
    </p>
</body>
</html>