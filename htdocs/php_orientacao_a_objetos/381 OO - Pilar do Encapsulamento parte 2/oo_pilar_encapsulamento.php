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

//__________________________________

class Filho extends Pai
{
    // No processo de herança, os atributos privados não são herdados, apenas os métodos protected e public são herdados

    public function getAtributos($atributo)
    {
        return $this->$atributo;
    }

    public function setAtributos($atributo, $value)
    {
        $this->$atributo = $value;
    }
}

$filho = new Filho();
echo '<pre>';
print_r($filho); // Mostra que o atributo "nome" pertence apenas ao objeto pai, por ser private
echo '</pre>';

echo $filho->getAtributos('humor');
echo '<br/>';
echo $filho->getAtributos('sobrenome');
echo '<br/> <br/>';
//echo $filho->getAtributos('nome'); NÃO FUNCIONA, pois o filho não recebeu do pai, por estar private

echo $filho->getAtributos('humor');
echo '<br/>';
$filho->setAtributos('humor', 'Negro');
echo $filho->getAtributos('humor');
echo '<br/>';

echo $filho->getAtributos('sobrenome');
echo '<br/>';
$filho->setAtributos('sobrenome', 'Marinos');
echo $filho->getAtributos('sobrenome');
echo '<br/>';

//______________________________________________

echo '<pre>';
print_r($filho);
echo '</pre>';

$filho->setAtributos('nome', 'Adenilson'); // Cria um novo atributo no filho

echo '<pre>';
print_r($filho);
echo '</pre>';

echo $filho->getAtributos('nome');

//______________________________________________

class Neto extends Pai
{
    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    protected function executarFeliz()
    {
        echo 'Programar em JavaScript';
    }

    
}

$neto = new Neto();

echo '<pre>';
print_r($neto);
echo '</pre>';

echo '<br/>';

echo '<pre>';
print_r(get_class_methods($neto));
echo '</pre>';

echo $neto->__get('nome');
$neto->__set('nome', 'Ferreira');
echo '<br/>';
echo $neto->__get('nome');
echo '<br/>';
echo $neto->__get('sobrenome');
$neto->__set('sobrenome', 'Marinos');
echo '<br/>';
echo $neto->__get('sobrenome');
echo '<br/>';

//______________________________________________

$neto->executarMania();

?>