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
      /* Estilo para centralizar e ajustar o tamanho do card de login */
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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

        <!-- Card de login centralizado na página -->
        <div class="card-login">
          <div class="card">
            <!-- Cabeçalho do card com o título "Login" -->
            <div class="card-header">
              Login
            </div>
            <!-- Corpo do card com o formulário de login -->
            <div class="card-body">
              <form>
                <!-- Campo de entrada para o e-mail -->
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <!-- Campo de entrada para a senha -->
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha">
                </div>
                <!-- Botão de submissão do formulário -->
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>