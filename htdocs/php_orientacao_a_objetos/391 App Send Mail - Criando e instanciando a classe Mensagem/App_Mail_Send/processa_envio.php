<?php
// Definindo a classe Mensagem
class Mensagem {
    // Atributos privados para armazenar os dados da mensagem
    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    // Método mágico __get para acessar os atributos privados
    public function __get($atributo) {
        return $this->$atributo;
    }

    // Método mágico __set para definir os valores dos atributos privados
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    // Método para validar se todos os campos da mensagem estão preenchidos
    public function mensagemValida() {
        if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
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
if($mensagem->mensagemValida()) {
    echo 'Mensagem é válida';
} else {
    echo 'Mensagem não é válida';
}
?>