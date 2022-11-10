<?php
$i=0; // valor inicial
while ($i <= 5) {//condição
 echo $i . " ";
 $i++;//contador
}
echo "<hr>";
/*
$i      $i<=5       Saída       Contador($i++)
0       V           0           1
1       V           1           2
2       V           2           3
3       V           3           4
4       V           4           5
5       V           5           6
6       F
*/

/*
Desafio 1: Mostrar a saída abaixo

7 8 9 10
*/
$i=7; // valor inicial
while ($i <= 10) {//condição  ($i < 11)
 echo $i . " ";
 $i++;//contador
}
echo "<hr>";
/*
Desafio 2: ATENÇÃO, CUIDADO COM O CÓDIGO!!!!

5 4 3 2 1
*/
$i=5; // valor inicial
while ($i >= 1) {//condição  ($i > 0)
 echo $i . " ";
 $i--;//contador
}
echo "<hr>";    
/*
Desafio 3: 

0 2 4 6 8 10
*/
?>