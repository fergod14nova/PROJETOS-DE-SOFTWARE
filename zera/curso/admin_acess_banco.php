<?php
    // criando conexão com o banco de dados
    $link = new mysqli("localhost","root","","boson");

    if(!$link){
        echo "falha na conexão";
    }

    // recebendo dados do formulário
    $user = $_POST['nome'];
    $pass = $_POST['senha'];

    // encriptografando senha
    $hashsenha = trim(password_hash($pass, PASSWORD_DEFAULT));
    // trim retira os espaços entre a string

    // criando  query
    $inserir = "INSERT INTO administradores VALUES('$user','$hashsenha');";

    // inserindo query
    $sql = mysqli_query($link,$inserir);

    if(!$sql){
        echo "Falha ao cadastrar administradores";
        die();
    }
    else{
        echo "<a href='admin.php'>Retornar</a>";
    }

    // verificando se a senha confere
    if(password_verify($pass,$hashsenha)){
        echo "</br>senha criptografada: ".$hashsenha;
        echo "</br>senha sem criptografia: ".$pass;
    }
    else{
        echo "senhas não conferem";
    }
?>