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
      /* Estilo para centralizar e ajustar o tamanho do card da página inicial */
      .card-home {
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

        <!-- Card da página inicial -->
        <div class="card-home">
          <div class="card">
            <!-- Cabeçalho do card com o título "Menu" -->
            <div class="card-header">
              Menu
            </div>
            <!-- Corpo do card com os ícones de ações -->
            <div class="card-body">
              <div class="row">
                <!-- Coluna para o ícone de "Abrir Chamado" -->
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </div>
                <!-- Coluna para o ícone de "Consultar Chamado" -->
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_consultar_chamado.png" width="70" height="70">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>