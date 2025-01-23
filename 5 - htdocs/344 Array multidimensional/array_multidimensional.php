<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Arrays Multidimensionais em PHP</h1>
    <p>Este exemplo demonstra como criar e manipular arrays multidimensionais em PHP. Arrays multidimensionais são arrays que contêm outros arrays como elementos, permitindo a criação de estruturas de dados mais complexas.</p>

    <?php
    // Definindo um array multidimensional
    $lista_coisas = [];

    $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
    $lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];

    // Exibindo o array multidimensional
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo '<hr/>';

    // Acessando elementos específicos do array multidimensional
    echo "A terceira fruta é: " . $lista_coisas['frutas'][3] . "<br />";
    echo "A segunda pessoa é: " . $lista_coisas['pessoas'][2] . "<br />";
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Definindo um Array Multidimensional</strong>:<br>
        - <strong>Função</strong>: <code>$lista_coisas = [];</code><br>
        - <strong>Descrição</strong>: Cria um array vazio chamado <code>$lista_coisas</code>.<br><br>

        2. <strong>Adicionando Arrays ao Array Multidimensional</strong>:<br>
        - <strong>Função</strong>: <code>$lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');</code><br>
        - <strong>Descrição</strong>: Adiciona um array de frutas ao array <code>$lista_coisas</code> com índices numéricos.<br>
        - <strong>Função</strong>: <code>$lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];</code><br>
        - <strong>Descrição</strong>: Adiciona um array de pessoas ao array <code>$lista_coisas</code> com índices numéricos.<br><br>

        3. <strong>Exibindo o Array Multidimensional</strong>:<br>
        - <strong>Função</strong>: <code>print_r($lista_coisas);</code><br>
        - <strong>Descrição</strong>: Exibe a estrutura completa do array multidimensional <code>$lista_coisas</code>.<br><br>

        4. <strong>Acessando Elementos Específicos do Array Multidimensional</strong>:<br>
        - <strong>Função</strong>: <code>$lista_coisas['frutas'][3]</code><br>
        - <strong>Descrição</strong>: Acessa o terceiro elemento do array <code>frutas</code> dentro do array <code>$lista_coisas</code>, que é "Morango".<br>
        - <strong>Função</strong>: <code>$lista_coisas['pessoas'][2]</code><br>
        - <strong>Descrição</strong>: Acessa o segundo elemento do array <code>pessoas</code> dentro do array <code>$lista_coisas</code>, que é "José".<br>
    </p>
</body>
</html>