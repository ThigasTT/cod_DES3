<?php 
//Declaração das primeiras variaveis
    $numero1=10;
    $numero2=20;
    $resultado=$numero1+$numero2;

    //funçao de soma com duas variaveis
    function soma($a,$b){
        $resultado=$a+$b;
        return $resultado;
    }
     //funçao de subtração com duas variaveis
    function subtracao($a,$b){
        $resultado=$a-$b;
        return $resultado;
    }
     //funçao de multiplicação com duas variaveis
    function multiplicacao($a,$b){
        $resultado=$a*$b;
        return $resultado;
    }
     //funçao de divisão com duas variaveis
    function divisao($a,$b){
        if($b==0){
            return "Erro";
        }else{
            $resultado=$a/$b;
            return $resultado;
        }
    }
    //declarando variaveis
    $resultado2=soma($numero1,$numero2);
    $resultado3=subtracao($numero1,$numero2);
    $resultado4=multiplicacao($numero1,$numero2);
    $resultado5=divisao($numero1,$numero2);
    $resultado6=soma($resultado2,$resultado3);
    $resultado7=divisao($resultado6,$resultado5);
    $resultado8=soma($resultado4,$resultado7);
    $resultado9=subtracao($resultado8,$resultado2);
    //exibindo resultado
    echo "resultado2: ".$resultado2."; resultado3: ".$resultado3."; resultado4: ".$resultado4."; resultado5: ".$resultado5."; resultado6: ".$resultado9;
    //declarando variaveis
    $numero3=15;
    $numero4=5;
    $numero5=3; 
    $resultado10=$numero3*$numero4-$numero5;
    //exibindo o resultado
    echo "resultado10: ".$resultado10;
    
    //realizando operações
    $resultadoDivisao=divisao($resultado10,2);
    $resultadoSoma=soma($resultadoDivisao,10);
    $resultadoFinal=subtracao($resultadoSoma,5);
    //exibindo o resultado
    echo "resultado final:".$resultadoFinal;

    //declarando variaveis
    $numero6=5; 
    $numero7=10;
    $numero8=15; 
    $numero9=20; 
    //realizando operações
    $resultadoSoma2=soma($numero6,$numero7);
    $resultadoSubtracao2=subtracao($numero8,$numero9);
    $resultadoMultiplicacao2=multiplicacao($numero6,$numero8);
    $resultadoDivisao2=divisao($numero7,$numero6);
    $resultadoFinal2=soma($resultadoSoma2,$bola1);
    //exibindo resultado
    echo "resultado da soma2: ".$resultadoSoma2."; resultado Subtracao 2: ".$resultadoSubtracao2.
    "; resultado Multiplicacao 2: ".$resultadoMultiplicacao2."; resultado Divisao 2: ".$resultadoDivisao2.
    "; resultado final 2: ".$resultadoFinal2;
?>