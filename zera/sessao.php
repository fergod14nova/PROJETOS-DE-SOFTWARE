<?php
    // esse arquivo cuidará de iniciar a seção do usuário e pegar seus dados
    

    // CONECTANDO BANCO DE DADOS
    include_once "banco/connectar_banco.php";

    // IDENTIFICANDO USUÁRIO
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    // PEGAR OS DADOS NO BANCO
    $busca_dados = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha';"; //query sql
    $sql = mysqli_query($banco,$busca_dados); //executando query
    $resultado = mysqli_fetch_array($sql); //colocando os resultados em uma variável

    // COLOCAR OS DADOS EM VARIÁVEIS
    $nome = $resultado['nome'];
    $cpf = $resultado['cpf'];
    $rg = $resultado['rg'];
    $endereco = $resultado['endereco'];
    $bairro = $resultado['bairro'];
    $cidade = $resultado['cidade'];
    $uf = $resultado['uf'];
    $telefone = $resultado['telefone'];

    // CRIANDO SESSÃO DE CPF -> PARA CONSULTA DE DENUNCIAS
    $_SESSION['cpf_consultar'] = $resultado['cpf'];

?>