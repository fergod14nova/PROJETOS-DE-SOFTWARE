<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    <title>Página Inicial</title>

    <!-- CDN BOOTSTRAP FRAMEWORK -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CDN BSTP JS,SQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Bebas+Neue|Fjalla+One&display=swap" rel="stylesheet">
    <!-- font-family: 'Anton', sans-serif;font-family: 'Fjalla One', sans-serif; font-family: 'Bebas Neue', cursive; -->

    <!-- <link rel="stylesheet" href="index.css"> -->

    <!-- CONFIGURAÇÕES DA PÁGINA -->
        <style>
            body{
                margin: 0;
            }

            .externo {
                width: 100vw;
                height: 100vh;
                /* definindo altura e largura da viewport, pra isso temos que usar essas unidades de medida esquisita pra porra */
                background: #6c7a89;
                display: flex;
                /* definindo o display pra flex, isso é importante por conta do comando abaixo! */
                flex-direction: row;
                /* o comando acima faz com que os itens fiquem alinhados horizontalmente em lina 'row' */
                justify-content: center;
                /* também serve para alinhar os item no centro, segue o comando de cima */
                align-items: center;
            }

            .interno {
                width: 400px;
                height: 400px;
                background: #fff;

                border-radius: 20px;
                text-align: center;

                font-family: 'Bebas Neue', cursive;


                margin: 15px; padding: 15px;

                
            }
        </style>
    <!-- CONFIGURAÇÕES DA PÁGINA -->
</head>
<body>
        <div class="externo">
            <div class="interno">
                <h1 class="h1">Bem vindo ao App Zer@Dengue</h1>
                <h4 class="h4">Versão WEB</h4>
                    <!-- vamos usar links ao inves de botões, no final vai dar no mesmo -->
                    <a href="login.php" class="btn btn-outline-success btn-lg btn-block" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">LOGIN</a>
                    <a href="form-cad.php" class="btn btn-outline-primary btn-lg btn-block" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">CRIAR CONTA</a>
                    <!-- <button type="button" class="btn btn-success btn-lg btn-block">LOGIN</button> -->
                    <!-- <button type="button" class="btn btn-outline-dark btn-lg btn-block">CRIAR CONTA</button> -->
                
                <div class="dropdown-divider"></div>
                    <?php
                        echo "<a href='sobre.php' class='btn btn-outline-dark' role='button' id='dropdownMenuLink' aria-haspopup='true' aria-expanded='false'>Precisa de ajuda?</a>";
                    ?>
                <br>
            </div>
        </div>
</body>
</html>