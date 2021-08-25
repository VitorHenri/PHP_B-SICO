<?php
/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
Se estiver fora do intervalo, informar que não existe o mês

Utilize array.
*/
echo '<body>
<form action=\'#\' method=\'post\'>
<input type=\'number\' name=\'number\' placeholder=\'Digite um número\'>
<input type=\'submit\' value=\'ENVIAR\'>
</form>
</body>';

$numero = $_POST['number'];
$array =[
    1=>'Janeiro',
    2=>'Fevereiro',
    3=>'Março',
    4=>'Abril',
    5=>'Maio',
    6=>'Junho',
    7=>'Julho',
    8=>'Agosto',
    9=>'Setembro',
    10=>'Outubro',
    11=>'Novembro',
    12=>'Dezembro'
];

if($numero>=1 && $numero<=12)
echo "O mês é ".$array[$numero];
else{
    echo "Inválido";
}
?>