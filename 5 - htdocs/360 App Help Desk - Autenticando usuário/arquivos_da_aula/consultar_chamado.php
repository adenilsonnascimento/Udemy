<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!-- Inclusão do Bootstrap 4 para estilização do layout -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      /* Estilo customizado para o card de consulta de chamado */
      .card-consultar-chamado {
        padding: 30px 0 0 0; /* Padding ajustado para o topo */
        width: 100%; /* Largura total */
        margin: 0 auto; /* Centraliza o card */
      }
    </style>
  </head>

  <body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <!-- Container principal do layout -->
    <div class="container">    
      <div class="row">

        <!-- Card que contém o conteúdo da consulta de chamados -->
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado <!-- Título do card -->
            </div>
            
            <div class="card-body">
              <!-- Card para cada chamado -->
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5> <!-- Título do chamado -->
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6> <!-- Categoria do chamado -->
                  <p class="card-text">Descrição do chamado...</p> <!-- Descrição do chamado -->
                </div>
              </div>

              <!-- Outro card para outro chamado -->
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5> <!-- Título do chamado -->
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6> <!-- Categoria do chamado -->
                  <p class="card-text">Descrição do chamado...</p> <!-- Descrição do chamado -->
                </div>
              </div>

              <!-- Botão para voltar à página anterior -->
              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
