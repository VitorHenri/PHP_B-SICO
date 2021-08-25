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
*/
$nota_1 = 9;
$nota_2 = 4;

function calculo_media(float $nota1,float $nota2):float{
    $media = ($nota1+$nota2)/2;
    return $media;
}

function situacao($media_final){
    if($media_final<=4.9)
    echo "reprovado";
    else if($media_final>=5 && $media_final<=7)
    echo "recuperação";
    else
    echo "Aprovado!!";
}

calculo_media($nota_1,$nota_2);
echo situacao(calculo_media($nota_1,$nota_2));

?>