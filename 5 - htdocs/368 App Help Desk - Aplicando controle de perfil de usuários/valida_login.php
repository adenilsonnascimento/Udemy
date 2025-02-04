<?php

// Inicia a sessão ou retoma a sessão existente, permitindo o uso de variáveis de sessão
session_start();

// Variáveis que verificam se a autenticação foi realizada e armazenam dados do usuário
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

// Definição dos perfis de usuário, onde 1 é 'Administrativo' e 2 é 'Usuário'
$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

// Array de usuários do sistema com seus respectivos IDs, e-mails, senhas e perfis
$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)
);

/* 
Comentado: Aqui seria possível imprimir todos os usuários para inspeção
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

// Loop para percorrer cada usuário no array de usuários do sistema
foreach($usuarios_app as $user){
    /*
    Comentado: Verifica a correspondência dos dados de e-mail e senha do formulário com os usuários do sistema
    echo 'Usuario app: ' . $user['email'] . '/' . $user['senha'];
    echo '<br />';
    echo 'Usuario form: ' . $_POST['email'] . '/' . $_POST['senha'];
    echo '<hr />';
    */
    // Se o e-mail e senha do formulário coincidirem com os dados de um usuário, a autenticação é realizada
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true; // Define que o usuário foi autenticado
        $usuario_id = $user['id']; // Armazena o ID do usuário autenticado
        $usuario_perfil_id = $user['perfil_id']; // Armazena o perfil do usuário autenticado
    }
}

// Verifica se a autenticação foi bem-sucedida
if($usuario_autenticado){
    echo 'Usuário autenticado.'; // Mensagem para indicar que a autenticação foi bem-sucedida

    // Armazena informações do usuário na sessão
    $_SESSION['autenticado'] = 'SIM'; // Define o status de autenticação como 'SIM'
    $_SESSION['id'] = $usuario_id; // Armazena o ID do usuário na sessão
    $_SESSION['perfil_id'] = $usuario_perfil_id; // Armazena o perfil do usuário na sessão

    // Redireciona para a página home.php (página inicial após login bem-sucedido)
    header('Location: home.php');
}else{  
    // Caso a autenticação tenha falhado, armazena o status de autenticação como 'NÃO' na sessão
    $_SESSION['autenticado'] = 'NÃO';

    // Redireciona para a página index.php com um parâmetro de erro indicando falha no login
    header('Location: index.php?login=erro');
}

/* 
Comentado: Se fosse necessário, poderia ser utilizado para imprimir os dados recebidos do formulário via GET e POST
print_r($_GET);
echo '<br />';
echo $_GET['email'];
echo '<br />';
echo $_GET['senha'];
print_r($_POST);
*/

?>
