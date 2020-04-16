<?php
    // RECOLHENDO DADOS DO FORMULÁRIO
    $user = $_POST['frm_nome'];
    $pass = $_POST['frm_senha'];

    // RESOLVENDO O PROBLEMA DOS CAMPOS VAZIOS COM LAÇO IF ENCADEADO
    if(!$user || $pass ==""){
        echo "<script>
        window.alert('Preencha os campos');
        window.location.href='login_admin.php';
        </script>";
    }
    elseif(!$user && $pass ==""){
        echo "<script>
        window.alert('Preencha os campos');
        window.location.href='login_admin.php';
        </script>";
    }
    
    // VERIFICAR SE O USUÁRIO ESTÁ CADASTRADO
    $link = new mysqli("localhost","root","","boson"); //conexão com o banco de dados
    $sql = "SELECT * FROM administradores WHERE nome='$user' and senha='$pass'";
    $query = mysqli_query($link,$sql);

    /* nem eu entendi como essa porra funcionou, vou tentar explicar
    caso o resultado NÃO for maior ou igual a 1, execute o bloco verdadeiro 'if',
    se o resultado for igual ou maior que 1, execute o bloco falso 'else'*/

    if(!$resultado = mysqli_fetch_array($query)>=1){
        echo "<script>
        window.alert('Usuário Não Cadastrado!');
        window.location.href='login_admin.php';
        </script>";
    }
    else{
        // INICIANDO SESSÃO
        session_start();

        // CRIANDO SESSÃO DO USUÁRIO
        $_SESSION['usuario'] = $user;
        $_SESSION['senha'] = $pass;

        // REDIRECIONANDO PARA PRÓXIMA PÁGINA
        echo "<script>
            window.alert('Usuário Logado com sucesso!');
            window.location.href='index_admin.php';
        </script>";
    }
?>