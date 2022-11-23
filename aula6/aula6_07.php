<?php
$nota=9.5;
$nota=7;
//            0    1   2
$notas=array(9.5 , 7 , 8);
echo $nota."<br>";
echo "<pre>";print_r($notas);echo "</pre><hr>";
echo $notas[2]. " - ".$notas[0];
$estudante=array(
    "ra"  => 123456789,
    "nome"=>"Pafuncia",
    "av1" =>9,
    "av2" =>7
);
echo "<pre>";print_r($estudante);echo "</pre><hr>";
echo "RA: ".$estudante["ra"]."<br>";
echo "Nome: ".$estudante["nome"]."<br>";
echo "AV1: ".$estudante["av1"]."<br>";
echo "AV2: ".$estudante["av2"]."<br>";
echo "Média: ".(($estudante["av1"]+ $estudante["av2"])/2);
echo "<hr>";
echo count($notas)."---".count($estudante);

?>