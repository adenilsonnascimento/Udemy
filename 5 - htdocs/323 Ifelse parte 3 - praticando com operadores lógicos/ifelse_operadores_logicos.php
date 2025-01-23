<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Operadores Lógicos e Condicionais em PHP</h1>
    <p>Este exemplo demonstra o uso dos operadores lógicos e condicionais em PHP, que são utilizados para comparar valores e determinar a lógica condicional em um script.</p>

    <?php
    // operadores condicionais
    // == -> igualdade
    // === -> igualdade e mesmo tipo
    // != ou <> -> diferença
    // !== -> diferença e tipos diferentes
    // < -> menor que
    // > -> maior que
    // <= -> menor ou igual
    // >= -> maior ou igual

    // && -> AND lógico
    // 5 == 3 && 10 > 3 (cai no else)
    // 3 == 3 && 10 > 3 (cai no if)
    
    // OR ou || -> OR lógico
    // 5 == 3 || 10 > 3 (cai no if)
    // 3 == 4 || 10 > 15 (cai no else)

    // XOR -> retorna true se uma das expressões for verdadeira e a outra for falsa
    // 4 == 4 XOR 10 > 15 (cai no if) - V F
    // 7 <= 4 XOR 10 > 15 (cai no else) - F F
    // 7 >= 4 XOR 10 < 15 (cai no else) - V V

    // ! -> NOT lógico, inverte o resultado retornado pela expressão
    // !('a' == 'b') - cai no if
    // !('a' == 'a') - cai no else

    // () -> estabelecer precedência
    // ((22 == 22 && 3 == 3) || 5 != 5) - cai no if
    if (22 == 22 && 3 == 3 && 5 != 5) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }
    ?>

    <h2>Informações Adicionais sobre Operadores Lógicos e Condicionais em PHP</h2>
    <ul>
        <li><strong>Igualdade (<code>==</code>):</strong> Verifica se dois valores são iguais.</li>
        <li><strong>Identidade (<code>===</code>):</strong> Verifica se dois valores são iguais e do mesmo tipo.</li>
        <li><strong>Diferença (<code>!=</code> ou <code><></code>):</strong> Verifica se dois valores são diferentes.</li>
        <li><strong>Não idêntico (<code>!==</code>):</strong> Verifica se dois valores são diferentes ou de tipos diferentes.</li>
        <li><strong>Menor que (<code><</code>):</strong> Verifica se um valor é menor que outro.</li>
        <li><strong>Maior que (<code>></code>):</strong> Verifica se um valor é maior que outro.</li>
        <li><strong>Menor ou igual (<code><=</code>):</strong> Verifica se um valor é menor ou igual a outro.</li>
        <li><strong>Maior ou igual (<code>>=</code>):</strong> Verifica se um valor é maior ou igual a outro.</li>
        <li><strong>AND (<code>&&</code>):</strong> Retorna verdadeiro se ambas as condições forem verdadeiras.</li>
        <li><strong>OR (<code>||</code>):</strong> Retorna verdadeiro se pelo menos uma das condições for verdadeira.</li>
        <li><strong>XOR:</strong> Retorna verdadeiro se uma das expressões for verdadeira e a outra for falsa.</li>
        <li><strong>NOT (<code>!</code>):</strong> Inverte o valor lógico da condição.</li>
    </ul>

    <p>Os operadores lógicos e condicionais são fundamentais para a lógica condicional em PHP, permitindo a criação de scripts que respondem a diferentes condições e entradas.</p>
</body>

</html>
