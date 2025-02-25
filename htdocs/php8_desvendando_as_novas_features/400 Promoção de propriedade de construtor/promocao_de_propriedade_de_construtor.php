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
}

// Criando uma instância da classe Retangulo
$retangulo = new Retangulo(largura: 5.0, altura: 10.0);

// Calculando a área
$area = $retangulo->calcularArea();

// Exibindo o resultado
echo "A área do retângulo é: " . $area . " metros quadrados.";
?>