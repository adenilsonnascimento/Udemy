<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Funções de Pesquisa em Arrays em PHP</h1>
    <p>Este exemplo demonstra como usar as funções <code>in_array</code> e <code>array_search</code> em PHP para verificar a existência de valores em arrays e encontrar seus índices.</p>

    <?php
    // in_array() -> true ou false para a existência do que está sendo procurado
    // array_search() -> retorna o índice do valor pesquisado, caso ele exista

    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    // Verificar se um valor existe no array usando in_array
    $existe = in_array('Abacate', $lista_frutas); // true -> texto = 1 | false -> texto = vazio

    if ($existe) {
        echo 'Sim, o valor pesquisado existe no array';
    } else {
        echo 'Não, o valor pesquisado não existe no array';
    }

    echo '<hr />';

    // Encontrar o índice de um valor no array usando array_search
    $indice = array_search('Uva', $lista_frutas); // se não encontra nada, retorna null

    if ($indice !== false) {
        echo 'Sim, o valor pesquisado existe no array e seu índice é: ' . $indice;
    } else {
        echo 'Não, o valor pesquisado não existe no array';
    }

    echo '<hr />';

    // Arrays multidimensionais
    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
    ];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    // Verificar se um valor existe em um array multidimensional
    if (in_array('Uva', $lista_coisas['frutas'])) {
        echo 'Sim, o valor pesquisado existe no array de frutas';
    } else {
        echo 'Não, o valor pesquisado não existe no array de frutas';
    }
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Função <code>in_array</code></strong>:<br>
        - <strong>Descrição</strong>: Verifica se um valor existe em um array.<br>
        - <strong>Exemplo</strong>: <code>$existe = in_array('Abacate', $lista_frutas);</code><br>
        - <strong>Resultado</strong>: Retorna <code>true</code> se o valor existir no array, caso contrário, retorna <code>false</code>.<br><br>

        2. <strong>Função <code>array_search</code></strong>:<br>
        - <strong>Descrição</strong>: Procura um valor em um array e retorna o índice correspondente.<br>
        - <strong>Exemplo</strong>: <code>$indice = array_search('Uva', $lista_frutas);</code><br>
        - <strong>Resultado</strong>: Retorna o índice do valor se ele existir no array, caso contrário, retorna <code>null</code>.<br><br>

        3. <strong>Arrays Multidimensionais</strong>:<br>
        - <strong>Descrição</strong>: Arrays que contêm outros arrays como elementos.<br>
        - <strong>Exemplo</strong>: <code>$lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];</code><br>
        - <strong>Verificação em Arrays Multidimensionais</strong>: <code>in_array('Uva', $lista_coisas['frutas']);</code> verifica se 'Uva' existe no array de frutas dentro do array <code>$lista_coisas</code>.<br>
    </p>
</body>
</html>