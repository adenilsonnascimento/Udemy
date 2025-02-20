<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de comparação (condicionais)</title>
</head>

<body>
    <h1>Operadores de Comparação em PHP</h1>
    <p>Este exemplo demonstra o uso dos operadores de comparação em PHP, que são utilizados para comparar valores e determinar a lógica condicional em um script.</p>

    <?php
        $a = 10;
        $b = 20;

        // Operador de igualdade
        if ($a == $b) {
            echo "A é igual a B<br/>";
        } else {
            echo "A não é igual a B<br/>";
        }

        // Operador de diferença
        if ($a != $b) {
            echo "A é diferente de B<br/>";
        } else {
            echo "A não é diferente de B<br/>";
        }

        // Operador de maior que
        if ($a > $b) {
            echo "A é maior que B<br/>";
        } else {
            echo "A não é maior que B<br/>";
        }

        // Operador de menor que
        if ($a < $b) {
            echo "A é menor que B<br/>";
        } else {
            echo "A não é menor que B<br/>";
        }

        // Operador de maior ou igual
        if ($a >= $b) {
            echo "A é maior ou igual a B<br/>";
        } else {
            echo "A não é maior ou igual a B<br/>";
        }

        // Operador de menor ou igual
        if ($a <= $b) {
            echo "A é menor ou igual a B<br/>";
        } else {
            echo "A não é menor ou igual a B<br/>";
        }
    ?>

    <h2>Informações Adicionais sobre Operadores de Comparação em PHP</h2>
    <ul>
        <li><strong>Igualdade (<code>==</code>):</strong> Verifica se dois valores são iguais.</li>
        <li><strong>Diferença (<code>!=</code>):</strong> Verifica se dois valores são diferentes.</li>
        <li><strong>Maior que (<code>></code>):</strong> Verifica se um valor é maior que outro.</li>
        <li><strong>Menor que (<code><</code>):</strong> Verifica se um valor é menor que outro.</li>
        <li><strong>Maior ou igual (<code>>=</code>):</strong> Verifica se um valor é maior ou igual a outro.</li>
        <li><strong>Menor ou igual (<code><=</code>):</strong> Verifica se um valor é menor ou igual a outro.</li>
    </ul>

    <p>Os operadores de comparação são fundamentais para a lógica condicional em PHP, permitindo a criação de scripts que respondem a diferentes condições e entradas.</p>
</body>

</html>
