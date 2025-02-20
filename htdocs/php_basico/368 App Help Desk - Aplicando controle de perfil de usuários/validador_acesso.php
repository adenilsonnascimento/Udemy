<?php

  // Inicia a sessão ou retoma a sessão existente, permitindo o uso de variáveis de sessão
  session_start();

  // Verifica se a variável de sessão 'autenticado' está definida e se seu valor é 'SIM'
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    // Se a variável 'autenticado' não estiver definida ou seu valor não for 'SIM',
    // o usuário é redirecionado para a página index.php com um parâmetro de erro
    header('Location: index.php?login=erro2');
  }

?>
