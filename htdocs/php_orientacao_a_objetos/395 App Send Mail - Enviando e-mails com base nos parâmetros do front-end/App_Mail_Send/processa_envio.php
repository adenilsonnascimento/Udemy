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
	$mail->Host       = 'smtp.gmail.com';     // Define o servidor SMTP para envio
	$mail->SMTPAuth   = true;                   // Habilita autenticação SMTP
	$mail->Username   = 'liinkifood5@gmail.com';     // Nome de usuário do SMTP
	$mail->Password   = '';               // Senha do SMTP (Retirei por segurança e por isso a aplicação nao vai funcionar nessa etapa) 
	$mail->SMTPSecure = 'tls'; // Habilita criptografia TLS (STARTTLS)
	$mail->Port       = 587;                    // Porta TCP para conexão (use 465 para `PHPMailer::ENCRYPTION_SMTPS`)

	// Destinatários
	$mail->setFrom('liinkifood5@gmail.com', 'Email de Teste(Enviador)'); //Endereço de e-mail do remetente
	$mail->addAddress(($mensagem->__get('para')), '(destinatario)');     //Adiciona um destinatário
	$mail->addReplyTo('liinkifood5@gmail.com', 'Email para destinatario responder'); //Endereço de resposta
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = $mensagem->__get('assunto');
	$mail->Body    = $mensagem->__get('mensagem');
	$mail->AltBody = 'É necessario utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

	$mail->send();
	echo 'E-mail enviado com sucesso';
} catch (Exception $e) {
	echo "Não foi possível enviar este e-mail! Por favor tente novamente mais tarde.";
	echo 'Detalhes do erro: ' . $mail->ErrorInfo;
}
