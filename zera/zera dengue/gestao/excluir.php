<?php
    // conexão com o banco
    $conn = new mysqli("localhost","root","","sisweb");

    // CAPTURANDO O CPF DO FORMULÁRIO
    $cpf = $_POST['cpf'];

    // criando a query
    $sql = "DELETE FROM usuarios WHERE cpf='$cpf'";

    // executando
    mysqli_query($conn,$sql) or die("Falha ao excluir usuário");

    echo "<script>window.alert('usuário excluido');</script>";
    echo "<a href='consultar_usuarios_banco.php'>Clique aqui para verificar os usuários existentes</a>";
    echo "</br>";
    echo "<a href='excluir_usuario_banco.php'>Clique aqui para excluir outro usuário</a>";

    mysqli_close($conn);
?>