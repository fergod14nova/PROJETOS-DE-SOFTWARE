<?php
    require_once "connectar_banco.php";
?>    

<?php
    // recebendo dados
    $id_user = $_POST['cpf'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $endereco = $_POST['rua'];
    $fone = $_POST['fone'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['uf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $autenticado = "false";
    
    // Inserindo dados no bando de dados
    $sql_insert = "INSERT INTO usuarios VALUES(
        '$id_user',
        '$nome',
        '$cpf',
        '$rg',
        '$endereco',
        '$bairro',
        '$cidade',
        '$estado',
        '$email',
        '$senha',
        '$fone',
        '$autenticado'
    )";

    // testando se deu certo
    if($banco->query($sql_insert)===TRUE){
        echo "<script>
            window.alert('usuário cadastrado com sucesso!');
            window.location.replace('../denuncia.php');
        </script>";
        // aqui, usamos um scrip js para redirecionar o usuário a página de denuncias
    }
    else{
        echo "não foi possível inserir dados";
        die();
        // caso não seja possível inserir os dados, irá aparecer essa mensagem.
    }
    $banco->close();
?>

<!-- Pronto, aqui deu tudo certo! -->