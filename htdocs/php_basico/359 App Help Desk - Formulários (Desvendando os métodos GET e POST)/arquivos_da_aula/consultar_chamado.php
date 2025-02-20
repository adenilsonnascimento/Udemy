<!DOCTYPE html>
<html>
<head>
    <!-- Define a codificação de caracteres para suportar acentuação e caracteres especiais -->
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!-- Importa o framework CSS Bootstrap para estilização e responsividade -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">

    <style>
        /* Define a estilização do card onde os chamados serão exibidos */
        .card-consultar-chamado {
            padding: 30px 0 0 0; /* Adiciona espaçamento superior */
            width: 100%; /* Define a largura total do elemento */
            margin: 0 auto; /* Centraliza o elemento na tela */
        }
    </style>
</head>

<body>

    <!-- Barra de navegação escura -->
    <nav class="navbar navbar-dark bg-dark">
        <!-- Link do logo do sistema -->
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container">    
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <!-- Cabeçalho do card -->
                    <div class="card-header">
                        Consulta de chamado
                    </div>
                    
                    <div class="card-body">
                        <!-- Exemplo de chamado 1 -->
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Título do chamado...</h5> <!-- Título do chamado -->
                                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6> <!-- Categoria do chamado -->
                                <p class="card-text">Descrição do chamado...</p> <!-- Descrição do chamado -->
                            </div>
                        </div>

                        <!-- Exemplo de chamado 2 -->
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Título do chamado...</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                                <p class="card-text">Descrição do chamado...</p>
                            </div>
                        </div>

                        <!-- Botão para voltar -->
                        <div class="row mt-5">
                            <div class="col-6">
                                <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                            </div>
                        </div>
                    </div> <!-- Fim do corpo do card -->
                </div> <!-- Fim do card -->
            </div> <!-- Fim do card-consultar-chamado -->
        </div> <!-- Fim da linha -->
    </div> <!-- Fim do container -->
    
</body>
</html>
