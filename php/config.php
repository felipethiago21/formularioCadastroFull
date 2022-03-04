<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //Teste conexão banco de dados

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>