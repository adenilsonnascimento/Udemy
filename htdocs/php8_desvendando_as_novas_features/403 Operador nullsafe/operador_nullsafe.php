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

// Função para validar os valores usando expressão regular
function validarValores(string $largura, string $altura): bool {
    $pattern = '/^\d+(\.\d+)?$/'; // Expressão regular para números positivos (inteiros ou decimais)
    return preg_match($pattern, $largura) && preg_match($pattern, $altura);
}

// Função para exibir informações do retângulo
function exibirInformacoesRetangulo(?Retangulo $retangulo): void {
    $area = $retangulo?->calcularArea();
    echo "Largura: " . $retangulo?->getLargura() . " metros\n";
    echo "Altura: " . $retangulo?->getAltura() . " metros\n";
    echo "Área: " . $area . " metros quadrados\n";
}

// Valores de entrada
$largura = "5.0";
$altura = "10.0";

// Validando os valores antes de criar a instância
if (validarValores($largura, $altura)) {
    $retangulo = new Retangulo(largura: (float)$largura, altura: (float)$altura);
} else {
    $retangulo = null;
}

// Exibindo as informações do retângulo
exibirInformacoesRetangulo($retangulo);
?>