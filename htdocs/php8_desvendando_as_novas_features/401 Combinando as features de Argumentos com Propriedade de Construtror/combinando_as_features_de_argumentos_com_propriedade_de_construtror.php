<?php
// Classe Retangulo
class Retangulo {
    // O construtor promove as propriedades diretamente
    public function __construct(
        private float $largura,
        private float $altura
    ) {}

    // Método para calcular a área do retângulo
    public function calcularArea(): float {
        return $this->largura * $this->altura;
    }

    // Métodos getter para acessar as propriedades privadas
    public function getLargura(): float {
        return $this->largura;
    }

    public function getAltura(): float {
        return $this->altura;
    }
}

// Função para exibir informações do retângulo
function exibirInformacoesRetangulo(Retangulo $retangulo): void {
    $area = $retangulo->calcularArea();
    echo "Largura: " . $retangulo->getLargura() . " metros\n";
    echo "Altura: " . $retangulo->getAltura() . " metros\n";
    echo "Área: " . $area . " metros quadrados\n";
}

// Criando uma instância da classe Retangulo usando argumentos nomeados
$retangulo = new Retangulo(largura: 5.0, altura: 10.0);

// Exibindo as informações do retângulo
exibirInformacoesRetangulo($retangulo);
?>