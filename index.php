<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="cadastro.php" method="post">
        <p>
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">
        </p>
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>

    <p><button><a href="cadastro.html">Criar conta</a></button></p> 
</body>
</html>