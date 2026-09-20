<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tela de login</title>

</head>

<body>

    <h1>Login</h1>

    <form action="testeLogin.php" method="post">

        <p>

            <input type="text" name="email" id="email"

            placeholder="Email"

            minlength="5"

            require>

        </p>

        <p>

            <input type="password" name="senha" id="senha"

            placeholder="Senha"

            minlength="8">

        </p>

        <p>

            <input type="submit" name="submit" value="Enviar">

        </p>

    </form>

    <p><button><a href="cadastro.php">Criar conta</a></button></p>

</body>

</html>