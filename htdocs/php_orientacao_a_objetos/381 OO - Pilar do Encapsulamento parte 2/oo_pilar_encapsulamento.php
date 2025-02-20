<?php
class Pai
{
    private $nome = 'Jorge'; // Atributo privado, acessível apenas dentro da classe Pai
    protected $sobrenome = 'Silva'; // Atributo protegido, acessível na classe Pai e subclasses
    public $humor = 'Feliz'; // Atributo público, acessível de qualquer lugar

    // Métodos mágicos para acessar atributos inacessíveis ou privados/protected
    public function __get($atr)
    {
        return $this->$atr; // Retorna o valor do atributo especificado
    }

    public function __set($atr, $value)
    {
        $this->$atr = $value; // Define o valor do atributo especificado
    }

    // Método privado, acessível apenas dentro da classe Pai
    private function executarMania()
    {
        echo 'Assobiar'; // Exibe uma mensagem indicando a mania
    }

    // Método protegido, acessível na classe Pai e subclasses
    protected function responder()
    {
        echo 'Oi'; // Exibe uma mensagem indicando a resposta
    }

    // Método público para executar uma ação aleatória
    public function executarAcao()
    {
        $x = rand(1, 10); // Gera um número aleatório entre 1 e 10
        if ($x >= 1 && $x <= 8) { // Se o número estiver entre 1 e 8
            $this->executarMania(); // Chama o método privado executarMania()
        } else { // Caso contrário (números 9 ou 10)
            $this->responder(); // Chama o método protegido responder()
        }
    }
}

// Classe Filho que herda de Pai
class Filho extends Pai
{
    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this)); // Exibe os métodos disponíveis no objeto Filho
        echo '</pre>';
    }

    // Sobrescreve o método privado executarMania da classe Pai
    private function executarMania()
    {
        echo 'Cantar'; // Exibe uma mensagem indicando a mania do filho
    }

    // Método público para chamar o método privado executarMania
    public function x()
    {
        $this->executarMania(); // Chama o método privado executarMania() da classe Filho
    }

    // Sobrescreve o método protegido responder da classe Pai
    protected function responder()
    {
        echo 'Olá'; // Exibe uma mensagem indicando a resposta do filho
    }

    /* Métodos getAtributo e setAtributo foram comentados. Eles seriam usados para acessar e modificar atributos.
    public function getAtributo($attr) {
        return $this->$attr;
    }
    public function setAtributo($attr, $value) {
        $this->$attr = $value;
    } */

    /* Métodos mágicos __get e __set também foram comentados, pois já estão definidos na classe Pai.
    public function __get($atr) {
        return $this->$atr;
    }
    public function __set($atr, $value) {
        $this->$atr = $value;
    } */
}

// Criação de uma instância da classe Filho
$filho = new Filho();

// Exibição do objeto Filho usando print_r
echo '<pre>';
print_r($filho);
echo '</pre>';

/* Chamadas aos métodos getAtributo e setAtributo foram comentadas.
echo $filho->getAtributo('nome');
echo '<br />';
$filho->setAtributo('nome', 'Pereira');
echo '<pre>';
print_r($filho);
echo '</pre>';
echo '<br />';
echo $filho->getAtributo('nome'); */

// Exibição dos métodos disponíveis no objeto Filho foi comentada.
// echo '<pre>';
// print_r(get_class_methods($filho));
// echo '</pre>';

/* Chamadas aos métodos mágicos __get e __set foram comentadas.
echo $filho->__get('nome');
$filho->__set('nome', 'Jamilton');
echo '<br />';
echo $filho->__get('nome');
echo '<pre>';
print_r($filho);
echo '</pre>'; */

// Tentativa de chamar o método executarMania diretamente (erro, pois é privado)
$fiho->executarMania();
echo '<br/>';

// Chamada ao método x(), que chama o método privado executarMania da classe Filho
$filho->x();
