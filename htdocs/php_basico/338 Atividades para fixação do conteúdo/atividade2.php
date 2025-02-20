
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Atividade 2</h1>

    <p>
        Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.
        Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo:
    </p>

    <table>
        <thead>
            <tr>
                <th>Base de Cálculo (R$)</th>
                <th>Alíquota (%)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Até 1.903,98</td>
                <td>Isento</td>
            </tr>
            <tr>
                <td>De 1.903,99 até 2.826,65</td>
                <td>7,5</td>
            </tr>
            <tr>
                <td>De 2.826,66 até 3.751,05</td>
                <td>15</td>
            </tr>
            <tr>
                <td>De 3.751,06 até 4.664,68</td>
                <td>22,5</td>
            </tr>
            <tr>
                <td>Acima de 4.664,68</td>
                <td>27,5</td>
            </tr>
        </tbody>
    </table>

    <?php
    function calcularImpostoRenda($salario) {
        if ($salario <= 1903.98) {
            return 0;
        } elseif ($salario <= 2826.65) {
            return ($salario - 1903.98) * 0.075;
        } elseif ($salario <= 3751.05) {
            return ($salario - 2826.65) * 0.15 + (2826.65 - 1903.98) * 0.075;
        } elseif ($salario <= 4664.68) {
            return ($salario - 3751.05) * 0.225 + (3751.05 - 2826.65) * 0.15 + (2826.65 - 1903.98) * 0.075;
        } else {
            return ($salario - 4664.68) * 0.275 + (4664.68 - 3751.05) * 0.225 + (3751.05 - 2826.65) * 0.15 + (2826.65 - 1903.98) * 0.075;
        }
    }

    // Exemplo de uso da função
    $salario = 5000;
    $imposto = calcularImpostoRenda($salario);
    echo "<p>O imposto de renda para um salário de R$ $salario é R$ " . number_format($imposto, 2, ',', '.') . "</p>";
    ?>
</body>
</html>
