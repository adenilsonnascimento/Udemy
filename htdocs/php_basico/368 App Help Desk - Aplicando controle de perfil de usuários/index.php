<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <!-- Navbar do aplicativo -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <!-- Container do formulário de login -->
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <!-- Formulário de login -->
              <form action="valida_login.php" method="post">
                <!-- Campo de email -->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <!-- Campo de senha -->
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <!-- Exibe mensagens de erro, se houver -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>
                <!-- Verifica se há um erro no login devido a email ou senha inválidos -->
                <div class="text-danger">
                  Usuário ou senha inválido(s) <!-- Exibe a mensagem de erro -->
                </div>
                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>
                <!-- Verifica se o erro é relacionado a tentativa de acessar páginas protegidas sem autenticação -->
                <div class="text-danger">
                  Por favor, faça login antes de acessar as páginas protegidas <!-- Exibe a mensagem de erro -->
                </div>
                <?php } ?>

                <!-- Botão para enviar o formulário -->
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
