<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    <title>Login</title>

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
                border-radius: 5px;
                text-align: left;
                font-family: 'Bebas Neue', cursive;
                margin: 15px; padding: 15px;
            }

            #leg {
                text-align: center;
                font-family:'Fjalla One', sans-serif;
            }

            a,input,button,label {
                font-family: 'Arial', sans-serif;
            }
            
            #logo{
                width: 200px;
                height: 100px;
            }
        </style>
    <!-- CONFIGURAÇÕES DA PÁGINA -->
</head>
<body>
    <div class="externo">
        <div class="interno">
                
              <form action="acesso_banco.php" method="POST">
                  <!-- acima estou encaminhando esse formulário para o arquivo que contém os dados do banco de dados, o método para envio das informações será POST -->
                  <legend id="leg"><img src="img/logo.png" alt="acessar o sistema" class="img" id="logo"></legend>
                  <!-- aqui estou colocando uma imagem como título do form -->
                  
                  <div class="form-group">
                      <label for="email">Digite o seu E-Mail:</label>
                      <input type="email" name="email" id="form-email" class="form-control" placeholder="aluno@gmail.com">
                  </div>
                  <div class="form-group">
                      <label for="senha">Digite sua Senha:</label>
                      <input type="password" name="senha" id="form-senha" class="form-control" placeholder="********">
                  </div>
                  
                  <a href="recomperar-senha.php" class="">Perdeu a senha?</a>

                  <div class="dropdown-divider"></div>

                  <a href="form-cad.php" class="btn btn-outline-success">Criar Conta</a>
                  <button type="submit" class="btn btn-primary">Entrar</button>
                  <br>
              </form>
        </div>
    </div>
</body>
</html>