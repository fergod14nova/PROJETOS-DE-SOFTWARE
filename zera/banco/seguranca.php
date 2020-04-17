<?php
    // RECOLHENDO DADOS DO FORMULÁRIO
    $email = $_POST['frm_email'];
    $senha = $_POST['frm_senha'];

    // RESOLVENDO O PROBLEMA DOS CAMPOS VAZIOS COM LAÇO IF ENCADEADO
    if(!$email || $senha ==""){ //uso do operador lógico OU
        echo "<script>
        window.alert('Email e/ou Senha não foram preenchidos!');
        window.location.href='../login.php';
        </script>";
    }
    elseif(!$email && $senha ==""){ //uso do operador lógico AND
        echo "<script>
        window.alert('Email e/ou Senha não foram preenchidos!');
        window.location.href='../login.php';
        </script>";
    }
    
    // VERIFICAR SE O USUÁRIO ESTÁ CADASTRADO
    $link = new mysqli("localhost","root","","sisweb"); //conexão com o banco de dados
    $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'"; //comando para buscar registros com esse email e senha
    $query = mysqli_query($link,$sql); //inserindo comando no banco de dados

    /* nem eu entendi como essa porra funcionou, vou tentar explicar:
    A função mysqli_fetch_array retorna o número de linhas afetadas pela query executada
    caso o resultado NÃO for maior ou igual a 1, execute o bloco verdadeiro 'if',
    se o resultado for igual ou maior que 1, execute o bloco falso 'else'
    o sinal de ! significa NÃO, é o operador lógico NAND
    */

    if(!$resultado = mysqli_fetch_array($query)>=1){
        echo "<script>
        window.alert('Usuário Não Cadastrado OU dados incorretos!');
        window.location.href='../login.php';
        </script>";
    }
    else{
        // INICIANDO SESSÃO
        session_start();

        // CRIANDO SESSÃO DO USUÁRIO
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['autenticado'] = TRUE;
        

        // REDIRECIONANDO PARA PRÓXIMA PÁGINA
        header("Location: ../home.php"); //direcionando para a página home
    }
?>