<?php
/*
Crie uma função que demonstre 
 - Passagem por valor.
 - Passagem por referência.
*/


$valor =5;

function soma($n){
    $n +=6;
    echo $n;
}
// O valor que será exibido será 11, porém só no uso da função
soma($valor);
// O valor da variavel ainda será 5
echo '<br>'.$valor;

function soma1(&$n){
    $n +=6;
    echo $n;
}
echo'<br>';
// O valor que será exibido será 11 e variável também tera altrerado
soma1($valor);
// O valor da variavel será 11
echo '<br>'.$valor;


?>