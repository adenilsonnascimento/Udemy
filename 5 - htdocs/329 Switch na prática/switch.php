<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Trabalhando com Switch Case em PHP</h1>
    <p>Este exemplo demonstra como utilizar a estrutura `switch case` em PHP para executar diferentes blocos de código com base no valor de uma variável.</p>

    <?php
    $parametro = 'abc';
    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;

        case 'abc':
            echo 'Entrou no case 2';
            break;

        case false:
            echo 'Entrou no case 3';
            break;

        default:
            echo 'Entrou no default';
            break;
    }
    ?>

    <h2>Informações Adicionais sobre Switch Case em PHP</h2>
    <ul>
        <li><strong>Estrutura:</strong> O `switch` avalia a expressão fornecida e executa o bloco de código correspondente ao primeiro `case` que corresponde ao valor da expressão.</li>
        <li><strong>Break:</strong> Cada `case` geralmente termina com a instrução `break` para evitar a execução dos blocos subsequentes.</li>
        <li><strong>Default:</strong> A cláusula `default` é opcional e executa um bloco de código se nenhum dos `case` corresponder ao valor da expressão.</li>
    </ul>

    <p>O `switch case` é útil para simplificar o código quando se precisa comparar a mesma variável com múltiplos valores, tornando o código mais legível e organizado.</p>
</body>

</html>
