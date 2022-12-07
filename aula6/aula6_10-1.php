<?php
$produto=array("pão","batata","hamburguer","copa","maionese","mortadela","salada","bacon","pizza","tomate");
$prod=array(
    "nome"=>"pão",
    "valor"=>5.30,
    "disponivel"=>"sim"
);
//foreach($var_tipo_array as $pos=>$var_simples)
foreach($prod as $pos=>$sla){
    echo "$pos: $sla<br>";
}
?>
