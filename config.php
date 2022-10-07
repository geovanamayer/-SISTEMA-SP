<?php
    $dbhost = "localhost";
    $dbUsername = "postgres";
    $dbPassword = "senha";
    $dbName = "grupo_superpao_banco_usuarios";
    
    $conexao = pg_connect("host=$dbhost dbname=$dbName user=$dbUsername password=$dbPassword");

    if(!$conexao)
    // {
    //     echo "Erro";
    // } else
    // {
        echo "CADASTRADO ";
    // }

?>




