<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Curso de PHP</h1>
    <p>Este exemplo demonstra como criar funções em PHP para exibir mensagens e calcular a área de um terreno.</p>

    <?php
    // Função sem retorno (void)
    function exibirBoasVindas() {
        echo "Bem-vindo ao curso de PHP! <br />";
    }

    exibirBoasVindas();

    // Função com retorno
    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
    }

    echo calcularAreaTerreno(5, 25);
    echo '<br />';
    echo calcularAreaTerreno(15, 125);
    echo '<br />';
    echo calcularAreaTerreno(50, 250);
    echo '<br />';
    echo calcularAreaTerreno(5, 30);
    echo '<br />';

    // Atribuir a uma variável
    $resultado = calcularAreaTerreno(5, 25);
    echo "O valor da variável resultado é $resultado";
    ?>
</body>

</html>