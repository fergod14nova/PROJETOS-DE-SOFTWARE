<?php
    /*
        DEFINIÇÕES:
        sort -> coloca o array em ordem
        rsort -> coloca o array em ordem invertida
        foreach -> mostra os dados do array
    */
    
    // criação do array em desordem
    $vetor = array(5,10,50,0,100,25);

    // colocando o array em ordem
    sort($vetor);

    // mostrando na tela
    foreach($vetor as $mostra){
        echo "$mostra </br>";
    }

    echo "</br>Mostrando o array anterior e suas posições:";
    echo "</br>";
    foreach ($vetor as $chave => $valor){
        // vetor -> posição -> valor
        echo "Número: [".$chave."] = ".$valor."</br>";

    }

    // invertendo a ordem do vetor
    
    //vou criar outro array pra não bagunçar
    $comida = array("casa","pão","arroz","salada");

    rsort($comida); //invertendo ordem alfabética

    // mostrando na tela
    echo "</br>Vetor em ordem alfabética invertida: </br>";
    foreach($comida as $posicao => $valor){
        // array -> posição -> valor armazenado nessa posição
        echo "O item [".$posicao."] está com valor: ".$valor."</br>";
    }
?>