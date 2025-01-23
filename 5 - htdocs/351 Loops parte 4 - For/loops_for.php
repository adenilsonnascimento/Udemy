<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra o uso de diferentes tipos de loops em PHP, incluindo <code>while</code>, <code>do...while</code>, e <code>for</code>, para iterar sobre blocos de código repetidamente.</p>

    <?php
    // Exemplo de loop while
    $x = 1;
    echo "<h2>Loop While</h2>";
    echo "<p>O loop <code>while</code> executa um bloco de código repetidamente enquanto uma condição for verdadeira.</p>";
    echo "<pre>";
    echo "while (\$x < 10) {\n";
    echo "    // código a ser executado\n";
    echo "}\n";
    echo "</pre>";

    // Exemplo de loop do...while
    $x = 1;
    echo "<h2>Loop Do...While</h2>";
    echo "<p>O loop <code>do...while</code> executa um bloco de código pelo menos uma vez e, em seguida, repete a execução enquanto uma condição for verdadeira.</p>";
    echo "<pre>";
    echo "do {\n";
    echo "    // código a ser executado\n";
    echo "} while (\$x < 10);\n";
    echo "</pre>";

    // Exemplo de loop for
    echo "<h2>Loop For</h2>";
    echo "<p>O loop <code>for</code> é usado quando você sabe de antemão quantas vezes deseja executar um bloco de código.</p>";
    echo "<pre>";
    echo "for (\$x = 1; \$x <= 10; \$x++) {\n";
    echo "    echo \"\$x <br/>\";\n";
    echo "}\n";
    echo "</pre>";

    // Exemplo de loop for com break
    echo "<h2>Loop For com Break</h2>";
    echo "<p>O loop <code>for</code> pode ser interrompido usando a instrução <code>break</code>.</p>";
    echo "<pre>";
    echo "for (\$x = 11; true; \$x++) {\n";
    echo "    if (\$x >= 20) {\n";
    echo "        break;\n";
    echo "    }\n";
    echo "    echo \"\$x <br/>\";\n";
    echo "}\n";
    echo "</pre>";

    // Exemplo de loop for com decremento
    echo "<h2>Loop For com Decremento</h2>";
    echo "<p>O loop <code>for</code> também pode ser usado para decrementar um valor.</p>";
    echo "<pre>";
    echo "for (\$x = 10; \$x > 0; \$x--) {\n";
    echo "    echo \"\$x <br/>\";\n";
    echo "}\n";
    echo "</pre>";
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Loop While</strong>:<br>
        - <strong>Descrição</strong>: Executa um bloco de código repetidamente enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>while ($x < 10) { ... }</code><br>
        - <strong>Resultado</strong>: O loop continua executando enquanto <code>$x</code> for menor que 10.<br><br>

        2. <strong>Loop Do...While</strong>:<br>
        - <strong>Descrição</strong>: Executa um bloco de código pelo menos uma vez e, em seguida, repete a execução enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>do { ... } while ($x < 10);</code><br>
        - <strong>Resultado</strong>: O bloco de código é executado uma vez antes da condição ser testada. Se a condição for verdadeira, o loop continua; caso contrário, ele para.<br><br>

        3. <strong>Loop For</strong>:<br>
        - <strong>Descrição</strong>: Usado quando você sabe de antemão quantas vezes deseja executar um bloco de código.<br>
        - <strong>Exemplo</strong>: <code>for ($x = 1; $x <= 10; $x++) { echo "$x <br/>"; }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código 10 vezes, exibindo o valor de <code>$x</code> a cada iteração.<br><br>

        4. <strong>Loop For com Break</strong>:<br>
        - <strong>Descrição</strong>: O loop <code>for</code> pode ser interrompido usando a instrução <code>break</code>.<br>
        - <strong>Exemplo</strong>: <code>for ($x = 11; true; $x++) { if ($x >= 20) { break; } echo "$x <br/>"; }</code><br>
        - <strong>Resultado</strong>: O loop é interrompido quando <code>$x</code> atinge 20.<br><br>

        5. <strong>Loop For com Decremento</strong>:<br>
        - <strong>Descrição</strong>: O loop <code>for</code> também pode ser usado para decrementar um valor.<br>
        - <strong>Exemplo</strong>: <code>for ($x = 10; $x > 0; $x--) { echo "$x <br/>"; }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código 10 vezes, exibindo o valor de <code>$x</code> a cada iteração, decrementando <code>$x</code> a cada vez.<br>
    </p>
</body>
</html>