<?php

    // PASSO 1: Iniciar a sessão para ler quem está logado
    session_start();

    // PASSO 2: Impedir que o navegador guarde essa página em cache (evita voltar para ela depois do logoff)
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");

    // print_r($_SESSION);

    // PASSO 3: Proteger a página - se não tem email/senha na sessão, manda de volta para o login
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true ))

    {

        header('Location: index.php');

        exit;

    }

    // PASSO 4: Guardar o email do usuário logado em uma variável
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

    <!-- PASSO 5: Botão de sair - chama o sair.php que apaga a sessão -->
    <button><a href="sair.php">Sair</a></button>

    <!-- PASSO 6: Conteúdo da página, visível só para quem está logado -->
    <h1>Seja bem-vindo</h1>

</body>

</html>
