<?php
define("CEP","01020-123");//criei a constante CEP com valor "01020-123"
define("MEDIA",9.8);//criar uma constante com o nome MEDIA e valor 9.8

$cep="02020-456";//esse cep é uma variavel
$nome="Hebert";
$dia=14;//variável tipo inteiro valor 14
$nota=9.5;//variável do tipo float valor 9.5
$mes="Setembro ";//string(8) "Setembro"
$ano=2022;
$nome="Joao Victor";
$junta=$dia."/".$mes."/".$ano; 
echo "Escrever um texto<br>";//Comentar
echo "Outra linha<br>";
echo "$nome, no dia $dia de $mes de $ano, você tirou a nota $nota<br>";
echo $junta."<br>";
var_dump($mes);
echo "<br>";
echo CEP."<br>".MEDIA;
?>