<?php
    include "conecta.php";
    $sql="
    insert into usuario values 
    (null, 'Hebert','123456','hebert@test.com',now(),'Será que Funcionou?')
    ";
    $query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    echo "Insert OK!";
    mysqli_close($conn);
?>
