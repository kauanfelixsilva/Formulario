<?php 
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'Formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno)
        //{
          //  echo "Erro";
        //}
    //else{
      //  echo"Conexão conectado com sucesso";
    //}
?>