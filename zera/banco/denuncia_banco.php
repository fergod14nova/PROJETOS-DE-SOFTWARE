<?php
    session_start();
    // conectando ao banco de dados
    require_once "connectar_banco.php";
    require_once "../sessao.php";
    // recebendo dados do formulário
    $frm_cpf = $_SESSION['cpf_consultar'];
    $frm_endereco = $_POST['endereco'];
    $frm_desn = $_POST['desc'];
    $frm_img = "imagem não tratada";
    $frm_sts = "enviado";
    $frm_respo = "em análise";

    // chave primária
    date_default_timezone_set('America/Sao_Paulo');
    $id_denuncia = md5(trim(date('d/m/Y H:i:s')));
    /*
        EXPLICANDO A CHAVE PRIMÁRIA
        -é a data e hora, sem espaços e criptografada com o protocolo hash MD5
    */


    // inserindo dados
    $sql_insert = "INSERT INTO denuncias VALUES(
        '$id_denuncia',
        '$frm_cpf',
        '$frm_endereco',
        '$frm_desn',
        '$frm_img',
        '$frm_sts',
        '$frm_respo'
    )";

    // testando se deu certo
    if($banco->query($sql_insert)===TRUE){
        echo "<script>
            window.alert('Denuncia Feita!');
            window.location.replace('../home.php');
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