<?php

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
	public $status = array('codigo_status' => null, 'descricao_status' => '');
	
// Metodo __get Retorna o valor se existir, senão retorna null
	public function __get($atributo) {
        return $this->$atributo ?? null;  
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
	header('Location: index.php');
}

$mail = new PHPMailer(true);
try {
	// Configurações do servidor SMTP
	$mail->SMTPDebug = false;                      //"2" Habilita saída detalhada para depuração, "false" Desabilita
	$mail->isSMTP();                            // Envia usando SMTP
	$mail->Host       = 'smtp.gmail.com';     // Define o servidor SMTP para envio
	$mail->SMTPAuth   = true;                   // Habilita autenticação SMTP
	$mail->Username   = 'liinkifood5@gmail.com';     // Nome de usuário do SMTP
	$mail->Password   = '';               // Senha do SMTP (Apagado por motivo de segurança, o que faz não funcionar, basta colocar a senha do Gmail)
	$mail->SMTPSecure = 'tls'; // Habilita criptografia TLS (STARTTLS)
	$mail->Port       = 587;                    // Porta TCP para conexão (use 465 para `PHPMailer::ENCRYPTION_SMTPS`)above

	// Destinatários
	$mail->setFrom('liinkifood5@gmail.com', 'Email de Teste(Enviador)'); //Endereço de e-mail do remetente
	$mail->addAddress(($mensagem->__get('para')), '(destinatario)');     //Adiciona um destinatário
	$mail->addReplyTo('liinkifood5@gmail.com', 'Email para destinatario responder'); //Endereço de resposta
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	// Configuração do conteúdo do e-mail
	$mail->isHTML(true); // Define o formato do e-mail como HTML
	$mail->Subject = $mensagem->__get('assunto'); // Define o assunto do e-mail a partir do objeto $mensagem
	$mail->Body    = $mensagem->__get('mensagem'); // Define o corpo do e-mail a partir do objeto $mensagem
	$mail->AltBody = 'É necessario utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem'; // Define o corpo alternativo do e-mail para clientes que não suportam HTML

	$mail->send(); // Envia o e-mail

	// Atualiza o status da mensagem para sucesso
	$mensagem->status['codigo_status'] = 1;
	$mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';
} catch (Exception $e) {

	// Atualiza o status da mensagem para falha e armazena a descrição do erro
	$mensagem->status['codigo_status'] = 2;
	$mensagem->status['descricao_status'] = 'Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
}
?>

<html>

<head>
	<meta charset="utf-8" />
	<title>App Mail Send</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

	<div class="container">
		<div class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
			<h2>Send Mail</h2>
			<p class="lead">Seu app de envio de e-mails particular!</p>
		</div>

		<div class="row">
			<div class="col-md-12">

				<?php if ($mensagem->status['codigo_status'] == 1) { ?>

					<div class="container">
						<h1 class="display-4 text-success">Sucesso</h1>
						<p><?= $mensagem->status['descricao_status'] ?></p>
						<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
					</div>

				<?php } ?>

				<?php if ($mensagem->status['codigo_status'] == 2) { ?>

					<div class="container">
						<h1 class="display-4 text-danger">Ops!</h1>
						<p><?= $mensagem->status['descricao_status'] ?></p>
						<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
					</div>

				<?php } ?>

			</div>
		</div>
	</div>

</body>

</html>