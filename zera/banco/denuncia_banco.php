<?php
    // conectando ao banco de dados
    require_once "connectar_banco.php";

    // recebendo dados do formulário
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $desn = $_POST['desc'];
    $img = "imagem não tratada";
    $sts = "enviado";
    $respo = "em análise";
    $autenticado = false;

    // inserindo dados
    $sql_insert = "INSERT INTO denuncias VALUES(
        '$cpf',
        '$endereco',
        '$desn',
        '$img',
        '$sts',
        '$respo',
        '$autenticado'
    )";

    // testando se deu certo
    if($banco->query($sql_insert)===TRUE){
        echo "<script>
            window.alert('usuário cadastrado com sucesso!');
            window.location.replace('../historico.php');
        </script>";
        // aqui, usamos um scrip js para redirecionar o usuário a página de histórico
    }
    else{
        echo "não foi possível inserir dados";
        die();
        // caso não seja possível inserir os dados, irá aparecer essa mensagem.
    }
    $banco->close();
?>