<!DOCTYPE html>
<html>
  <head>
    <!-- Define o conjunto de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta charset="utf-8" />
    
    <!-- Título da página que aparece na aba do navegador -->
    <title>App Help Desk</title>

    <!-- Link para o arquivo CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Estilos personalizados para a página -->
    <style>
      /* Estilo para centralizar e ajustar o tamanho do card de consulta de chamado */
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <!-- Barra de navegação no topo da página -->
    <nav class="navbar navbar-dark bg-dark">
      <!-- Link para a página inicial com o logo e o nome do aplicativo -->
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <!-- Container principal para o conteúdo da página -->
    <div class="container">    
      <div class="row">

        <!-- Card de consulta de chamado -->
        <div class="card-consultar-chamado">
          <div class="card">
            <!-- Cabeçalho do card com o título "Consulta de chamado" -->
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <!-- Corpo do card com os detalhes dos chamados -->
            <div class="card-body">
              
              <!-- Card de exemplo para um chamado -->
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <!-- Título do chamado -->
                  <h5 class="card-title">Título do chamado...</h5>
                  <!-- Subtítulo com a categoria do chamado -->
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <!-- Descrição do chamado -->
                  <p class="card-text">Descrição do chamado...</p>
                </div>
              </div>

              <!-- Outro card de exemplo para um chamado -->
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <!-- Título do chamado -->
                  <h5 class="card-title">Título do chamado...</h5>
                  <!-- Subtítulo com a categoria do chamado -->
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <!-- Descrição do chamado -->
                  <p class="card-text">Descrição do chamado...</p>
                </div>
              </div>

              <!-- Botão "Voltar" -->
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