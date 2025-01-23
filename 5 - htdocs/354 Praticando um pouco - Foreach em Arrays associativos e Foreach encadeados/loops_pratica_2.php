<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Loops - Introdução</h1>
    <p>Este exemplo demonstra como iterar sobre arrays multidimensionais em PHP usando o loop <code>foreach</code> para acessar e exibir os valores de cada elemento do array.</p>

    <?php
    $funcionarios = array(
        array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => "06/03/1970"),
        array('nome' => 'Maria', 'salario' => 3000),
        array('nome' => 'Júlia', 'salario' => 2200)
    );

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach ($funcionarios as $idx => $nome_funcionario) {
        foreach ($nome_funcionario as $idx2 => $valor) {
            echo "$idx2 - $valor <br />";
        }
        echo "<hr />";
    }
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Array Multidimensional</strong>:<br>
        - <strong>Descrição</strong>: Um array que contém outros arrays como elementos.<br>
        - <strong>Exemplo</strong>: <code>$funcionarios = array(array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => "06/03/1970"), ...);</code><br>
        - <strong>Resultado</strong>: Um array de arrays, onde cada sub-array representa um funcionário com suas respectivas informações.<br><br>

        2. <strong>Função <code>print_r</code></strong>:<br>
        - <strong>Descrição</strong>: Exibe informações sobre uma variável de forma legível.<br>
        - <strong>Exemplo</strong>: <code>print_r($funcionarios);</code><br>
        - <strong>Resultado</strong>: Exibe a estrutura completa do array <code>$funcionarios</code>.<br><br>

        3. <strong>Loop Foreach</strong>:<br>
        - <strong>Descrição</strong>: Usado para iterar sobre arrays. Ele percorre cada elemento do array e executa um bloco de código para cada elemento.<br>
        - <strong>Exemplo</strong>: <code>foreach ($funcionarios as $idx => $nome_funcionario) { ... }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código para cada sub-array em <code>$funcionarios</code>, permitindo acessar e exibir os valores de cada elemento.<br><br>

        4. <strong>Loop Foreach Aninhado</strong>:<br>
        - <strong>Descrição</strong>: Um loop <code>foreach</code> dentro de outro loop <code>foreach</code> para iterar sobre arrays multidimensionais.<br>
        - <strong>Exemplo</strong>: <code>foreach ($nome_funcionario as $idx2 => $valor) { ... }</code><br>
        - <strong>Resultado</strong>: Executa o bloco de código para cada elemento dentro de cada sub-array, permitindo acessar e exibir os valores de cada chave e valor.<br>
    </p>
</body>
</html>