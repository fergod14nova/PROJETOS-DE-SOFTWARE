<?php
    $a = 1.2;
    $b = (int)$a;
    echo "converter $a em int: $b </br>";
    // converter uma string em outro tipo


    $c = 15.6;
    settype($c,"string");
    print "$c essa é outra forma de mudar o tipo de uma variável,";
    // outra forma de converter

    //verificando tipo de variável
    if(is_string($c)==TRUE){
        echo "</br> $c é uma string";
    }
    else {
        echo "</br> $c não é uma string";
    }

    // criando variável global
    function calcular_media(){
        global $media;
        $nota1 = 6;
        $nota2 = 9;
        $media = ($nota1 + $nota2)/2;
        print "</br> $media é uma variável global";
    }

    print(calcular_media());
    // imprimindo minha função
    echo "</br></br> VARIÁVEIS STATICAS:";

    // criando variável statica, o valor dela não se perde com a execução do programa
    function loping(){
        static $num;
        $num = $num + 1; //incremendo de +1
        echo "</br> A contagem está em: $num";
    };

    // TESTANDO FUNÇÃO DE LOOP E VARIÁVEL STÁTICA
    loping();
    loping();
    loping();

    // Usando variaveis super-globais
    echo "</br> </br> O nome desse arquivo é <STRONG>".$_SERVER['PHP_SELF']
        ."</STRONG> </BR> Se sencontra em: <STRONG>".$_SERVER['DOCUMENT_ROOT']."</STRONG>";

        echo "</br></br>";
        echo "VARIÁVEIS";
        echo "</br></br>";

    // criando variáveis dinãmicas, ou seja, o nome delas muda
    $var = "preco"; //esse será o nome da variável dinâmica
    $$var = 2.50; //variável dinâmica tem dois $$ antes do nome (o qual será o nome da variável raiz)
    // no nosso caso $$var copia a variavel $var.
    echo "Variável raiz: $var </br>"."Variável dinâmica: $preco";
    echo "</br></br>";

    // criação de uma constante
    define("salario",1400);  //a constante não tem o sinal de $
    echo salario." essa é uma contante.";

    echo "</br></br>";
    echo "CRIAÇÃO DE ARRAY";
    echo "</br></br>";

    // criação de array
    define("Tipo",array('FPS','RPG','RA','MOBILE'));
    // MOSTRANDO UM VALOR DE ARRAY
    echo "O valor na posição 1 do array Tipo é: ".Tipo[1];

    echo "</br></br>";
    echo "ESTRUTURA DE CONTROLE CONDICIONAL ANINHADO";
    echo "</br></br>";

    // criando estrutura condicional aninhada
    $condicional = 25;

    if ($condicional === 20){
        echo "valor 20";
    }
    elseif ($condicional === 25){
        echo "acerto miseravi";
    }
    elseif($condicional === 50){
        echo "passou longe";
    }
    else {
        echo "não foi dessa vez";
    }

    echo "</br>";

    // estrutura de caso
    $notaaluno = (int)10; //converti o valor da variável em um tipo inteiro
    switch($notaaluno){
        case "<5": print("Reprovado!");
    break; //esse comando serve para parar;
        case "6": print("Recumperação!");
    break;
        case ">6" || "10": print("Passou de ano!");
        // aqui eu usei a condição "ou" com o sinal de ||

        // caso nenhum caso seja confirmado
    break;
        default: echo "nota não informada ou com erro!";
    }

    echo "</br></br>ESTRUTURA DE REPETIÇÃO WHILE</br>";
    // estrutura de repetição while, ela fará o looping enquanto a condição retornar verdadeira
    $will = 1;
    while($will <= 10){
        echo "$will </br>";
        $will++;
        // enquanto $will for menor que ou igual a 10, o laço se repetirá. e a variável vai ganhar um incremento
    }
    echo "</br>Laço de repetição FOR:</br>";
    // laço de repetição for
    for ($nota = 6; $nota <= 10; $nota++){
        // a variável inicial é 6
        // enquanto a variavel for menor ou igual a 10, o laço se repete
        //  a cada repetição a variável recebe um incremento
        print ("A nota está em: ".$nota."</br>");
    }

    // FOREACH
    echo "</br>Usando foreach para mostrar valores de um array</br>";
    // Craindo array para teste
    $fps = array("fps","rpg","rv","luta");
    // criando visualização
    foreach($fps as $valores){
        print("$valores </br>");
    }

    // outra forma de usar o foreach
    $polo = array("RSO" => "BA", "SRN" => "PI", "PICOS" => "PI");
    // aqui foi criando o array e atribuindo valores aos itens desse array

    echo "</br>Outra forma de usar array:</br>";

    // visualizando
    foreach($polo as $escola => $estado){
        print("A escola $escola está no estado do $estado </br>");
    }

    echo "Trabalhando com arrays:</br>";
    $array = array(); //array vazio
    $array2 = array("windows",64,128,256,512,1024); //array unidimencional
    $arrayAssociativo = array("time" => "corinthians", "cor" => "azul");
    // array associativo (par chave=>valor)
    echo "</br>Mostre a cor do array associativo</br>Cor: ".$arrayAssociativo["cor"];
    // mostrando o valor do array

    // criando array de duas dimensões (matriz)
    $matriz = array(array("x","y","z"),array(5,10,100));
    // mostrando dados do array
    echo "</br></br>Dados da matriz</br>";
    print($matriz[1][1]);
    echo "tendi nada dessa porra";

    echo"</br>REMOVENDO DADOS DE UM ARRAY</br<";
    unset($matriz); //aqui estou removendo os dados do array

?>