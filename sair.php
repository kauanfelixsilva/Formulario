<?php
// PASSO 1: Iniciar a sessão para ter acesso às variáveis de login
session_start();

// PASSO 2: Apagar os dados do usuário logado da sessão (logoff)
unset($_SESSION['email']);
unset($_SESSION['senha']);

// PASSO 3: Redirecionar de volta para a tela de login
header("Location: index.php");
?>
