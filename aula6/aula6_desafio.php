<?php
/*
Criar uma variavel do tipo array, com as posições e valores abaixo
nome => "algum nome"
ra => "algum ra"
av1 => 10
av2 => 8

Mostrar todos os valores das posições do array e calcular a média de av1, av2
*/
$est=array(
    "nome" => "algum nome",
    "ra" => "algum ra",
    "av1" => 10,
    "av2" => 8
);
//echo "<pre>";print_r($_GET);echo "</pre>";
echo "<pre>";print_r($est);echo "</pre>";
echo "media: ".($est["av1"]+$est["av2"])/2;
echo "<br>".count($est);
?>