<?php
    session_start();
    include_once("connection.php");
    include_once("checkStoreId.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
    $obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);

    $queryCheckInadimp = "SELECT debtor_cpf FROM Debtor WHERE debtor_cpf = '{$cpf}'";
    $resultCheckInadimp = mysqli_query($con, $query);
    $rowCheckInadimp = mysqli_num_rows($resultCheckInadimp);
    
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');

    if ($rowCheckInadimp == 0) {
        $queryInsertInadimp = "INSERT INTO `Debtor`(`debtor_name`, `debtor_cpf`, `debtor_rg`, `debtor_createdAt`, `debtor_updatedAt`) VALUES('$nome','$cpf','$rg','$data','$data')";
        mysqli_query($con, $queryInsertInadimp);
    }
    
    $queryInsertDebt = "INSERT INTO `Debt`(`store_id`, `debtor_id`, `debt_updatedAt`, `debt_createdAt`, `debt_observation`, `debt_value`) VALUES('$storeId','$cpf','$data','$data','$obs','$valor')";
    mysqli_query($con, $queryInsertDebt);



