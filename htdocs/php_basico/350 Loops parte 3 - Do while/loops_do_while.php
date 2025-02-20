<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra o uso do loop <code>do...while</code> em PHP, que executa um bloco de código pelo menos uma vez e, em seguida, repete a execução enquanto uma condição for verdadeira.</p>

    <?php
    $x = 1;
    do {
        echo "X = $x <br />";
        $x++; // Critério de parada
        // continue
        // break
    } while ($x < 9);
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Loop Do...While</strong>:<br>
        - <strong>Descrição</strong>: O loop <code>do...while</code> executa um bloco de código pelo menos uma vez e, em seguida, repete a execução enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>do { ... } while ($x < 9);</code><br>
        - <strong>Resultado</strong>: O bloco de código é executado uma vez antes da condição ser testada. Se a condição for verdadeira, o loop continua; caso contrário, ele para.<br><br>

        2. <strong>Critério de Parada</strong>:<br>
        - <strong>Descrição</strong>: O critério de parada é a condição que, quando satisfeita, faz o loop terminar.<br>
        - <strong>Exemplo</strong>: <code>$x++;</code> incrementa <code>$x</code> em 1 a cada iteração, eventualmente fazendo com que <code>$x</code> atinja 9 e o loop pare.<br><br>

        3. <strong>Instrução Continue</strong>:<br>
        - <strong>Descrição</strong>: A instrução <code>continue</code> faz com que o loop pule a iteração atual e continue com a próxima.<br>
        - <strong>Nota</strong>: No seu código, a instrução <code>continue</code> está comentada, mas pode ser usada para pular iterações específicas.<br><br>

        4. <strong>Instrução Break</strong>:<br>
        - <strong>Descrição</strong>: A instrução <code>break</code> termina a execução do loop imediatamente.<br>
        - <strong>Nota</strong>: No seu código, a instrução <code>break</code> está comentada, mas pode ser usada para sair do loop em condições específicas.<br>
    </p>
</body>
</html>