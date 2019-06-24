<?php
if (!isset($_SESSION['userLogado'])) {
    header('Location: ../login.php');
}
?>