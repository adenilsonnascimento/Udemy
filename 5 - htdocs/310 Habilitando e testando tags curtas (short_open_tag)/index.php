<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Exemplos de Uso de Tags PHP</h1>
    <p>Este exemplo demonstra o uso das tags padrão, de impressão e curta do PHP.</p>

    <?php
        // Tag padrão do PHP
        echo 'Utilizando a tag padrão';
    ?>
    <br/>
    <?= 'Utilizando a tag impressão' // Tag de impressão do PHP ?>
    <br/>
    <?php echo 'Utilizando a tag curta'; // Tag curta do PHP (não recomendada) ?>

    <h2>Informações Adicionais sobre PHP</h2>
    <ul>
        <li><strong>Tag Padrão:</strong> A tag padrão <code>&lt;?php ... ?&gt;</code> é a forma mais comum de inserir código PHP em um arquivo. Tudo o que estiver dentro dessas tags será interpretado como código PHP.</li>
        <li><strong>Tag de Impressão:</strong> A tag de impressão <code>&lt;?= ... ?&gt;</code> é uma forma abreviada de <code>&lt;?php echo ... ?&gt;</code> e é usada para imprimir valores diretamente.</li>
        <li><strong>Tag Curta:</strong> A tag curta <code>&lt;? ... ?&gt;</code> é uma forma abreviada de inserir código PHP, mas não é recomendada devido a problemas de compatibilidade.</li>
    </ul>

    <p>PHP é uma linguagem de script do lado do servidor amplamente utilizada para desenvolvimento web. Ela é especialmente adequada para desenvolvimento de páginas web dinâmicas e interativas.</p>
</body>

</html>
```
