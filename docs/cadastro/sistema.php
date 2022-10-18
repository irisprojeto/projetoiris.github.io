<?php
    session_start();
    //print_r($_SESSION);

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>alo</title>
</head>
<body>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <button><a href="sair.php">Desconectar</a></button>
</body>
</html>