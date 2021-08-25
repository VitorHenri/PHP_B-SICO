<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
// Imprimir o valor a variável e o seu tipo
echo $variavel_1."  ".gettype($variavel_1).'<br>';
$variavel_2 = 123;
// Imprimir o valor a variável e o seu tipo
echo $variavel_2."  ".gettype($variavel_2).'<br>';
$variavel_3 = 1;
// Imprimir o valor a variável e o seu tipo
echo $variavel_3."  ".gettype($variavel_3).'<br>';
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
// Imprimir o valor a variável e o seu tipo
var_dump($array);
?>