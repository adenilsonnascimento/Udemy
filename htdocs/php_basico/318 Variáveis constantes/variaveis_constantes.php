<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Trabalhando com Variáveis Constantes em PHP</h1>
    <p>Este exemplo demonstra como declarar e utilizar variáveis constantes em PHP, que são valores imutáveis definidos uma vez e não podem ser alterados durante a execução do script.</p>

    <?php
        // variáveis constantes
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_bd_dev');
        define('BD_SENHA', 'senha_bd_dev');

        // ... lógica ...

        // define('BD_URL', 'endereco_bd_prod'); // não será permitido alterar, já que é uma variável constante  

        echo BD_URL . '<br/>';
        echo BD_USUARIO . '<br/>';
        echo BD_SENHA . '<br/>';
    ?>

    <h2>Informações Adicionais sobre Variáveis Constantes em PHP</h2>
    <ul>
        <li><strong>Definição:</strong> Constantes são definidas usando a função <code>define()</code> e não podem ser alteradas ou redefinidas após a sua declaração.</li>
        <li><strong>Imutabilidade:</strong> Uma vez definidas, as constantes mantêm seus valores durante toda a execução do script, garantindo consistência.</li>
        <li><strong>Uso:</strong> Constantes são frequentemente usadas para armazenar informações que não devem mudar, como configurações de banco de dados, URLs, e outras configurações globais.</li>
    </ul>

    <p>O uso de variáveis constantes é essencial para garantir que certos valores permaneçam imutáveis, proporcionando maior segurança e previsibilidade ao código.</p>
</body>

</html>
