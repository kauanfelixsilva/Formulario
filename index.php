<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tela de login</title>

</head>

<body>

    <h1>Login</h1>

    <!-- PASSO 1: Formulário de login que envia os dados (POST) para o testeLogin.php validar -->
    <form action="testeLogin.php" method="post">

        <!-- PASSO 2: Campo de email -->
        <p>

            <input type="text" name="email" id="email"

            placeholder="Email"

            minlength="5"

            require>

        </p>

        <!-- PASSO 3: Campo de senha (mínimo de 8 caracteres) -->
        <p>

            <input type="password" name="senha" id="senha"

            placeholder="Senha"

            minlength="8">

        </p>

        <!-- PASSO 4: Botão que envia o formulário -->
        <p>

            <input type="submit" name="submit" value="Enviar">

        </p>

    </form>

    <!-- PASSO 5: Link para a página de cadastro de novos usuários -->
    <p><button><a href="cadastro.php">Criar conta</a></button></p>

</body>

</html>
