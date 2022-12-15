<?php
$senha="uninove";
$senha_md5=md5($senha);
$hashed_password = password_hash($senha, PASSWORD_DEFAULT);
$hashed_gerada='$2y$10$mVMa2ShvxNEU1FGzQXFyU.d5U5fC9l6kRLze.LASwN4S4jqFYGPpy';
$has_my       ='$2y$10$1sovqO7vwxxlxAaZXy/mfOEL0hY2e4nXLcp0hSVx45Ku2qvN3AgCC';
echo "Tamanho da string: ".strlen($senha_md5)." caracteres -  <b>$senha_md5</b><br>";
echo "Tamanho da string: ".strlen($hashed_password)." caracteres -  <b>$hashed_password</b><br>";

if(password_verify($senha, $hashed_gerada)){
    echo "<hr>Senha ok!";
}
else{
    echo "Não foi!";
}
?>
