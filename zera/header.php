
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    
    <title>Zer@Dengue</title>

    <!-- CDN BOOTSTRAP FRAMEWORK -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CDN BSTP JS,SQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Bebas+Neue|Fjalla+One&display=swap" rel="stylesheet">
    <!-- font-family: 'Anton', sans-serif;font-family: 'Fjalla One', sans-serif; font-family: 'Bebas Neue', cursive; -->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/config.css">
    
    <!-- MEDIA GUERIES -->
    <link rel="stylesheet" type="text/css" href="css/query.css">

    <style>
        .btn-group, a{
            font-family: 'Bebas Neue', cursive;
        }
        *{
            font-family: 'roboto', sans-serif;
        }
    </style>

</head>

<body>

    <div class="col-xs-2 col-md-2">
        <img src="img/logo.png" alt="" class="img-fluid" id="img">
    </div>
    
    <div class="d-flex flex-row-reverse bd-highlight" id="img">
        
        <!-- essa propriedade é o que deixa o menu na direita -->

        
        <!-- Cores dos botões segundo o bootstrap
            primary - Azul
            secondary - Cinza
            success - Verde
            info - Azul claro
            warning - Amarelo
            danger - Vermelho
        -->
        
        <!-- -----------------------------Botões do menu------------------------------- -->
        <!-- Principal -->
        <div class="btn-group">
            <div class="dropdown">
                <a href="home.php" class="btn btn-dark" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">PÁGINA PRINCIPAL</a>
            </div>
        </div>

        <!-- Primeiro Botão -->
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sobre
            </button>
            <!-- opção do botão acima -->
            <div class="dropdown-menu">
                <a href="sobre.php" class="dropdown-item">Contatos</a>
                <a href="zera.html" class="dropdown-item">Sistema Zera</a>
            </div>
        </div>
        <!-- fim do primeiro botão -->

        <!-- segundo botão -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Denúncia
            </button>
            <!-- opção do botão acima -->
            <div class="dropdown-menu">
                <a href="denuncia.php" class="dropdown-item">Nova Denúncia</a>
                <a href="historico.php" class="dropdown-item">Consultar Denúncia</a>
            </div>
        </div>
        <!-- fim do  segundo botão -->

        <!-- <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Entrar
            </button>
            
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Já tenho conta</a>
                <a href="#" class="dropdown-item">criar conta</a>
                
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Administrador</a>
            </div>
        </div> -->




        <!-- 
            ATENÇÃO: CUIDADO COM A DIV ABAIXO, TENHO QUE USAR MYSQL PARA EDITAR O SEU CONTEÚDO
         -->
        <!-- Perfil do usuário -->
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User
            </button>
            <div class="dropdown-menu">
                <li class="dropdown-item">Endereço:</li>
                <li class="dropdown-item">CPF:</li>
                <li class="dropdown-item">Telefone:</li>
            <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item">Alterar Dados</a>
                <a href="home.php" class="dropdown-item">Voltar</a>
                <a href="index.php" class="dropdown-item">Sair</a>
            </div>
        </div>
        <!-- fim do ultimo botão -->

    </div>

    <div class="dropdown-divider"></div>

    
    
</body>
</html>
