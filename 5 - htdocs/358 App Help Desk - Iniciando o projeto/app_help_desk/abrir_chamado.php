<?php
// Inicia a sessão para armazenar dados entre requisições
session_start();

// Verifica se já existe um array de chamados na sessão
// Se não existir, inicializa um array vazio para armazenar os chamados
if (!isset($_SESSION['chamados'])) {
    $_SESSION['chamados'] = [];
}

// Verifica se o formulário foi submetido via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores enviados pelo formulário
    // O operador ?? evita erro caso o campo não tenha sido preenchido
    $titulo = $_POST['titulo'] ?? ''; // Obtém o título do chamado
    $categoria = $_POST['categoria'] ?? ''; // Obtém a categoria do chamado
    $descricao = $_POST['descricao'] ?? ''; // Obtém a descrição do chamado

    // Cria um array associativo representando o chamado
    $chamado = [
        'titulo' => $titulo,
        'categoria' => $categoria,
        'descricao' => $descricao
    ];

    // Adiciona o chamado ao array de chamados na sessão
    $_SESSION['chamados'][] = $chamado;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .card-abrir-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<!-- Barra de navegação com nome do sistema -->
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
    </a>
</nav>

<div class="container">
    <div class="row">
        <div class="card-abrir-chamado">
            <div class="card">
                <div class="card-header">
                    Abertura de chamado
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <!-- Formulário de abertura de chamado -->
                            <form method="POST">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" name="titulo" placeholder="Título" required>
                                </div>

                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control" name="categoria">
                                        <option>Criação Usuário</option>
                                        <option>Impressora</option>
                                        <option>Hardware</option>
                                        <option>Software</option>
                                        <option>Rede</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="descricao" rows="3" required></textarea>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-6">
                                        <a href="index.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                                    </div>

                                    <div class="col-6">
                                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                    </div>
                                </div>
                            </form>

                            <!-- Exibição dos chamados cadastrados -->
                            <h3 class="mt-4">Chamados Abertos</h3>
                            <ul class="list-group">
                                <?php 
                                // Percorre o array de chamados armazenados na sessão
                                foreach ($_SESSION['chamados'] as $c) : ?>
                                    <li class="list-group-item">
                                        <!-- Exibe o título do chamado, escapando caracteres especiais para evitar ataques XSS -->
                                        <strong><?php echo htmlspecialchars($c['titulo']); ?></strong><br>
                                        <!-- Exibe a categoria do chamado -->
                                        <em><?php echo htmlspecialchars($c['categoria']); ?></em><br>
                                        <!-- Exibe a descrição, convertendo quebras de linha para <br> e escapando caracteres especiais -->
                                        <?php echo nl2br(htmlspecialchars($c['descricao'])); ?>
                                    </li>
                                <?php endforeach; // Finaliza o loop foreach ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
