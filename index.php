<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tela de login</title>

    <!-- PASSO 6: Arquivo de estilo (CSS) -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="centralizado">

    <div class="caixa">

    <h1>Login</h1>

    <!-- PASSO 1: Formulário de login que envia os dados (POST) para o testeLogin.php validar -->
    <form action="testeLogin.php" method="post">

        <!-- PASSO 2: Campo de email -->
        <p>

            <label for="email">Email</label>

            <input type="text" name="email" id="email"

            minlength="5"

            required>

        </p>

        <!-- PASSO 3: Campo de senha (mínimo de 8 caracteres) -->
        <p>

            <label for="senha">Senha</label>

            <input type="password" name="senha" id="senha"

            minlength="8">

        </p>

        <!-- PASSO 4: Botão que envia o formulário -->
        <p class="acao">

            <input type="submit" name="submit" value="Enviar">

        </p>

    </form>

    <!-- PASSO 5: Link para a página de cadastro de novos usuários -->
    <a class="link" href="cadastro.php">Criar conta</a>

    </div>

</body>

</html>
