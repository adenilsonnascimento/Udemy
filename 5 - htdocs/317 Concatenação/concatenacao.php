<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Concatenando Strings e Usando Variáveis em PHP</h1>
    <p>Este exemplo demonstra como concatenar strings e usar variáveis dentro de strings em PHP, utilizando tanto o operador de concatenação quanto a interpolação de strings.</p>

    <?php
    $nome = 'Maria';
    $cor = 'amarelo';
    $idade = 25;
    $atividade_preferida = 'andar de bicicleta';

    // operador .
    echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e gosta de ' . $atividade_preferida;

    // aspas duplas
    echo '<br/>';

    echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e gosta de $atividade_preferida";
    ?>

    <h2>Informações Adicionais sobre Strings em PHP</h2>
    <ul>
        <li><strong>Operador de Concatenação:</strong> O operador <code>.</code> é usado para concatenar duas ou mais strings em PHP.</li>
        <li><strong>Interpolação de Strings:</strong> Quando se usa aspas duplas (<code>"</code>), variáveis dentro da string são automaticamente substituídas por seus valores.</li>
    </ul>

    <p>Concatenar strings e usar variáveis dentro de strings são práticas comuns em PHP, permitindo a criação de mensagens dinâmicas e personalizadas.</p>
</body>

</html>
