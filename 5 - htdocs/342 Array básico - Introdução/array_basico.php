<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Array Básico - Introdução</h1>
    <p>Este exemplo demonstra como criar e manipular arrays em PHP. Arrays são estruturas de dados que permitem armazenar múltiplos valores em uma única variável.</p>

    <?php
    // Definindo um array simples
    $frutas = array("Maçã", "Banana", "Laranja");

    // Exibindo o array
    echo "<h2>Exemplo de Array</h2>";
    echo "<p>Array de Frutas:</p>";
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";

    // Adicionando um novo elemento ao array
    $frutas[] = "Manga";
    echo "<p>Array de Frutas após adicionar 'Manga':</p>";
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";

    // Acessando um elemento específico do array
    echo "<p>A primeira fruta no array é: " . $frutas[0] . "</p>";
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Definindo um Array</strong>:<br>
        - <strong>Função</strong>: <code>$frutas = array("Maçã", "Banana", "Laranja");</code><br>
        - <strong>Descrição</strong>: Cria um array chamado <code>$frutas</code> com três elementos: "Maçã", "Banana" e "Laranja".<br><br>

        2. <strong>Exibindo o Array</strong>:<br>
        - <strong>Função</strong>: <code>foreach ($frutas as $fruta) { echo "<li>$fruta</li>"; }</code><br>
        - <strong>Descrição</strong>: Itera sobre cada elemento do array <code>$frutas</code> e exibe cada fruta em uma lista não ordenada.<br><br>

        3. <strong>Adicionando um Novo Elemento ao Array</strong>:<br>
        - <strong>Função</strong>: <code>$frutas[] = "Manga";</code><br>
        - <strong>Descrição</strong>: Adiciona a fruta "Manga" ao final do array <code>$frutas</code>.<br><br>

        4. <strong>Acessando um Elemento Específico do Array</strong>:<br>
        - <strong>Função</strong>: <code>$frutas[0]</code><br>
        - <strong>Descrição</strong>: Acessa o primeiro elemento do array <code>$frutas</code>, que é "Maçã".<br>
    </p>
</body>
</html>