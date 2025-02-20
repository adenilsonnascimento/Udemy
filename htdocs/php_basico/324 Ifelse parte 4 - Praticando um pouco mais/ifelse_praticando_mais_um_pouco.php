<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Trabalhando com Condições e Descontos em PHP</h1>
    <p>Este exemplo demonstra como utilizar condições para aplicar descontos em um pedido, verificando se o usuário possui um cartão da loja e se o valor da compra atinge um determinado limite.</p>

    <?php
    $usuario_possui_cartao_loja = true;
    $valor_compra = 99;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if ($usuario_possui_cartao_loja) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?
        <?php
        if ($recebeu_desconto_frete) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

    <h2>Informações Adicionais sobre Condições e Descontos em PHP</h2>
    <ul>
        <li><strong>Verificação de Condições:</strong> Utiliza-se a estrutura <code>if</code> para verificar se o usuário possui um cartão da loja e se o valor da compra é maior ou igual a 100.</li>
        <li><strong>Aplicação de Descontos:</strong> Se ambas as condições forem verdadeiras, o valor do frete é definido como 0 e uma variável de controle é atualizada para indicar que o desconto foi aplicado.</li>
        <li><strong>Exibição de Resultados:</strong> As informações sobre o pedido, incluindo se o desconto foi aplicado, são exibidas ao usuário.</li>
    </ul>

    <p>Utilizar condições para aplicar descontos é uma prática comum em PHP, permitindo a criação de lógica de negócios dinâmica e personalizada.</p>
</body>

</html>
