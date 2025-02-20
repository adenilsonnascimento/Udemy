<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!-- Inclusão do Bootstrap 4 para estilização do layout -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      /* Estilo customizado para o card de home */
      .card-home {
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

        <!-- Card que contém o conteúdo principal -->
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu <!-- Título do card -->
            </div>
            <div class="card-body">
              <div class="row">
                <!-- Primeira coluna com o primeiro ícone -->
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </div>
                <!-- Segunda coluna com o segundo ícone -->
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_consultar_chamado.png" width="70" height="70">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
