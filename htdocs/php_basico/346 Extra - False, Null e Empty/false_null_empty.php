<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Trabalhando com Valores Especiais em PHP</h1>
    <p>Este exemplo demonstra como usar as funções <code>is_null</code> e <code>empty</code> em PHP para verificar se variáveis possuem valores especiais como <code>null</code> ou estão vazias.</p>

    <?php
    // false (true/false) - tipo variável boolean
    // null e empty - valores especiais

    $funcionario1 = null; // somente pode ser null
    $funcionario2 = ''; // pode ser null ou vazio
    $funcionario3 = false; // pode ser false ou vazio

    // Verificando valores null
    echo "<h2>Verificando Valores Null</h2>";
    if (is_null($funcionario1)) { 
        echo 'Sim, a variável $funcionario1 é null';
    } else {
        echo 'Não, a variável $funcionario1 não é null';
    }
    echo '<br />';
    if (is_null($funcionario2)) { 
        echo 'Sim, a variável $funcionario2 é null';
    } else {
        echo 'Não, a variável $funcionario2 não é null';
    }
    echo '<hr />';

    // Verificando valores vazios
    echo "<h2>Verificando Valores Vazios</h2>";
    if (empty($funcionario1)) { 
        echo 'Sim, a variável $funcionario1 é vazia';
    } else {
        echo 'Não, a variável $funcionario1 não é vazia';
    }
    echo '<br />';
    if (empty($funcionario2)) { 
        echo 'Sim, a variável $funcionario2 é vazia';
    } else {
        echo 'Não, a variável $funcionario2 não é vazia';
    }
    echo '<br />';
    if (empty($funcionario3)) { 
        echo 'Sim, a variável $funcionario3 é vazia';
    } else {
        echo 'Não, a variável $funcionario3 não é vazia';
    }
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Função <code>is_null</code></strong>:<br>
        - <strong>Descrição</strong>: Verifica se uma variável é <code>null</code>.<br>
        - <strong>Exemplo</strong>: <code>is_null($funcionario1);</code><br>
        - <strong>Resultado</strong>: Retorna <code>true</code> se a variável for <code>null</code>, caso contrário, retorna <code>false</code>.<br><br>

        2. <strong>Função <code>empty</code></strong>:<br>
        - <strong>Descrição</strong>: Verifica se uma variável está vazia.<br>
        - <strong>Exemplo</strong>: <code>empty($funcionario2);</code><br>
        - <strong>Resultado</strong>: Retorna <code>true</code> se a variável estiver vazia ou contiver um valor considerado vazio (como <code>0</code>, <code>''</code>, <code>false</code>, <code>null</code>, etc.), caso contrário, retorna <code>false</code>.<br><br>

        3. <strong>Diferença entre <code>is_null</code> e <code>empty</code></strong>:<br>
        - <strong>is_null</strong>: Verifica especificamente se a variável é <code>null</code>.<br>
        - <strong>empty</strong>: Verifica se a variável está vazia ou contém um valor considerado vazio.<br>
    </p>
</body>
</html>