<?php
// echo "<pre>";print_r($_POST);echo "</pre>";
if(count($_POST)==0){
    die("Erro de acesso!<br><a href='form_cad.html'>Clique aqui para o form</a>");
}
$login=$_POST["login"];
$senha=$_POST["senha"];
$email=$_POST["email"];
$data=$_POST["data"];
include "conecta.php";
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
$obs='';
$sql="insert into usuario values (null, '$login','$senha_hash','$email','$data','$obs')";
//echo $sql;
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "<h2>Insert OK!</h2>";
mysqli_close($conn);

?>