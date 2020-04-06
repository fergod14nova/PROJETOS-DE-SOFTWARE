<?php
    // conexão
    $conn = new mysqli("localhost","root","","sisweb");
    
    // testando a conexão
    // if($conn->connect_error){
    //     die("sem conexão".mysqli_connect_error());
    // }
    // else{
    //     echo "<script>window.alert('conexão bem sucedida!');</script>";
    // }
   
    // recebendo os valores do formulário
    $stranger = $_POST['stranger'];
    $descricao = $_POST['desc'];
    $endereco = $_POST['endereco'];
    $logradouro = $_POST['logradouro'];
       
    // valores padrões
    $msg = "indefinido";
    $status_indefinido = 'enviado';
    $resposta = 'analisando situação';
    
    // enviando os dados para o banco
    $sql_insert = "INSERT INTO `denuncias` VALUES(
        `$stranger`,
        `$descricao`,
        `$endereco`,
        `$logradouro`,
        `$msg`,
        `$status_indefinido`,
        `$resposta`
    )";
       
    
    // testando a inserção dos dados
    if($conn->query($sql_insert)===TRUE){
        echo "dados inseridos";
    }
    else{
        echo "falha de novo porra".$sql_insert.$conn->error;
    }

    // if($banco->query($sql_insert)===TRUE){
    //     echo "<script>
    //         window.alert('usuário cadastrado com sucesso!');
    //         window.location.replace('../denuncia.php');
    //     </script>";
    //     // aqui, usamos um scrip js para redirecionar o usuário a página de denuncias
    // }
    // else{
    //     echo "não foi possível inserir dados";
    //     echo 'Código de erro:'.mysqli_errno( $banco ).'<br>';
    //     echo 'Mensagem de erro:'.mysqli_error( $banco ).'<br>';
    //     die();
    //     // caso não seja possível inserir os dados, irá aparecer essa mensagem.
    // }

   
    
?>

