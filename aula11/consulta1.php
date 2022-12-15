<?php
include "conecta.php";
echo "<br>";
$sql="select id, login, senha, email, obs,DATE_FORMAT(data,'%d/%m/%Y') as data from usuario";
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
?>
<table border="1" width="500">
    <tr>
        <th>id</th>
        <th>login</th>
        <th>senha</th>
    <tr>   
<?php        
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
// echo $row["login"]." - ".$row["senha"]."---".$row["email"]." - ".$row["data"]."<br>";
echo "<tr><td>".$row["id"]."</td><td>".$row["login"]."</td><td>".$row["senha"]."</td><tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>

