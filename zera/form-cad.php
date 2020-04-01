<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="sistema de denuncias de focos de dengue">

    <!-- <meta http-equiv="refresh" content="5; url=form-cad.php"> -->
    

    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    <title>Criar Conta</title>

    <!-- CDN BOOTSTRAP FRAMEWORK -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CDN BSTP JS,SQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Bebas+Neue|Fjalla+One&display=swap" rel="stylesheet">
    <!-- font-family: 'Anton', sans-serif;font-family: 'Fjalla One', sans-serif; font-family: 'Bebas Neue', cursive; -->

    <!-- TAMANHOS NO BOOTSTRAP
        lg - grande
        sm - pequeno
        md - médio

        o número seguido do tamanho representa a proporção que será ocupado da tela, por exemplo md-5, significa 5 de 10 partes
    -->

    <style>

        *{
            padding: 0;
            margin: 0;
            font-family: 'arial', 'halvetica', sans-serif;
        }

        body{
            background-color: #6c7a89;
        }
        
        legend {
            font-family: 'Fjalla One', sans-serif;
        }

        #logo {
            width: 200px; height: 100px;          
        }
       
        #termos{
            border: 1px solid black;
            padding: 30px; 
            background-color: #2f2f2f;
            color: white;

        }

        form{
            background-color: white;
            padding: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        
        <div class="form-group">
            <form action="cadastro_banco.php" method="POST">
            <a href="index.php"><img src="img/logo.png" alt="" id="logo" class="img-fluid"></a>
                <!-- o comando acima esta direcionando os dados para um arquivo chamado de cadastro_banco.php, o método de envio é POST -->
                <div class="dropdown-divider"></div>
                <legend>CADASTRO DE PESSOA FÍSICA</legend>
                <div class="dropdown-divider"></div>

                <div class="form-row">
                    <!-- agrupamento de campos lado a lado: nome, cpf e rg -->
                    <div class="form-group col-sm-3">
                        <!-- campo nome -->
                        <label for="nome">Nome Completo:</label>
                        <input type="text" name="nome" id="" class="form-control" placeholder="jair messias bolsonaro" required>
                    </div>
                    <div class="form-group col-sm-3">
                        <!-- campo email -->
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="" class="form-control" placeholder="Digite apenas números" required>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="rg">RG:</label>
                        <input type="text" name="rg" id="" class="form-control" placeholder="Digite apenas números" required>
                    </div>
                </div>
                <!-- aqui acaba o agrupamento dos inputs lado a lado -->

                <fieldset class="form-group">
                    <legend>Endereço:</legend>
                    <div class="form-row">
                        <!-- criando mais um agrupamento de campos lado a lado -->
                        <div class="form-group col-sm-5">
                            <label for="rua">Rua:</label>
                            <input type="text" name="rua" id="" class="form-control" placeholder="Av.Castelo Branco">
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="num">Nº:</label>
                            <input type="number" name="num" id="" class="form-control" placeholder="666">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="logradouro">Logradouro:</label>
                            <select name="logradouro" id="" class="form-control">
                                <option value="avenida">avenida</option>
                                <option value="área">área</option>
                                <option value="distrito">distrito</option>
                                <option value="estrada">estrada</option>
                                <option value="fazenda">fazenda</option>
                            </select>
                        </div>
                    </div>
                    <!-- aqui acaba o agrupamento dos campos lado a lado -->

                    <div class="form-row">
                        <!-- e lá vamos nos, criando mais um agrupamento lado a lado, ainda dentro do fielset endereço -->
                        <div class="form-group col-sm-5">
                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" class="form-control" id="" placeholder="Centro">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" id="" class="form-control" placeholder="Remanso" required>
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="uf">UF:</label>
                            <input type="text" name="uf" class="form-control" id="" placeholder="BA" default="BA" required>
                        </div>
                    </div>
                </fieldset>

                <!-- vamos começar mais um fielset aqui, dessa vez separar os meios de contato -->
                <fieldset class="form-group">
                    <legend>Contato:</legend>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="jair@gmail.com" required>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="conf-email">E-mail Novamente</label>
                            <input type="email" name="confir-email" id="" class="form-control" placeholder="jair@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="senha">Digite uma senha:</label>
                            <input type="password" name="senha" id="" class="form-control" placeholder="**********" minlength="8" required>
                            <small class="form-text text-muted">Maior que 8 caractéres (letras e números)</small>
                            <!-- acima tem um bloco interessante, ele mostra uma dica abaixo do campo -->

                        </div>
                        <div class="form-group col-sm-3">
                            <label for="conf-senha">Repita a senha:</label>
                            <input type="password" name="confir-senha" id="" class="form-control" placeholder="**********" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-1">
                            <label for="ddd">DDD:</label>
                            <input type="number" name="ddd" id="" default="88" minlength="2" maxlength="3" placeholder="74" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                                <label for="fone">Telefone:</label>
                                <input type="text" name="fone" id="" class="form-control" placeholder="666666666" minlength="8" maxlength="9">
                                <small class="form-text text-muted">digite apenas números</small>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group" id="termos">
                    <h4 class="h4">Termos de uso:</h4>
                    <ol type="I">
                        <li>Todos os dados acima são verdadeiros;</li>
                        <li>Me responsabilizo por tudo o que fizer na plataforma;</li>
                        <li>Deixo a disposição informações pessoais e de Hardware;</li>
                        <li>Irei colaborar com a sociedade;</li>
                    </ol>
                    <small class="form-text">Ao clicar em <b>"ACEITAR"</b> declaro ter lido e estar de acordo com os termos estabelecidos.</small>
                </fieldset>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Aceitar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>