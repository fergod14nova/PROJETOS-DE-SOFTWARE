<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zer@Dengue - Home</title>
    <link rel="stylesheet" href="css/query.css" type="text/css">
    <link rel="stylesheet" href="css/config.css" type="text/css">

</head>
<body>
    
    <?php
        include_once "header.php"; // inserindo o menu de navegação
     
    ?>
    <div class="container">
        <h1>Bem vindo(a) <?php echo"$nome"; ?>!</h1>
        <div class="dropdown-divider"></div>
        <!-- DADOS PESSOAIS -->
        <h3>Dados Pessoais:</h3>
        
        <div class="table-responsive">
            <table class="table">
            <!-- MOSTRANDO DADOS DO USUÁRIO -->
                <thead class="thead-dark">
                    <!-- cabelalho da tabela -->
                    <tr>
                        <th>Nome Completo:</th>
                        <th>CPF:</th>
                        <th>RG:</th>
                        <th>Endereço:</th>
                        <th>Telefone:</th>
                        <th>E-mail:</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <?php
                            // inserindo os dados do usuário
                            echo "<td>".$nome."</td>";
                            echo "<td>".$cpf."</td>";
                            echo "<td>".$rg."</td>";
                            echo "<td>".$endereco.",".$bairro.", ".$cidade." - ".$uf."</td>";
                            echo "<td>".$telefone."</td>";
                            echo "<td>".$email."</td>";
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>
            Por favor confira os seus dados abaixo, caso não estejam corretos, clique no botão
                
                <a href="#" class="btn btn-warning" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    ALTERAR DADOS
                </a>

        </p>

        <!-- DIVISÓRIA -->
        <div class="dropdown-divider"></div>

        <!-- AGORA VAMOS MOSTRAR AS DENUNCIAS QUE O MESMO JÁ FEZ -->
        <h3>Suas Denuncias:</h3>

        <?php
            include "resultado_historico.php";
        ?>
        <p>
            O resultado da sua denuncia pode demorar até 5 dias úteis. A cidade de <?php echo $cidade." - ".$uf;?> agradeçe!
                
                <!-- <a href="denuncia.php" class="btn btn-danger" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    FAZER NOVA DENUNCIA
                </a> -->

        </p>

        <div class="dropdown-divider"></div>
        <h3>Nova Denuncia:</h3>
        <?php
            include_once "denuncia.php";
        ?>
    </div>
</body>
</html>