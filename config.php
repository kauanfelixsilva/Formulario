<?php

    // PASSO 1: Criar o banco de dados "Formulario" no phpMyAdmin com a tabela "usuarios"
    // PASSO 2: Definir os dados de acesso ao banco (servidor, usuário, senha e nome do banco)
    $dbHost = 'Localhost';

    $dbUsername = 'root';

    $dbPassword = '';

    $dbName = 'Formulario';

    // PASSO 3: Criar a conexão com o MySQL usando mysqli (essa variável $conexao é usada nos outros arquivos)
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // PASSO 4 (opcional): Testar se a conexão funcionou
    //if($conexao->connect_errno)

        //{

          //  echo "Erro";

        //}

    //else{

      //  echo"Conexão conectado com sucesso";

    //}

?>
