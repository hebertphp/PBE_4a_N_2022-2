<?php
$receita=array(
    "ingredientes"=>"farinha, ovos, fermento, leite",
    "preparo"=>"bater tudo e colocar na forma untada",
    "cobertura"=>"chocolate granulado(diet)"
);
foreach($receita as $bolo=>$forno){
    echo "<b>$bolo:</b> $forno<br>";
}

//foreach($array as $pos=>$valor)

?>