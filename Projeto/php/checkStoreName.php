<?php
    session_start();
    include('./php/connection.php');

    $userId = $_SESSION['userID'];

    $queryStoreName = "SELECT * FROM Store where user_admin_id = '{$userId}'";
    $dadosStoreName = mysqli_query($con, $queryStoreName) or die($mysqli->error);
    while ($dadoStoreName = mysqli_fetch_assoc($dadosStoreName)) {
        $storeName = $dadoStoreName[ 'store_social_name'];
    }
