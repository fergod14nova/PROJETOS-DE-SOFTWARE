
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon/favicon.ico"/>
    
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
    
    <div class="d-flex flex-row bd-highlight" id="img">
    <!-- 
        para deixar o menu a direita coloque 'flex-row-reverse';
         Cores dos botões segundo o bootstrap:
            primary - Azul
            secondary - Cinza
            success - Verde
            info - Azul claro
            warning - Amarelo
            danger - Vermelho
     -->
        
        <!-- -----------------------------Botões do menu------------------------------- -->

        <!-- 
            ATENÇÃO: CUIDADO COM A DIV ABAIXO, TENHO QUE USAR MYSQL PARA EDITAR O SEU CONTEÚDO
         -->

        <!-- Perfil do usuário -->
        <?php
            session_start();
            if(!$_SESSION['autenticado']){
                echo "<script>
                    window.alert('Usuário Não Logado!');
                    window.location.href='login.php';
                </script>";
                session_destroy();
            }
            $user = $_SESSION['email'];
            include_once "sessao.php";
        ?>
        
        <!-- 
            ATENÇÃO: CUIDADO COM A DIV ABAIXO, TENHO QUE USAR MYSQL PARA EDITAR O SEU CONTEÚDO
         -->

        <div class="btn-group">
            <div class="dropdown">
                <a href="home.php" class="btn btn-outline-primary btn-lg" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">PÁGINA PRINCIPAL</a>
            </div>
        </div>


        <!-- segundo botão -->
        <div class="btn-group">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Denúncia
            </button>
            <!-- opção do botão acima -->
            <div class="dropdown-menu">
                <a href="denuncia.php" class="dropdown-item">Nova Denúncia</a>
                <a href="historico.php" class="dropdown-item">Consultar Denúncia</a>
            </div>
        </div>
        
        <div class="btn-group">
            <div class="dropdown">
                <a href="deslogar.php" class="btn btn-outline-danger btn-lg" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">SAIR</a>
            </div>
        </div>
        <!-- fim do ultimo botão -->

    </div>

    <div class="dropdown-divider"></div>

</body>
</html>
