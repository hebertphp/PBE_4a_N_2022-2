<?php
    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("DB","test");//fiz alteração // voltamos ao original

    error_reporting(0);
    mysqli_report(MYSQLI_REPORT_OFF);

    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if (!$conn) {
        die("Falha ao conectar com o servidor: " . mysqli_connect_error());
    }
    else {
        echo "Conexão efetuada com sucesso!";
    }
    //echo "<br>Continou o código!!!";
    //mysqli_close($conn);
?>
