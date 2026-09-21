<?php

    session_start();

    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");

    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true ))

    {

        header('Location: index.php');

        exit;

    }

    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistemas</title>

</head>

<body>

    <button><a href="sair.php">Sair</a></button>

    <h1>Seja bem-vindo</h1>

</body>

</html>