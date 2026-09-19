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
            <input type="text" name="user" id="user"
            placeholder="Email"
            minlength="5"
            require>
        </p>
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha"
            minlength="8">
        </p>
        <p>  
        <button>
            <a href="home.php">Entrar</a>
        </button>
        </p>
    </form>

    <p><button><a href="cadastro.php">Criar conta</a></button></p> 
</body>
</html>