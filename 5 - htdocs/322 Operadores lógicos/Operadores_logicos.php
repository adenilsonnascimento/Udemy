<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>

<body>
    <h1>Operadores Lógicos em PHP</h1>
    <p>Este exemplo demonstra o uso dos operadores lógicos em PHP, que são utilizados para combinar múltiplas condições em expressões condicionais.</p>

    <?php
        $idade = 25;
        $tem_habilitacao = true;

        // Operador AND (&&)
        if ($idade >= 18 && $tem_habilitacao) {
            echo "Você pode dirigir.";
        } else {
            echo "Você não pode dirigir.";
        }

        echo '<br/>';

        // Operador OR (||)
        if ($idade >= 18 || $tem_habilitacao) {
            echo "Você pode se inscrever para a habilitação.";
        } else {
            echo "Você não pode se inscrever para a habilitação.";
        }

        echo '<br/>';

        // Operador NOT (!)
        if (!$tem_habilitacao) {
            echo "Você precisa obter uma habilitação.";
        } else {
            echo "Você já tem uma habilitação.";
        }
    ?>

    <h2>Informações Adicionais sobre Operadores Lógicos em PHP</h2>
    <ul>
        <li><strong>AND (<code>&&</code>):</strong> Retorna verdadeiro se ambas as condições forem verdadeiras.</li>
        <li><strong>OR (<code>||</code>):</strong> Retorna verdadeiro se pelo menos uma das condições for verdadeira.</li>
        <li><strong>NOT (<code>!</code>):</strong> Inverte o valor lógico da condição.</li>
    </ul>

    <p>Os operadores lógicos são essenciais para criar expressões condicionais complexas em PHP, permitindo a combinação de múltiplas condições em um único teste lógico.</p>
</body>

</html>
