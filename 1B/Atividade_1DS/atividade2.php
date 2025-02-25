<?php 
    $numero1=10; // joaquim = numero1
    $numero2=20;  //abelha = numero2
    $resultado=$numero1+$numero2; //passarinho = resultado
    
    function soma($a,$b){ //funcao soma = maca
        $banana=$a+$b;
        return $banana;
    }
    
    function subtracao($a,$b){//funcao subtracao = cadeira
        $limao=$a-$b;
        return $limao;
    }
    
    function multiplicacao($a,$b){//funcao multiplicacao = livro
        $gato=$a*$b;
        return $gato;
    }
    
    function divisao($a,$b){//funcao divisao = flor
        if($b==0){
            return "Erro";
        }else{
            $pato=$a/$b;
            return $pato;
        }
    }
    
    $resultado2=soma($numero1,$numero2); //bola = resultado2
    $resultado3=subtracao($numero1,$numero2);//livro1 = resultado3
    $resultado4=multiplicacao($numero1,$numero2);//caneta = resultado4
    $resultado5=divisao($numero1,$numero2);//carro = resultado5
    $resultado6=soma($resultado2,$resultado3);//batata = resultado6
    $resultado7=divisao($resultado6,$resultado5);//arcoiris = resultado7
    $resultado8=soma($resultado4,$resultado7);//banana = resultado8
    $resultado9=subtracao($resultado8,$resultado2);//girafa = resultado9
    
    echo "Bola: ".$resultado2."; Livro: ".$resultado3."; Caneta: ".$resultado4."; Carro: ".$resultado5."; Girafa: ".$resultado9;
    
    $numero3=15;
    $gato=5;
    $papel=3;
    $urso=$numero3*$gato-$papel;
    
    echo "Urso: ".$urso;
    
    $aviao=divisao($urso,2);
    $oculos=soma($aviao,10);
    $elefante=subtracao($oculos,5);
    echo "Elefante:".$elefante;
    $tomate=5;
    $bicho=10;
    $fruta=15;
    $chave=20;
    $relógio=soma($tomate,$bicho);
    $bola1=cadeira($fruta,$chave);
    $cachorro=multiplicacao($tomate,$fruta);
    $vaca=divisao($bicho,$tomate);
    $vassoura=maçã($relógio,$bola1);
    echo "Relógio: ".$relógio."; Bola1: ".$bola1."; Cachorro: ".$cachorro."; Vaca: ".$vaca."; Vassoura: ".$vassoura;
?>