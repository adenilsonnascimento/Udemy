<?php

// VARIÁVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;

// USUÁRIOS DO SISTEMA
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
);

/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

foreach($usuarios_app as $user){
    /*
    echo 'Usuario app: ' . $user['email'] . '/' . $user['senha'];
    echo '<br />';
    echo 'Usuario form: ' . $_POST['email'] . '/' . $_POST['senha'];
    echo '<hr />';
    */

    // Verifica se o e-mail e a senha informados no formulário correspondem a algum usuário cadastrado
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

// Se a autenticação for bem-sucedida, exibe mensagem; caso contrário, redireciona para a página de login com erro
if($usuario_autenticado){
    echo 'Usuário autenticado.';
} else {
    header('Location: index.php?login=erro');
}

/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
print_r($_POST);
*/

?>
