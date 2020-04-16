<?php
    /*
        NOTAS:
        RETURN -> retorna um valor de uma função
    */

    // criando a função
    function mensagem(){
        echo "CRIANDO FUNÇÕES COM PHP!";
    }

    // invocando a função
    mensagem();

    // criando função que calcula o cubo de um número, o "n" vezes ele mesmo, 3 vezes, abestado!
    function cubo($n){
        echo "</br></br>Cálculo do cubo de um número</br>";
        echo "Resultado: O cubo do número ".$n." é ".$n * $n * $n;

        // o $n será substituido por o que vc colocar dentro da funcão
    }
    // invocando a função e indicando um valor para ser substituido por $n
    $valor = 350;
    cubo($valor);

    echo "</br></br> Criando função de contagem: </br>";

    function contar($x){
        echo "O número final é: ".$x."</br>";
        for($i=1; $i <= $x; $i++){
            // foi criado uma variável I com valor de 1, enquanto I for menor do que X ou igual a X, o laço se repete e I ganha um incremento
            echo "O contador está em: ".$i."</br>";
        }
    }

    // invocando a função
    $contador = 9;
    contar($contador);

    // criando função de espaço para explicação
    function esp($titulo){
        echo "</br></br>".$titulo."</br>";
    }
    // invocando
    esp("Retornando valores:");


    // criando função que retorne algo
    function fatorial($ft){
        if(($ft == 0) || ($ft == 1)){
            return 1;
            // se ft for 0 "ou" 1, retorne o valor 1
        }
        else {
            return $ft * fatorial($ft - 1);
        }
    }
    // invocando a função
    $ns = 5;
    echo "Calculando o fatorial do número ".$ns."</br>";
    $resultado = fatorial($ns);
    echo "Resultado: ".$resultado;


    
?>