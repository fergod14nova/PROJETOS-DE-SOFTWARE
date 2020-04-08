<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Denuncia</title>
</head>
<body>
    <?php
        include_once "header.php";
        include_once "banco/connectar_banco.php";
    ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
                <caption>Tabela de denuncias</caption>
                <!-- Iniciando a tabela -->
                <thead class="thead-dark">
                    <!-- Cabeçalho da tabela -->
                    <tr>
                        <!-- Primeira linha -->
                        <th scope="col">CPF:</th>
                        <th scope="col">Local</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagens</th>
                        <th scope="col">Status</th>
                        <th scope="col">Resposta(s)</th>
                    </tr>
                </thead>
                
                <tbody>                 

                        <?php
                            // recebendo os dados do formulário
                            $cpf = $_POST['cpf'];

                            // consultando banco
                            $sql = "SELECT * FROM denuncias WHERE cpf='$cpf'";
                            $resultado = mysqli_query($banco,$sql) or die("CPF não encontrado!");

                            // obtendo os resultados por meio de um loop while
                            while ($registro = mysqli_fetch_array($resultado)){

                                // aqui eu vou criar variáveis que vão armazenar os campos da consulta, obs, dados vindos do banco de dados
                                $cpf_resultado = $registro['cpf'];
                                $endereco_resultado = $registro['endereco'];
                                $desn_resultado = $registro['desn'];
                                $img_resultado = $registro['img'];
                                $sts_resultado = $registro['sts'];
                                $respo_resultado = $registro['respo'];

                                // inserindo na tabela
                                echo "<tr>";
                                echo "<td>".$cpf_resultado."</td>";
                                echo "<td>".$endereco_resultado."</td>";
                                echo "<td>".$desn_resultado."</td>";
                                echo "<td>".$img_resultado."</td>";
                                echo "<td>".$sts_resultado."</td>";
                                echo "<td>".$respo_resultado."</td>";
                                echo "</tr>";
                            }
                            // fechando a conexão
                            mysqli_close($banco);
        
                        ?>

                        <!-- <th scope="row">1</th>
                        <td>vários peneus no ar livre</td>
                        <td>Rua das flores</td>
                        <td>RUA</td>
                        <td>Download</td>
                        <td>enviado</td>
                        <td>...</td> -->
                    
                </tbody>
        </table>
    </div>
</body>
</html>