<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Help Desk - Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-login {
            padding: 50px 0;
            max-width: 400px;
            margin: auto;
        }

        .card {
            border-radius: 10px;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
    </style>
</head>

<body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
            App Help Desk
        </a>
    </nav>

    <div class="container">    
        <div class="row justify-content-center">
            <div class="card-login">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Login</strong>
                    </div>
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Digite seu e-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input name="senha" id="senha" type="password" class="form-control" placeholder="Digite sua senha" required>
                            </div>
                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
