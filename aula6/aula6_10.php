<?php
$uf = array("SP","RJ","MG","ES","BA");
foreach ($uf as $pos=>$valor){
    echo "[$pos] => $valor<br>";
}
echo "<hr>";
$estudante=array(
    "ra"  => 123456789,
    "nome"=>"Pafuncia",
    "av1" =>9,
    "av2" =>7
);
foreach($estudante as $pos=>$valor){
    echo "$pos: $valor<br>";
}

?>