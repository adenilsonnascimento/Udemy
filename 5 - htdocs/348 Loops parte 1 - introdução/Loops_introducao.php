<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra como usar diferentes tipos de loops em PHP, como <code>for</code>, <code>while</code>, e <code>foreach</code>, para iterar sobre arrays e executar blocos de código repetidamente.</p>

    <h2>Loop For</h2>
    <p>O loop <code>for</code> é usado quando você sabe de antemão quantas vezes deseja executar um bloco de código.</p>
    <?php
    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Iteração número $i</li>";
    }
    echo "</ul>";
    ?>

    <h2>Loop While</h2>
    <p>O loop <code>while</code> é usado quando você deseja repetir um bloco de código enquanto uma condição for verdadeira.</p>
    <?php
    $i = 1;
    echo "<ul>";
    while ($i <= 5) {
        echo "<li>Iteração número $i</li>";
        $i++;
    }
    echo "</ul>";
    ?>

    <h2>Loop Foreach</h2>
    <p>O loop <code>foreach</code> é usado para iterar sobre arrays. Ele percorre cada elemento do array e executa um bloco de código para cada elemento.</p>
    <?php
    $frutas = ['Maçã', 'Banana', 'Laranja', 'Uva'];
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Loop For</strong>:<br>
        - <strong>Descrição</strong>: Usado quando você sabe de antemão quantas vezes deseja executar um bloco de código.<br>
        - <strong>Exemplo</strong>: <code>for ($i = 1; $i <= 5; $i++) { echo "Iteração número $i"; }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código 5 vezes, exibindo o número da iteração.<br><br>

        2. <strong>Loop While</strong>:<br>
        - <strong>Descrição</strong>: Usado quando você deseja repetir um bloco de código enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>$i = 1; while ($i <= 5) { echo "Iteração número $i"; $i++; }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código enquanto a condição <code>$i <= 5</code> for verdadeira.<br><br>

        3. <strong>Loop Foreach</strong>:<br>
        - <strong>Descrição</strong>: Usado para iterar sobre arrays. Ele percorre cada elemento do array e executa um bloco de código para cada elemento.<br>
        - <strong>Exemplo</strong>: <code>$frutas = ['Maçã', 'Banana', 'Laranja', 'Uva']; foreach ($frutas as $fruta) { echo $fruta; }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código para cada elemento do array <code>$frutas</code>, exibindo o valor de cada elemento.<br>
    </p>
</body>
</html>