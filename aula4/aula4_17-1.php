<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));//true
$e=(($a>=$b) xor ($a>=$c));//false
var_dump($d);
echo "<br>";
var_dump($e);
?>