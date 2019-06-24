<?php
    $servername = "sql301.unaux.com";
    $database = "unaux_23707723_Consus";
    $username = "unaux_23707723";
    $password = "pgo00rrnta";
    // Cria conexão
    $con = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($con,"utf8");
    // Checa a conexão
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

