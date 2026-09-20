<?php

    if(isset($_POST['submit']))

        {

        //print_r('Nome: ' . $_POST['nome']);

        //print_r('<br>');

        //print_r('Email: ' . $_POST['email']);

        //print_r('<br>');

        //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);

        //print_r('<br>');

        //print_r('Telefone: ' . $_POST['telefone']);

        //print_r('<br>');

        //print_r('Sexo: ' . $_POST['sexo']);

        //print_r('<br>');

        //print_r('CPF: ' .   $_POST['cpf']);

        //print_r('<br>');

        //print_r('Cidade: ' . $_POST['cidade']);

        //print_r('<br>');

        //print_r('Estado: ' . $_POST['estado']);

        //print_r('<br>');

        //print_r('Endereço: ' .$_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];

        $senha = $_POST['senha'];

        $email = $_POST['email'];

        $data_nascimento = $_POST['data_nascimento'];

        $telefone = $_POST['telefone'];

        $sexo = $_POST['sexo'];

        $cpf = $_POST['cpf'];

        $cidade = $_POST['cidade'];

        $estado = $_POST['estado'];

        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, data_nascimento, telefone, sexo, cpf, cidade, estado, endereco) VALUES ('$nome', '$senha', '$email', '$data_nascimento', '$telefone', '$sexo', '$cpf', '$cidade', '$estado', '$endereco')");

        }

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario</title>

</head>

<body>

    <h1>Cadastro</h1>

    <form action="cadastro.php" method="post" autocomplete="on">

        <fieldset>

            <h2>

                <legend>Dados Pessoais</legend>

            </h2>

            <p>

                <label for="nome">Nome Completo</label>

                <input type="text" name="nome" id="nome"

                placeholder="Seu nome"

                required>

            </p>

            <p>

                <label for="senha">Senha</label>

                <input type="password" name="senha" id="senha"

                placeholder="Digite sua senha"

                minlength="8"

                require>

            </p>

            <p>

                <label for="email">Email</label>

                <input type="email" name="email" id="email"

                placeholder="Seu E-mail"

                required>

            </p>

            <p>

                <label for="data_nascimento">Data de Nascimento</label>

                <input type="date" name="data_nascimento" id="data_nascimento"

                required>

            </p>

            <p>

                <label for="telefone">Telefone</label>

                <input type="text" name="telefone" id="telefone"

                           pattern="\(\d{2}\)\s9\d{4}-\d{4}"

                           maxlength="15"

                           placeholder="Seu telefone"

                           required>

            </p>

            <p>

                <label for="sexo">Sexo</label><br>

                <input type="radio" name="sexo" id="sexmas" value="Masculino" required> <label for="sexomas">Masculino</label>

                <input type="radio" name="sexo" id="sexofem" value="Feminino" required> <label for="sexofem">Feminino</label>

                <input type="radio" name="sexo" id="sexoutro" value="Outro" required> <label for="sexoutro">Outro</label>

            </p>

           <p>

               <label for="cpf">CPF</label>

               <input type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"

               maxlength="14"

               placeholder="Seu CPF"

               required>

           </p>

           <p>

               <label for="cidade">Cidade</label>

               <input type="text" name="cidade" id="cidade"

               maxlength="35"

               placeholder="Sua cidade"

               required>

           </p>

           <p>

               <label for="estado">Estado  </label>

               <select name="estado" id="estado" required>

               <option value="">Selecione</option>

               <option value="ac">AC</option>

               <option value="al">AL</option>

               <option value="ap">AP</option>

               <option value="am">AM</option>

               <option value="ba">BA</option>

               <option value="ce">CE</option>

               <option value="df">DF</option>

               <option value="es">ES</option>

               <option value="go">GO</option>

               <option value="ma">MA</option>

               <option value="mt">MT</option>

               <option value="ms">MS</option>

               <option value="mg">MG</option>

               <option value="pa">PA</option>

               <option value="pb">PB</option>

               <option value="pr">PR</option>

               <option value="pe">PE</option>

               <option value="pi">PI</option>

               <option value="rj">RJ</option>

               <option value="rn">RN</option>

               <option value="rs">RS</option>

               <option value="ro">RO</option>

               <option value="rr">RR</option>

               <option value="sc">SC</option>

               <option value="sp">SP</option>

               <option value="se">SE</option>

               <option value="to">TO</option>

               </select>

           </p>

           <p>

            <label for="endereco">Endereço</label>

            <input type="text" name="endereco" id="endereco">

           </p>

           <p>

            <input type="submit" name="submit" value="Enviar">

           </p>

        </fieldset>

    </form>

    <p>

        <a href="index.php">Voltar</a>

    </p>

    <script src="script/script.js"></script>

</body>

</html>