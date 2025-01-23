<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando valores de variáveis</title>
</head>

<body>
    <h1>Alterando Valores de Variáveis em PHP</h1>
    <p>Este exemplo demonstra como alterar os valores de variáveis em PHP, mostrando a flexibilidade da linguagem ao trabalhar com diferentes tipos de dados.</p>

    <?php
        // Declaração de variáveis
        $nome = 'Maria';
        $idade = 28;
        $peso = 65.0;
        $fumante_sn = false;

        // Exibindo valores iniciais das variáveis
        echo "Nome: $nome<br/>";
        echo "Idade: $idade anos<br/>";
        echo "Peso: $peso kg<br/>";
        echo "Fumante: " . ($fumante_sn ? 'Sim' : 'Não') . "<br/>";

        // Alterando valores das variáveis
        $nome = 'Ana';
        $idade = 30;
        $peso = 62.5;
        $fumante_sn = true;

        // Exibindo valores alterados das variáveis
        echo "<hr/>";
        echo "Nome: $nome<br/>";
        echo "Idade: $idade anos<br/>";
        echo "Peso: $peso kg<br/>";
        echo "Fumante: " . ($fumante_sn ? 'Sim' : 'Não') . "<br/>";
    ?>

    <h2>Informações Adicionais sobre Variáveis em PHP</h2>
    <ul>
        <li><strong>Flexibilidade:</strong> Em PHP, as variáveis podem ter seus valores alterados a qualquer momento, permitindo a manipulação dinâmica de dados.</li>
        <li><strong>Tipos de Dados:</strong> PHP permite a alteração de tipos de dados de uma variável, como de string para inteiro, sem necessidade de declaração explícita.</li>
        <li><strong>Interpolação de Strings:</strong> Variáveis podem ser interpoladas dentro de strings usando aspas duplas (<code>"</code>), facilitando a exibição de seus valores.</li>
    </ul>

    <p>Alterar valores de variáveis é uma prática comum em PHP, permitindo a criação de scripts dinâmicos e interativos que respondem a diferentes condições e entradas.</p>
</body>

</html>
