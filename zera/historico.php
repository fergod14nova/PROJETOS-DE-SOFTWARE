<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denuncias</title>
</head>
<body>
    <?php
        include_once "header.php";
    ?>
    <div class="container">
            <form action="resultado_historico.php" method="POST">
            <h3 class="h3">Busque por CPF:</h3>
            <div class="form-row">
                <div class="form-group col-sm-4">
                    <input type="text" name="cpf" id="" placeholder="Digite apenas números" class="form-control" maxlength="11">
                </div>
                <div class="form-group col-sm-4">
                    <input type="submit" value="consultar" class="btn btn-primary">
                </div>
            </div>
            
                
            </form>
        </h2>
    </div>
</body>
</html>