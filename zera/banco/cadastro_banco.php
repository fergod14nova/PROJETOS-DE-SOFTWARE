<?php
    require_once "connectar_banco.php"; //conexão com o banco de dados

    // ESSA PÁGINA RECEBE OS DADOS DO FORMULÁRIO DE CADASTRO 
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

    // impedindo o cadastro de um usuário já cadastrado
    $verifica = "SELECT * FROM usuarios WHERE cpf='$cpf';"; //QUERY MYSQL
    $sql = mysqli_query($banco,$verifica); //inserindo query no banco
    if($resultado = mysqli_fetch_array($sql)>=1){ //vendo se deu certo, caso retorne um número de linhas afetadas
        // nesse caso não tem o ! de negação, pois queremos sabe se há linhas afetadas
        echo "<script>
            window.alert('ERRO: usuário Já cadastrado!');
            window.location.replace('../form-cad.php');
        </script>";
    }

    // CASO DÊ CERTO
    elseif($banco->query($sql_insert)===TRUE){ //maneira Orientada a Objetos para ver se houve linhas afetadas pela query
        echo "<script>
            window.alert('usuário cadastrado com sucesso!');
            window.location.replace('../denuncia.php');
        </script>";
        // aqui, usamos um scrip js para redirecionar o usuário a página de denuncias
    }
    else{
        echo "FALHA AO INSERIR DADOS";
        die();
        // caso não seja possível inserir os dados, irá aparecer essa mensagem.
    }
    $banco->close();
?>

<!-- Pronto, aqui deu tudo certo! -->