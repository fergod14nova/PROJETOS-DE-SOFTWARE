<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    <title>Denunciar Foco</title>

    <!-- <meta http-equiv="refresh" content="10; url=denuncia.php"> -->
    <!-- essa linha é só para testes, ela reinicia a página a cada 1 segundo -->

    <link rel="stylesheet" href="/css/denuncia.css">
    <link rel="stylesheet" href="/css/config.css" type="text/css">


</head>
<body>
    <?php
        include_once "header.php";
    ?>
    <div class="container">        
        <div class="form-group">
            <form action="banco/denuncia_banco.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Denunciar Foco do Mosquito da Dengue:</legend>
                <div class="form-row">
                    <div class="form-group">
                        <label for="ek">Digite seu CPF:</label>
                        <input type="text" name="stranger" id="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <!-- colocando os campos lado a lado -->
                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço completo do Foco:</label>
                        <input type="text" name="endereco" id="" class="form-control" placeholder="Rua das hortências, n 1020, centro, Vila matilde">
                        <small class="form-text">Seja o mais detalhado possível!</small>
                    </div>
                    <div class="form-group col-sm-3">
                            <label for="logradouro">Tipo de logradouro:</label>
                            <select name="logradouro" id="" class="form-control">
                                <option value="avenida">avenida</option>
                                <option value="área">área</option>
                                <option value="distrito">distrito</option>
                                <option value="estrada">estrada</option>
                                <option value="fazenda">fazenda</option>
                            </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-9">
                        <label for="desc">Descreva a sua denuncia:</label>
                        <textarea name="desc" id="desc" cols="20" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="arquivo">Envie fotos do local:</label>
                        <input type="file" name="arquivo" id="upload" class="form-control-file">
                        <small class="form-text">Para enviar mais de 1 foto, compacte-as em um arquivo .RAR</small>
                    </div>
                </div>
                </fieldset>
                <div class="dropdown-divider"></div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-danger">Enviar Denuncia</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>