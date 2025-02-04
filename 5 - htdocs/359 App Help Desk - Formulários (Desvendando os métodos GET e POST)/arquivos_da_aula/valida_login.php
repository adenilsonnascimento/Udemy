<?php
/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
*/

// Exibe os dados enviados via POST
print_r($_POST);

echo '<br />';

// Exibe o valor do campo 'email' enviado pelo formulário
echo $_POST['email'];
echo '<br />';

// Exibe o valor do campo 'senha' enviado pelo formulário
echo $_POST['senha'];

?>
