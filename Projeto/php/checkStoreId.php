<?php
    session_start();
    include('./php/connection.php');

    $userId = $_SESSION['userID'];

    $queryStoreid = "SELECT * FROM Store where user_admin_id = '{$userId}'";
    $dadosStoreid = mysqli_query($con, $queryStoreid) or die($mysqli->error);
    while ($dadoStoreid = mysqli_fetch_assoc($dadosStoreid)) {
        $storeId = $dadoStoreid['store_id'];
    }