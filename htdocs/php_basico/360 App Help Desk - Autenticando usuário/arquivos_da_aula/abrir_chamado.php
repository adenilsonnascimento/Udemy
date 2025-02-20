<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!-- Inclusão do Bootstrap 4 para estilização -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      /* Estilo para o card de abertura de chamado */
      .card-abrir-chamado {
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

        <!-- Card que contém o formulário para abrir um chamado -->
        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado <!-- Título do card -->
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <!-- Formulário para a abertura de um chamado -->
                  <form>
                    <!-- Campo para título do chamado -->
                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <!-- Campo para selecionar a categoria do chamado -->
                    <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <!-- Campo para a descrição do chamado -->
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Botões para voltar e para abrir o chamado -->
                    <div class="row mt-5">
                      <div class="col-6">
                        <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
