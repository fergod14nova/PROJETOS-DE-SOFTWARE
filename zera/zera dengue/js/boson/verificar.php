<!-- verificando qual linguagem foi escolhida -->
<?php

    if(isset($_POST['tecnologias'])){
        echo "As linguagens selecionadas foram: </br>";

        foreach($_POST['tecnologias'] as $escolhida){
            echo $escolhida."</br>";
        }
    }
    else {
        echo "Nenhuma linguagem escolhida";
    }

    // NOTA: AQUI NÃO PRECISAMOS COLOCAR O SINAL DE []

    
?>