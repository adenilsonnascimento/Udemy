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
        /* Define a estilização do card onde o formulário será exibido */
        .card-abrir-chamado {
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
            <div class="card-abrir-chamado">
                <div class="card">
                    <!-- Cabeçalho do card -->
                    <div class="card-header">
                        Abertura de chamado
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                
                                <!-- Formulário de abertura de chamado -->
                                <form>
                                    <!-- Campo para o título do chamado -->
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" class="form-control" placeholder="Título">
                                    </div>
                                    
                                    <!-- Campo de seleção para a categoria do chamado -->
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
                                    
                                    <!-- Campo para a descrição do problema -->
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>

                                    <!-- Botões de ação -->
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <!-- Botão de voltar -->
                                            <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                                        </div>

                                        <div class="col-6">
                                            <!-- Botão de abrir o chamado -->
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- Fim da coluna -->
                        </div> <!-- Fim da linha -->
                    </div> <!-- Fim do corpo do card -->
                </div> <!-- Fim do card -->
            </div> <!-- Fim do card-abrir-chamado -->
        </div> <!-- Fim da linha -->
    </div> <!-- Fim do container -->
    
</body>
</html>
