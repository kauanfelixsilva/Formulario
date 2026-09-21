<?php

    // PASSO 1: Só executa o PHP quando o formulário de cadastro for enviado
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

        // PASSO 2: Incluir a conexão com o banco de dados
        include_once('config.php');

        // PASSO 3: Pegar cada campo enviado pelo formulário e guardar em variáveis
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

        // PASSO 4: Inserir os dados na tabela "usuarios" do banco
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, data_nascimento, telefone, sexo, cpf, cidade, estado, endereco) VALUES ('$nome', '$senha', '$email', '$data_nascimento', '$telefone', '$sexo', '$cpf', '$cidade', '$estado', '$endereco')");

        }

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario</title>

    <!-- PASSO 19: Arquivo de estilo (CSS) -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="pagina-larga">

    <h1 class="titulo-cadastro">Cadastro</h1>

    <!-- PASSO 5: Formulário que envia os dados (POST) para o próprio cadastro.php -->
    <form action="cadastro.php" method="post" autocomplete="on">

        <fieldset>

            <legend>Dados Pessoais</legend>

            <div class="campos">

            <!-- PASSO 6: Campo de nome -->
            <p>

                <label for="nome">Nome Completo</label>

                <input type="text" name="nome" id="nome"

                placeholder="Seu nome"

                required>

            </p>

            <!-- PASSO 7: Campo de senha (mínimo de 8 caracteres) -->
            <p>

                <label for="senha">Senha</label>

                <input type="password" name="senha" id="senha"

                placeholder="Digite sua senha"

                minlength="8"

                required>

            </p>

            <!-- PASSO 8: Campo de email -->
            <p>

                <label for="email">Email</label>

                <input type="email" name="email" id="email"

                placeholder="Seu E-mail"

                required>

            </p>

            <!-- PASSO 9: Campo de data de nascimento -->
            <p>

                <label for="data_nascimento">Data de Nascimento</label>

                <input type="date" name="data_nascimento" id="data_nascimento"

                required>

            </p>

            <!-- PASSO 10: Campo de telefone (formato (00) 90000-0000) -->
            <p>

                <label for="telefone">Telefone</label>

                <input type="text" name="telefone" id="telefone"

                           pattern="\(\d{2}\)\s9\d{4}-\d{4}"

                           maxlength="15"

                           placeholder="Seu telefone"

                           required>

            </p>

            <!-- PASSO 11: Escolha do sexo (radio buttons) -->
            <p>

                <span class="rotulo">Sexo</span>

                <span class="opcoes">

                    <span><input type="radio" name="sexo" id="sexomas" value="Masculino" required><label for="sexomas">Masculino</label></span>

                    <span><input type="radio" name="sexo" id="sexofem" value="Feminino" required><label for="sexofem">Feminino</label></span>

                    <span><input type="radio" name="sexo" id="sexoutro" value="Outro" required><label for="sexoutro">Outro</label></span>

                </span>

            </p>

           <!-- PASSO 12: Campo de CPF (formato 000.000.000-00) -->
           <p>

               <label for="cpf">CPF</label>

               <input type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"

               maxlength="14"

               placeholder="Seu CPF"

               required>

           </p>

           <!-- PASSO 13: Campo de cidade -->
           <p>

               <label for="cidade">Cidade</label>

               <input type="text" name="cidade" id="cidade"

               maxlength="35"

               placeholder="Sua cidade"

               required>

           </p>

           <!-- PASSO 14: Seleção do estado (lista com as UFs) -->
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

           <!-- PASSO 15: Campo de endereço -->
           <p>

            <label for="endereco">Endereço</label>

            <input type="text" name="endereco" id="endereco">

           </p>

           <!-- PASSO 16: Botão que envia o formulário -->
           <p class="acao">

            <input type="submit" name="submit" value="Enviar">

           </p>

            </div>

        </fieldset>

    </form>

    <!-- PASSO 17: Link para voltar à tela de login -->
    <p class="voltar">

        <a href="index.php">Voltar</a>

    </p>

    </div>

    <!-- PASSO 18: Carregar o JavaScript com as máscaras de CPF e telefone -->
    <script src="script/script.js"></script>

</body>

</html>