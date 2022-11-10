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
$i=0; // valor inicial
while ($i <= 10) {//condição
 echo $i . " ";
 $i+=2;//contador
 //$i++ //$i+=1  //$i=$i+1 soma 1
}
echo "<hr>";
/*
Desafio 4: 

$tabuada = 3;
3 x 0 = 0
3 x 1 = 3
3 x 2 = 6
3 x 3 = 9
....
3 x 10 = 30


*/
$tabuada = 4;
$i=0;
while($i<=10){
    //echo "3 x 0 = 0<br>";
    echo "$tabuada x $i = ".($tabuada*$i)."<br>";
    $i++;
}    
?>