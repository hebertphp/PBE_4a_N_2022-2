<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) and ($a<=$c));//$d=(T)and(T) //$d=True
$e=(($a<=$b) &&  !($a>=$c));//$e=(T)&&!(F) $e=T&&T //$e=TRUE
var_dump($d);
echo "<br>";
var_dump($e);
?>