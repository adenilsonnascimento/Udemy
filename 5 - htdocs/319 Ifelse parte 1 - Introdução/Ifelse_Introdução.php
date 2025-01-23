<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If/else - Introdução</title>
</head>

<body>
    <h1>Introdução às Estruturas Condicionais If/Else em PHP</h1>
    <p>Este exemplo demonstra o uso das estruturas condicionais if/else em PHP, que permitem a execução de diferentes blocos de código com base em condições específicas.</p>

    <?php
        $idade = 20;

        if ($idade >= 18) {
            echo "Você é maior de idade.";
        } else {
            echo "Você é menor de idade.";
        }
    ?>

    <h2>Informações Adicionais sobre If/Else em PHP</h2>
    <ul>
        <li><strong>If:</strong> A estrutura <code>if</code> avalia uma condição e executa o bloco de código associado se a condição for verdadeira.</li>
        <li><strong>Else:</strong> A estrutura <code>else</code> é opcional e executa o bloco de código associado se a condição do <code>if</code> for falsa.</li>
        <li><strong>Elseif:</strong> A estrutura <code>elseif</code> pode ser usada para avaliar múltiplas condições em sequência.</li>
    </ul>

    <p>Estruturas condicionais são fundamentais para controlar o fluxo de execução de um script PHP, permitindo a criação de lógica complexa e interativa.</p>
</body>

</html>
