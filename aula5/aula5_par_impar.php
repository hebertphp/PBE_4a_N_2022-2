<?php
if(count($_POST)==0){
    echo "Execute primeiro o formulário";
    exit();//saia do código
}
$num=$_POST["num"];

//$num=28;


echo "num = $num";
?>