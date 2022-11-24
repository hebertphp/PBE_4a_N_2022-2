<?php
/*
Desafio:
Montar um array bidimensaional com os valores abaixo:
água, avião, submarino
água,água,destroyer
porta-aviões, água, água

Mostra a saída abaixo, um em cada linha:
avião
submarino
destroyer
porta-aviões
*/
$batalha=array(
    array("água", "avião", "submarino"),
    array("água","água","destroyer"),
    array("porta-aviões", "água", "água")
);
echo "<pre>";print_r($batalha);echo "</pre>";
echo $batalha[0][1]."<br>";
echo $batalha[0][2]."<br>";
echo $batalha[1][2]."<br>";
echo $batalha[2][0]."<hr>";
//echo "<pre>";print_r($_GET);echo "</pre>";
?>