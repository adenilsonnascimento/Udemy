<?php

// Inclui os arquivos necessários da biblioteca PHPMailer
require "./bibliotecas/PHPMailer/Exception.php"; // Tratamento de erros e exceções
require "./bibliotecas/PHPMailer/OAuth.php";     // Suporte à autenticação via OAuth
require "./bibliotecas/PHPMailer/PHPMailer.php"; // Classe principal do PHPMailer
require "./bibliotecas/PHPMailer/POP3.php";      // Suporte à autenticação via POP3
require "./bibliotecas/PHPMailer/SMTP.php";      // Suporte ao envio de e-mails via SMTP

// Importa as classes do PHPMailer para serem usadas no código
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Definindo a classe Mensagem
class Mensagem
{
	// Atributos privados para armazenar os dados da mensagem
	private $para = null;
	private $assunto = null;
	private $mensagem = null;
	// Método mágico __get para acessar os atributos privados
	public function __get($atributo)
	{
		return $this->$atributo;
	}
	// Método mágico __set para definir os valores dos atributos privados
	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}
	// Método para validar se todos os campos da mensagem estão preenchidos
	public function mensagemValida()
	{
		if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
			return false;
		}

		return true;
	}
}
// Criando uma nova instância da classe Mensagem
$mensagem = new Mensagem();
// Definindo os valores dos atributos da mensagem a partir dos dados do formulário
$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);


// Verificando se a mensagem é válida e exibindo a mensagem correspondente
if (!$mensagem->mensagemValida()) {
	echo 'Mensagem não é válida';
	die();
}

$mail = new PHPMailer(true);
try {
	// Configurações do servidor SMTP
	$mail->SMTPDebug = 2;                      // Habilita saída detalhada para depuração
	$mail->isSMTP();                            // Envia usando SMTP
	$mail->Host       = 'smtp.example.com';     // Define o servidor SMTP para envio
	$mail->SMTPAuth   = true;                   // Habilita autenticação SMTP
	$mail->Username   = 'user@example.com';     // Nome de usuário do SMTP
	$mail->Password   = 'secret';               // Senha do SMTP
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Habilita criptografia TLS (STARTTLS)
	$mail->Port       = 587;                    // Porta TCP para conexão (use 465 para `PHPMailer::ENCRYPTION_SMTPS`)

	// Destinatários
	$mail->setFrom('from@example.com', 'Mailer'); // Define o remetente
	$mail->addAddress('joe@example.net', 'Joe User'); // Adiciona um destinatário
	$mail->addAddress('ellen@example.com'); // Nome do destinatário é opcional
	$mail->addReplyTo('info@example.com', 'Information'); // E-mail de resposta
	$mail->addCC('cc@example.com'); // Adiciona cópia (CC)
	$mail->addBCC('bcc@example.com'); // Adiciona cópia oculta (BCC)

	// Anexos
	$mail->addAttachment('/var/tmp/file.tar.gz'); // Adiciona um anexo
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Adiciona um anexo com nome personalizado

	// Conteúdo do e-mail
	$mail->isHTML(true); // Define o formato do e-mail como HTML
	$mail->Subject = 'Here is the subject'; // Define o assunto do e-mail
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>'; // Corpo do e-mail em HTML
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // Corpo do e-mail para clientes sem suporte a HTML

	$mail->send(); // Envia o e-mail
	echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
	// Tratamento de erro caso o e-mail não seja enviado
	echo "Não foi possível enviar este e-mail! Por favor, tente novamente mais tarde.";
	echo 'Detalhes do erro: ' . $mail->ErrorInfo;
}
