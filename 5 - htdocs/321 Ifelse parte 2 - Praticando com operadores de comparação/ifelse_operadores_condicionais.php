<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Operadores de Comparação em PHP</h1>
    <p>Este exemplo demonstra o uso dos operadores de comparação em PHP, que são utilizados para comparar valores e determinar a lógica condicional em um script.</p>

    <?php
        // == -> 2 == 2
        // === -> são iguais e do mesmo tipo?
        // != ou <> -> 'x' != 'y' ou 5 <> 6 (5 é diferente de 6?)
        // !== -> são diferentes e de tipos diferentes?
        // < -> 2 < 18 (2 é menor que 18?)
        if (2 === 2) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
    ?>

    <h2>Informações Adicionais sobre Operadores de Comparação em PHP</h2>
    <ul>
        <li><strong>Igualdade (<code>==</code>):</strong> Verifica se dois valores são iguais.</li>
        <li><strong>Identidade (<code>===</code>):</strong> Verifica se dois valores são iguais e do mesmo tipo.</li>
        <li><strong>Diferença (<code>!=</code> ou <code><></code>):</strong> Verifica se dois valores são diferentes.</li>
        <li><strong>Não idêntico (<code>!==</code>):</strong> Verifica se dois valores são diferentes ou de tipos diferentes.</li>
        <li><strong>Menor que (<code><</code>):</strong> Verifica se um valor é menor que outro.</li>
    </ul>

    <p>Os operadores de comparação são fundamentais para a lógica condicional em PHP, permitindo a criação de scripts que respondem a diferentes condições e entradas.</p>
</body>


</html>