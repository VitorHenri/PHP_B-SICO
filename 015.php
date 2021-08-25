<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Crie uma função com o nome calculo_media.
Crie validações na função, para que os parâmetros aceitos estejam 
entre 0 e 10.
Crie constantes para os limites ( 0 e 10 )
*/
$nota_1 = 10;
$nota_2 = 1;

define('N_MAXIMO',10);
define('N_MINIMO',0);

function calculo_media($nota1,$nota2):float{
    if(($nota1<= N_MAXIMO && $nota1>= N_MINIMO) && ($nota2<= N_MAXIMO && $nota2>= N_MINIMO)){
        $media = ($nota1+$nota2) / 2;
        return $media;
    }else{
        echo "Tudo errado<br>";
        return 0;
    }
}

function situacao($media_final){
    if($media_final<=4.9)
    echo "reprovado";
    else if($media_final>=5 && $media_final<=7)
    echo "recuperação";
    else
    echo "Aprovado!!";
}

echo situacao(calculo_media($nota_1,$nota_2));
?>