<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Funções de Array em PHP</h1>
    <p>Este exemplo demonstra várias funções úteis para manipulação de arrays em PHP, como verificação de tipo, obtenção de chaves, ordenação, contagem de elementos, fusão de arrays, e manipulação de strings.</p>

    <?php
    // is_array -> verifica se o parâmetro passado é um array (true/false)
    $array = array('notebook', 'teclado');
    $retorno = is_array($array);

    if ($retorno) {
        echo 'Sim, é um array';
    } else {
        echo 'Não, não é um array';
    }
    echo '<hr />';

    // array_keys -> retorna todas as chaves de um array, armazenando em um novo array
    $array = [1 => 'a', 2 => 'b', 18 => 'c'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array);
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>';
    echo '<hr />';

    // sort -> ordena o array e reajusta os índices
    $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    sort($array); // true ou false
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    echo '<hr />';

    // asort -> ordena o array preservando os índices
    $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    asort($array); // true ou false
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    echo '<hr />';

    // count -> retorna um inteiro com a quantidade de elementos
    $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');
    echo '<pre>';
    print_r($array);
    echo count($array);
    echo '</pre>';
    echo '<hr />';

    // array_merge -> permite fundir vários arrays em um só
    $array1 = ['osx', 'windows'];
    $array2 = array('linux');
    $array3 = ['solaris'];

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r($novo_array);
    echo '</pre>';
    echo '<hr />';

    // explode -> divide uma string baseada em um delimitador
    $string = '26/04/2018';
    $array_retorno = explode('/', $string);
    echo '<pre>';
    echo $string;
    print_r($array_retorno);
    echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
    echo '</pre>';
    echo '<hr />';

    // implode -> junta os elementos de um array em uma string
    $array = ['a', 'b', 'x', 'y'];
    $string_retorno = implode('-', $array);
    echo $string_retorno;
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Função <code>is_array</code></strong>:<br>
        - <strong>Descrição</strong>: Verifica se o parâmetro passado é um array.<br>
        - <strong>Exemplo</strong>: <code>is_array($array);</code><br>
        - <strong>Resultado</strong>: Retorna <code>true</code> se for um array, caso contrário, retorna <code>false</code>.<br><br>

        2. <strong>Função <code>array_keys</code></strong>:<br>
        - <strong>Descrição</strong>: Retorna todas as chaves de um array, armazenando-as em um novo array.<br>
        - <strong>Exemplo</strong>: <code>array_keys($array);</code><br>
        - <strong>Resultado</strong>: Um array contendo todas as chaves do array original.<br><br>

        3. <strong>Função <code>sort</code></strong>:<br>
        - <strong>Descrição</strong>: Ordena o array e reajusta os índices.<br>
        - <strong>Exemplo</strong>: <code>sort($array);</code><br>
        - <strong>Resultado</strong>: O array ordenado com índices reajustados.<br><br>

        4. <strong>Função <code>asort</code></strong>:<br>
        - <strong>Descrição</strong>: Ordena o array preservando os índices.<br>
        - <strong>Exemplo</strong>: <code>asort($array);</code><br>
        - <strong>Resultado</strong>: O array ordenado com índices preservados.<br><br>

        5. <strong>Função <code>count</code></strong>:<br>
        - <strong>Descrição</strong>: Retorna um inteiro com a quantidade de elementos no array.<br>
        - <strong>Exemplo</strong>: <code>count($array);</code><br>
        - <strong>Resultado</strong>: A quantidade de elementos no array.<br><br>

        6. <strong>Função <code>array_merge</code></strong>:<br>
        - <strong>Descrição</strong>: Permite fundir vários arrays em um só.<br>
        - <strong>Exemplo</strong>: <code>array_merge($array1, $array2, $array3);</code><br>
        - <strong>Resultado</strong>: Um novo array contendo os elementos de todos os arrays mesclados.<br><br>

        7. <strong>Função <code>explode</code></strong>:<br>
        - <strong>Descrição</strong>: Divide uma string baseada em um delimitador.<br>
        - <strong>Exemplo</strong>: <code>explode('/', $string);</code><br>
        - <strong>Resultado</strong>: Um array contendo as partes da string dividida.<br><br>

        8. <strong>Função <code>implode</code></strong>:<br>
        - <strong>Descrição</strong>: Junta os elementos de um array em uma string.<br>
        - <strong>Exemplo</strong>: <code>implode('-', $array);</code><br>
        - <strong>Resultado</strong>: Uma string contendo os elementos do array separados pelo delimitador especificado.<br>
    </p>
</body>
</html>