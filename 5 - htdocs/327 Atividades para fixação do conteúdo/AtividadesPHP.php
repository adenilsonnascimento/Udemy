Aqui está o código atualizado para HTML5, com a lógica de verificação de requisitos para doação de sangue e uma explicação sobre o processo:

```html
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Atividade 01</h1>

    <p>
        Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis <code>$idade</code> e <code>$peso</code> no processo. Neste primeiro momento faça a atribuição de valores às variáveis de forma estática, ou seja, no processo de atribuição.
    </p>

    <p>
        Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos".
    </p>

    <?php
        $idade = 19;
        $peso = 72;

        // Verificação dos requisitos para doação de sangue
        $mensagem = ($idade >= 16 && $idade <= 69 && $peso >= 50) ? "Atende aos requisitos" : "Não atende aos requisitos";
        echo $mensagem;
    ?>

    <h2>Informações Adicionais sobre a Verificação de Requisitos</h2>
    <ul>
        <li><strong>Idade:</strong> A idade deve estar entre 16 e 69 anos, inclusive.</li>
        <li><strong>Peso:</strong> O peso deve ser igual ou superior a 50kg.</li>
        <li><strong>Operador Ternário:</strong> Utilizamos o operador ternário <code>condição ? valor_se_verdadeiro : valor_se_falso</code> para simplificar a verificação dos requisitos.</li>
    </ul>

    <p>Esta aplicação simples demonstra como utilizar condições e operadores ternários em PHP para verificar se uma pessoa atende aos requisitos para doação de sangue.</p>
</body>

</html>
```

Se precisar de mais alguma coisa, é só avisar!