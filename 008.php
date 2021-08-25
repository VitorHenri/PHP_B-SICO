<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 160;

if($numero%10==0){ 
    echo 'divisivel por 10<br>';
    if($numero%3==0)
    echo 'divisivel por 3';
}else{
    echo 'não divisível por nenhum';
}

?>