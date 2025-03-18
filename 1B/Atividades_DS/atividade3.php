<?php

//função que pega tres parametros e retorna se o resultado das operações é grande ou pequeno
function funcaoPrimeiraOperacao($numero1,$numero2,$numero3){

    //resultado da multiplicação entre o primeiro e o segundo numero
    $resultadoMultiplicacao=$numero1*$numero2;
    //resultado entre o resultado da primeira operação e terceiro numero
    $resultadoDivisao=$resultadoMultiplicacao/$numero3;
    //if que retorna 'grande' se o resultado da divisão for maior que 100 e 'pequeno' caso não seja
    if($v2>100){

        return "Grande";

    }else{

        return "Pequeno";

}

}

//cria tres numeros aleatorios
$numero_aleatorio_1=rand(1,20);

$numero_aleatorio_2=rand(2,10);

$numero_aleatorio_3=rand(3,5);

//cria uma variavel para armazenar o resultado da operação entre os três numeros
$resultadoFuncao=funcaoPrimeiraOperacao($numero_aleatorio_1,$numero_aleatorio_2,$numero_aleatorio_3);

//exibe o resultado
echo "Resultado: ".$resultadoFuncao."<br>";

//cria mais tres numeros aleatorios
$numero_aleatorio_4=rand(5,15);

$numero_aleatorio_5=rand(3,8);

$numero_aleatorio_6=rand(2,4);

//cria uma variavel para armazenar o resultado da operacao entre esses tres numeros
$segundoResultadoFuncao=func1($numero_aleatorio_4,$numero_aleatorio_5,$numero_aleatorio_6);

echo "Resultado 2: ".$segundoResultadoFuncao;

//função que decide se soma de dois números é par ou impar
function parOuImpar($a,$b){

    $s=$a+$b;
//verifica se o resto é 0 ou 1, se for 0 o numero é par, se for 1 o numero é impar
    if($s%2==0){

        return "Par";

    }else{

    return "Ímpar";

    }

}

//cria mais duas variaveis aleatorias
$numero_aleatorio_7=rand(10,30);

$numero_aleatorio_8=rand(5,20);

//cria uma variavel que armazena o resultado da função parOuImpar
$resultadoSegundaFuncao=parOuImpar($num1,$num2);

//exibe o resultado
echo "<br>Resultado da soma: ".$resultadoSegundaFuncao;

/*Conclusão: após a identação, a renomeação de variaveis e a introdução dos comentarios, o código ficou muito mais facil de se entender. Ao bater o olho, ja da pra entender o que uma função faz, e isso ajuda a manter um projeto em grupo por mais tempo, já que todos conseguem entender melhor o que esta acontecendo em cada parte do codigo*/
?>