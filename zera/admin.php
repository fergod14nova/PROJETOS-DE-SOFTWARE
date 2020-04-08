<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle - Gestão</title>
</head>
<body>
    <?php
        $conexao = new mysqli("localhost","root","","sisweb");
        // criando a conexão com o banco

        
        if($conexao->connect_errno){
            echo "falha ao conectar: (".$conexao->connect_errno.")".$conexao->connect_error;
            // connect_errno -> retorna o código do erro
            // connect_error -> retorna uma string descrevendo o erro da função conect
        }
        else {
            echo "conexão bem sucedida!";
        }
        // testando a conexão, caso apareça algum erro ele será mostrado

        
    ?>
</body>
</html>