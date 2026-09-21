<?php

// PASSO 1: Iniciar a sessão para guardar quem está logado
session_start();


// PASSO 2: Só processar se o formulário de login foi enviado e email/senha não estão vazios
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    // PASSO 3: Incluir a conexão com o banco de dados
    include_once('config.php');

    // PASSO 4: Pegar os dados digitados no formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // PASSO 5: Montar e executar a consulta procurando um usuário com esse email e senha
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    // PASSO 6: Se não encontrou nenhum usuário, limpa a sessão e volta para o login
    if (mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        //print_r('Não existe');

        header('Location: index.php');
        exit;
    }
    // PASSO 7: Se encontrou, guarda email e senha na sessão e vai para a página home
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: home.php');
    }
}
// PASSO 8: Se acessou o arquivo direto (sem enviar o formulário), volta para o login
else
{
    header('Location: index.php');
    exit;
}

?>
