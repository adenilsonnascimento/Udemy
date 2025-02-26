<?php

// Função para enviar e-mail
function sendEmail($destinatario = "", $cc = "", $assunto = "", $mensagem = "") {
    echo "Destinatario: $destinatario <br>";
    echo "CC: $cc <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";
}

// Chamando a função com argumentos posicionais
sendEmail(
    "liinkifood5@gmail.com",
    "liinkifood6@gmail.com",    
    "Argumentos nomeados",
    "Dominando a fectura de argumentos nomeados em PHP 8"
);

echo "<br>";
echo "<hr>";

// Chamando a função com argumentos nomeados
sendEmail(
    destinatario: "liinkifood5@gmail.com", 
    assunto: "Argumentos nomeados",
    mensagem: "Dominando a fectura de argumentos nomeados em PHP 8"
);

?>