<?php

echo "<pre>";print_r($_POST); echo "<pre>";

foreach($_POST as $pos=>$valor){
    $$pos=$valor;
}
// $uf=$_POST["uf"];
// $email=$_POST["email"];

echo "UF: $uf<br>E-mail: $email<br>senha: $senha";

?>