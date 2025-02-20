<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!-- Importação do Bootstrap para estilização e responsividade -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">

    <style>
        /* Estilização do card que contém o menu */
        .card-home {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }

        /* Ajusta o tamanho das imagens para melhorar a responsividade */
        .menu-icon {
            width: 70px;
            height: 70px;
            transition: transform 0.2s; /* Efeito ao passar o mouse */
        }

        .menu-icon:hover {
            transform: scale(1.1); /* Aumenta levemente ao passar o mouse */
        }
    </style>
</head>

<body>

    <!-- Barra de navegação escura -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
            App Help Desk
        </a>
    </nav>

    <div class="container">    
        <div class="row justify-content-center"> <!-- Centraliza o menu -->
            <div class="card-home">
                <div class="card">
                    <div class="card-header text-center">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Botão para abrir chamado -->
                            <div class="col-6 d-flex flex-column align-items-center">
                                <a href="abrir_chamado.html">
                                    <img src="formulario_abrir_chamado.png" class="menu-icon" alt="Abrir chamado">
                                </a>
                                <p>Abrir Chamado</p>
                            </div>

                            <!-- Botão para consultar chamado -->
                            <div class="col-6 d-flex flex-column align-items-center">
                                <a href="consultar_chamado.html">
                                    <img src="formulario_consultar_chamado.png" class="menu-icon" alt="Consultar chamado">
                                </a>
                                <p>Consultar Chamado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Fim do card-home -->
        </div> <!-- Fim da linha -->
    </div> <!-- Fim do container -->

</body>
</html>
