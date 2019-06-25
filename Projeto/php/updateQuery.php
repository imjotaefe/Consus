<?php
    session_start();
    include_once("connection.php");
    include_once("checkStoreId.php");

    $debtor_id = filter_input(INPUT_POST, 'modalCpf', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'modalValor', FILTER_SANITIZE_STRING);
    $obs = filter_input(INPUT_POST, 'modalObs', FILTER_SANITIZE_STRING);
    
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');

    $queryUpdateDebt = "UPDATE Debt
                        SET debt_value = '{$valor}', debt_observation = '{$obs}', debt_updatedAt = '{$data}'
                        WHERE debtor_id = '{$debtor_id}'";
    mysqli_query($con, $queryUpdateDebt);
    header('Location: ../suaLoja.php');