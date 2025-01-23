<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Trabalhando com Operador Ternário em PHP</h1>
    <p>Este exemplo demonstra como utilizar o operador ternário em PHP para simplificar expressões condicionais.</p>

    <?php
    $usuario_possui_cartao_loja = true;
    $valor_compra = 50;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;

    $valor_frete = ($usuario_possui_cartao_loja && $valor_compra >= 400) ? 0 :
                   (($usuario_possui_cartao_loja && $valor_compra >= 300) ? 10 :
                   (($usuario_possui_cartao_loja && $valor_compra >= 100) ? 25 : $valor_frete));

    $recebeu_desconto_frete = ($usuario_possui_cartao_loja && $valor_compra >= 100) ? true : false;
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?></p>
    <p>Valor da compra: <?= $valor_compra ?></p>
    <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?></p>
    <p>Valor do frete: <?= $valor_frete ?></p>

    <h2>Informações Adicionais sobre o Operador Ternário em PHP</h2>
    <ul>
        <li><strong>Operador Ternário:</strong> O operador ternário é uma forma abreviada de escrever uma expressão condicional. Ele utiliza a sintaxe <code>condição ? valor_se_verdadeiro : valor_se_falso</code>.</li>
        <li><strong>Uso:</strong> É útil para simplificar expressões condicionais curtas, tornando o código mais conciso e legível.</li>
    </ul>

    <p>O operador ternário é uma ferramenta poderosa em PHP para simplificar a lógica condicional, especialmente em casos onde as condições são simples e diretas.</p>
</body>

</html>
