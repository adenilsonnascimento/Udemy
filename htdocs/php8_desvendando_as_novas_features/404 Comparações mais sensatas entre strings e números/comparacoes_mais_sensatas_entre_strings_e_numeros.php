

<?php
//Comparações com Tipos Explícitos
//______________________________________


// Comparação não estrita (pode levar a resultados inesperados)
var_dump("123" == 123); // true
var_dump("123abc" == 123); // true

// Comparação estrita (mais segura)
var_dump("123" === 123); // false
var_dump("123abc" === 123); // false
?>


<?php
//Conversão Explícita de Tipos
//______________________________________

$string = "123";
$numero = 123;

// Conversão explícita de string para número
var_dump((int)$string === $numero); // true

// Conversão explícita de número para string
var_dump($string === (string)$numero); // true
?>

<?php
//Funções de Comparação Segura
//______________________________________

$string = "123";
$numero = 123;

// Verificar se a string contém apenas dígitos
if (ctype_digit($string)) {
    var_dump((int)$string === $numero); // true
} else {
    echo "A string não contém apenas dígitos.";
}
?>

<?php
//Comparação com filter_var
//______________________________________

$string = "123";
$numero = 123;

// Validar e filtrar a string como número inteiro
if (filter_var($string, FILTER_VALIDATE_INT) !== false) {
    var_dump((int)$string === $numero); // true
} else {
    echo "A string não é um número inteiro válido.";
}
?>

<?php
//Comparação com is_numeric
//______________________________________

$string = "123";
$numero = 123;

// Verificar se a string é numérica
if (is_numeric($string)) {
    var_dump((int)$string === $numero); // true
} else {
    echo "A string não é numérica.";
}
?>