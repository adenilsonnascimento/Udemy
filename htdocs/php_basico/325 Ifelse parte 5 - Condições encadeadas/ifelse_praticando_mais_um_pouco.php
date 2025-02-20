<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Trabalhando com Condições e Descontos em PHP</h1>
    <p>Este exemplo demonstra como utilizar condições para aplicar descontos em um pedido, verificando se o usuário possui um cartão da loja e se o valor da compra atinge determinados limites.</p>

    <?php
    $usuario_possui_cartao_loja = true;
    $valor_compra = 250;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;

    if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
        $valor_frete = 0;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 300) {
        $valor_frete = 10;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
        $valor_frete = 25;
    } else {
        $recebeu_desconto_frete = false;
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
        <li><strong>Verificação de Condições:</strong> Utiliza-se a estrutura <code>if</code> e <code>else if</code> para verificar se o usuário possui um cartão da loja e se o valor da compra atinge determinados limites.</li>
        <li><strong>Aplicação de Descontos:</strong> Dependendo do valor da compra, diferentes descontos no frete são aplicados. Se o valor for maior ou igual a 400, o frete é gratuito; se for maior ou igual a 300, o frete custa 10; se for maior ou igual a 100, o frete custa 25.</li>
        <li><strong>Exibição de Resultados:</strong> As informações sobre o pedido, incluindo se o desconto foi aplicado, são exibidas ao usuário.</li>
    </ul>

    <p>Utilizar condições para aplicar descontos é uma prática comum em PHP, permitindo a criação de lógica de negócios dinâmica e personalizada.</p>
</body>

</html>
