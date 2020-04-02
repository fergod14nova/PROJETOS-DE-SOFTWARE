<?php
    $banco = new mysqli("localhost","root","","sisweb");
    // configurações do banco de dados

    //colocando o PHP no <UTF-8>
    $banco->query("SET NAMES 'utf8' ");
    $banco->query("SET character_set_connection=utf8");
    $banco->query("SET cgaracter_set_client=utf8");
    $banco->query("SET character_set_results=utf8");

    // testando a conexão, não apague o código abaixo, apenas deixe-o comentado, caso precise use-o para testar a conexão com o banco de dados
    // if ($banco->connect_errno) {
    //     echo "<p>encontrei um erro: $banco->errno --> $banco->connerct_error </p>";
    //     die();
    // }
    // else echo"conexão bem sucedida!";

    
?>