<?php
//    vi;  cond; cont 
for ($i=0; $i<6; $i++) {
    echo $i . "🚧";
}
echo "<hr>";
/*
Desafio do for:
<h1>Título 1</h1>    
<h2>Título 2</h2>
....
<h6>Título 6</h6>
*/
for($i=1;$i<=6;$i++){
    echo "<h$i>Título $i</h$i>";
}
?>