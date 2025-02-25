<?php
// Função para calcular a área de um retângulo
function calcularAreaRetangulo(float $largura, float $altura): float {
    return $largura * $altura;
}

// Chamando a função usando argumentos nomeados
$area = calcularAreaRetangulo(largura: 5.0, altura: 10.0);

// Exibindo o resultado
echo "A área do retângulo é: " . $area . " metros quadrados.";
?>