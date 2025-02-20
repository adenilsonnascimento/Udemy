<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Exemplos de Uso de Comandos PHP</h1>
    <p>Este exemplo demonstra o uso dos comandos `echo` e `print` no PHP, explicando suas diferenças e funcionalidades.</p>

    <?php 
        echo 'Comando echo<br/>'; // Construtor da linguagem

        // print ("Comando print<hr/>"); // Era uma função
        echo print ("Comando print<hr/>"); // Retorna 1 se verdadeiro.
    ?>

    <h2>Informações Adicionais sobre PHP</h2>
    <ul>
        <li><strong>Comando echo:</strong> O comando <code>echo</code> é um construtor da linguagem PHP usado para exibir uma ou mais strings. Ele é mais rápido que <code>print</code> e não retorna nenhum valor.</li>
        <li><strong>Comando print:</strong> O comando <code>print</code> é uma função que exibe uma string e retorna 1 se for bem-sucedido. Ele é ligeiramente mais lento que <code>echo</code> devido ao retorno de valor.</li>
    </ul>

    <p>PHP é uma linguagem de script do lado do servidor amplamente utilizada para desenvolvimento web. Ela é especialmente adequada para desenvolvimento de páginas web dinâmicas e interativas.</p>
</body>

</html>
