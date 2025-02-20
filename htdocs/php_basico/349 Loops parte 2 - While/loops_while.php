<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra o uso do loop <code>while</code> em PHP, juntamente com operadores de comparação e lógicos para controlar o fluxo do loop.</p>

    <?php
    $num = 1;
    // Operadores de comparação / lógicos
    echo '-- Início do loop --<br />';
    while ($num < 10) {
        $num++; // Critério de parada.
        if ($num == 2 || $num == 6) {
            continue;
        }
        echo "$num <br />";
    }
    echo '-- Fim do loop --';
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Loop While</strong>:<br>
        - <strong>Descrição</strong>: O loop <code>while</code> executa um bloco de código repetidamente enquanto uma condição for verdadeira.<br>
        - <strong>Exemplo</strong>: <code>while ($num < 10) { ... }</code><br>
        - <strong>Resultado</strong>: O loop continua executando enquanto <code>$num</code> for menor que 10.<br><br>

        2. <strong>Critério de Parada</strong>:<br>
        - <strong>Descrição</strong>: O critério de parada é a condição que, quando satisfeita, faz o loop terminar.<br>
        - <strong>Exemplo</strong>: <code>$num++;</code> incrementa <code>$num</code> em 1 a cada iteração, eventualmente fazendo com que <code>$num</code> atinja 10 e o loop pare.<br><br>

        3. <strong>Operadores de Comparação</strong>:<br>
        - <strong>Descrição</strong>: Usados para comparar valores.<br>
        - <strong>Exemplo</strong>: <code>$num == 2</code> verifica se <code>$num</code> é igual a 2.<br><br>

        4. <strong>Operadores Lógicos</strong>:<br>
        - <strong>Descrição</strong>: Usados para combinar múltiplas condições.<br>
        - <strong>Exemplo</strong>: <code>$num == 2 || $num == 6</code> verifica se <code>$num</code> é igual a 2 ou 6.<br><br>

        5. <strong>Instrução Continue</strong>:<br>
        - <strong>Descrição</strong>: A instrução <code>continue</code> faz com que o loop pule a iteração atual e continue com a próxima.<br>
        - <strong>Exemplo</strong>: <code>if ($num == 2 || $num == 6) { continue; }</code> faz com que o loop pule as iterações onde <code>$num</code> é igual a 2 ou 6.<br>
    </p>
</body>
</html>