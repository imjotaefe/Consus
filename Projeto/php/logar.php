<?php
session_start();
include('connection.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../login.php');
    exit();
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$queryLogin = "SELECT user_id FROM User WHERE user_login = '{$usuario}' AND user_pass = '{$senha}'";

$resultLogin = mysqli_query($con, $queryLogin);

$rowLogin = mysqli_num_rows($resultLogin);

if ($rowLogin == 1) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['userLogado'] = true;
    header('Location: ../index.php');
    while ($dadoLogin = mysqli_fetch_assoc($resultLogin)) {
        $_SESSION['userID'] =  $dadoLogin["user_id"];
    }
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    $_SESSION['userLogado'] = false;
    header('Location: ../login.php');
    exit();
}



