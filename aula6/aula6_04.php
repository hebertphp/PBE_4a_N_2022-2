<?php
$aluno["curso"] = "TADS";
$aluno["nome"] = "Fulano";
$aluno["ra"] = 1234056789;
//$aluno=array();//cria uma var do tipo array vazia, apagar todas as posições e valores do array
echo "<pre>";print_r($aluno);echo "</pre>";
echo "<hr>Nome: ".$aluno["nome"];
echo "<br>Ra: ".$aluno["ra"];
echo "<br>Curso: ".$aluno["curso"];
?>