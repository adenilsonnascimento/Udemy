<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Atividade 3</h1>
    <p>Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da Mega Sena. Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos.</p>

    <?php
    $numeros = [];

    while (count($numeros) < 6) {
        $numero = rand(1, 60);
        if (!in_array($numero, $numeros)) {
            $numeros[] = $numero;
        }
    }

    echo '<h2>Números Sorteados:</h2>';
    echo '<ul>';
    foreach ($numeros as $numero) {
        echo "<li>$numero</li>";
    }
    echo '</ul>';
    ?>
</body>
</html>