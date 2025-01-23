<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra o uso do loop <code>foreach</code> em PHP para iterar sobre arrays e executar um bloco de código para cada elemento do array.</p>

    <?php
    $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $item) {
        echo "$item ";
        if ($item == 'mesa') {
            echo "(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)";
        }
        echo '<br />';
    }
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Loop Foreach</strong>:<br>
        - <strong>Descrição</strong>: O loop <code>foreach</code> é usado para iterar sobre arrays. Ele percorre cada elemento do array e executa um bloco de código para cada elemento.<br>
        - <strong>Exemplo</strong>: <code>foreach ($itens as $item) { ... }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código para cada elemento do array <code>$itens</code>, exibindo o valor de cada elemento.<br><br>

        2. <strong>Condição Dentro do Loop</strong>:<br>
        - <strong>Descrição</strong>: Dentro do loop <code>foreach</code>, você pode usar condições para executar código específico para determinados elementos.<br>
        - <strong>Exemplo</strong>: <code>if ($item == 'mesa') { ... }</code><br>
        - <strong>Resultado</strong>: Se o elemento atual for 'mesa', exibe uma mensagem especial.<br><br>

        3. <strong>Função <code>print_r</code></strong>:<br>
        - <strong>Descrição</strong>: A função <code>print_r</code> exibe informações sobre uma variável de forma legível.<br>
        - <strong>Exemplo</strong>: <code>print_r($itens);</code><br>
        - <strong>Resultado</strong>: Exibe a estrutura completa do array <code>$itens</code>.<br>
    </p>
</body>
</html>