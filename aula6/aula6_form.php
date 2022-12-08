<?php
$uf=array("SP","RJ","MG","ES","AM","BA","SC","RO","RR","TO","AP","PB");
sort($uf);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="recebe.php" method="post">
        E-mail <input type="email" name="email" id="email"><br>
        Selecione UF
        <select name="uf" id="">
            <?php
            foreach($uf as $pos=>$valor){
                echo "<option value='$valor'>$valor</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>