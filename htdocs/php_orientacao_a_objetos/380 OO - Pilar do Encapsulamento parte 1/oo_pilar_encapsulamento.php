<?php
// Definição da classe Pai
class Pai
{
    //private, protected, public são operadores de visibilidade e servem para controlar o acesso aos atributos

    private $nome = 'Adenilson';
    protected $sobrenome = 'Nascimento';
    public $humor = 'Feliz';

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($value)
    {
        if (strlen($value) >= 3) {
            $this->nome = $value;
        }
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($value)
    {
        if (strlen($value) >= 3) {
            $this->sobrenome = $value;
        }
    }

    // Métodos mágicos que fazem o mesmo que os métodos acima
    public function __get($atributo)
    {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }

    public function __set($atributo, $value)
    {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $value;
        }
    }

    // Em funções, precisamos atribuir valor das funções private e protected dentro de uma função pública para mostrá-las
    public function executarMania()
    {
        echo 'Programar';
        echo '<br/>';
        $this->executarTristeza();
        echo '<br/>';
        $this->executarFeliz();
    }

    private function executarTristeza()
    {
        echo 'Programar em Java';
    }

    protected function executarFeliz()
    {
        echo 'Programar em PHP';
    }

    // Teste com função
    public function gostarDeProgramar($programar)
    {
        $gosto = $programar;
        if ($gosto == 'programar') {
            $this->executarFeliz();
        } else {
            $this->executarTristeza();
        }
    }
}

$pai = new Pai();
echo $pai->getNome(); // Exibe "Adenilson"

echo '<br/>';

$pai->setNome('Ferreira');
echo $pai->getNome(); // Exibe "Ferreira"

echo '<br/>';

echo $pai->getSobrenome(); // Usando o método getSobrenome() para acessar o atributo protegido

echo '<br/>';

$pai->setSobrenome('Marinos');
echo $pai->getSobrenome(); // Usando o método getSobrenome() para acessar o atributo protegido após a alteração

// Utiliza o método mágico para fazer o mesmo que acima, otimizando a sintaxe
echo '<br/> ______________________________________<br/>';
echo $pai->__get('nome');
echo '<br/>';
echo $pai->__get('sobrenome');

// Com os métodos mágicos get e set, conseguimos atribuir valor diretamente
echo '<br/>';
$pai->__set('nome', 'Adenilson');
echo $pai->__get('nome');
echo '<br/>';
$pai->__set('sobrenome', 'Nascimento');
echo $pai->__get('sobrenome');

// Métodos protegidos e privados não podem ser acessados diretamente fora da classe
echo '<br/> ______________________________________<br/>';
echo $pai->executarMania();
echo '<br/> ______________________________________<br/>';

// Testando a função gostarDeProgramar
$pai->gostarDeProgramar('programar');
?>