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
        
        <h2>usuário:</h2>
        <table class="table">
            <!-- Iniciando a tabela -->
            <thead>
                <!-- Cabeçalho da tabela -->
                <tr>
                    <!-- Primeira linha -->
                    <th scope="col">Cód:</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Local</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Imagens</th>
                    <th scope="col">Status</th>
                    <th scope="col">Resposta(s)</th>
                </tr>
            </thead>
            <tbody>
                <!-- linhas da tabela -->
                <tr>
                    <!-- linha de teste -->
                    <th scope="row">1</th>
                    <td>vários peneus no ar livre</td>
                    <td>Rua das flores</td>
                    <td>RUA</td>
                    <td>Download</td>
                    <td>enviado</td>
                    <td>...</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>