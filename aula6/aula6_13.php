<?php
$nomes=array("Fulano","Beltrano","Sicrano","beltrano","sicrano");
$resultado=array_unique($nomes);
foreach($resultado as $pos=>$valor){
    echo "Nomes[$pos]: " . $valor;
    echo "<br>";
}
?>