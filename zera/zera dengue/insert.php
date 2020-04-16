<?php
    $link = new mysqli("localhost","root","","sisweb");
    
    // recebendo dados
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];

    // enviando
    $insert = "INSERT INTO `formulario` VALUES(`$nome`,`$idade`,`$email`,`$numero`);";

    
?>