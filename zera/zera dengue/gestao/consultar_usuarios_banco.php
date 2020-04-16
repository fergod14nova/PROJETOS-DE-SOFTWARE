<h1>LISTA DE USUÁRIOS CADASTRADOS:</h1>
<?php
    /*
        NOTAS:
        a função mysqli_fetch_array(query) serve para mostrar resultados de uma pesquisa no banco de dados
        a função mysqli_close(conexão) fecha a conexão com o banco de dados
        a função mysqli_query(conexão,"comando") serve para executar um comando no banco de dados
    */

    // conexão com o banco
    $conn = new mysqli("localhost","root","","sisweb");

    // testando conexão
    if(!$conn){ //o sinal de ! é uma negação, quer dizer, se a variável retornar False o bloco a seguir será executado
        echo "Falha ao conectar banco de dados!";
        die();
    }
    
    // fazendo a busca mostrar todos os usuários cadastrados no banco
    $busca = mysqli_query($conn,"SELECT * FROM usuarios") or die("Erro ao acessar dados"); //coloquei um or "ou" die "função" para dar uma mensagem no caso de falha

?>
    <!-- CSS -->
    <style>
        table {
            width: 90%;
            height: auto;
        }
    </style>

    <!-- HTML -->
    <table>
        <tr>
            <!-- CABEÇALHO DA TABELA -->
            <td>Nome:</td>
            <td>CPF:</td>
            <td>E-mail:</td>
        </tr>
        
        <!-- PHP -->
        <?php
        // criando laço que mostrará os registros
        while($registro = mysqli_fetch_array($busca)){
            // CRIANDO AS VARIÁVEIS QUE ARMAZENARAM OS RESULTADOS:
            $nome = $registro['nome']; //buscando o campo "nome" no banco
            $cpf = $registro['cpf']; //buscando o campo "cpf" no banco
            $email = $registro['email']; //buscando o campo "email" no banco

            // mostrando os resultados na tela
            echo "<tr>";
                echo "<td>".$nome."</td>"; //mostrando o valor da variável dentro de uma célula da tabela
                echo "<td>".$cpf."</td>";
                echo "<td>".$email."</td>";
            echo "</tr>";
            // terminando a linha
        }
        mysqli_close($conn); //encerrando conexão
        ?>
        
    </table>