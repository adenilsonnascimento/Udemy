<?php

// Inclui os arquivos necessários da biblioteca PHPMailer
require "./app_send_mail/bibliotecas/PHPMailer/Exception.php"; // Tratamento de erros e exceções
require "./app_send_mail/bibliotecas/PHPMailer/OAuth.php";  // Suporte à autenticação via OAuth
require "./app_send_mail/bibliotecas/PHPMailer/PHPMailer.php"; // Classe principal do PHPMailer
require "./app_send_mail/bibliotecas/PHPMailer/POP3.php";    // Suporte à autenticação via POP3
require "./app_send_mail/bibliotecas/PHPMailer/SMTP.php";     // Suporte ao envio de e-mails via SMTP

require "./app_send_mail/processa_envio.php";
