<?php
    $nome='João';
    $idade=20 ;
    $profissao='programador';
        if($idade>=18)
            {
                if($profissao=='programador')
                {
                    echo'Você é maior de idade e trabalha como programador!';
                }else
                {
                    echo'Você é maior de idade, mas não é programador!';
                }
                }else
                {
                    if($profissao=='programador')
                    {
                        echo'Você é menor de idade, mas já trabalha como programador!';
                    }else
                    {
                        echo'Você é menor de idade e não trabalha como programador!';
                    }
                }
    $curso='PHP';
    $nivel='básico';
    switch($nivel)
        {
            case
             'básico':echo'Você está no nível básico de PHP!';
             break;
            case 'intermediário':echo'Você está no nível intermediário de PHP!';
             break;
             case 'avançado':echo'Você está no nível  de avançadoPHP!';
             break;
            default:echo'Você ainda não iniciou o aprendizado de PHP!';
        }
        
    function saudacao($nome,$idade)
    {
        if($idade>18)
        {
            return"Olá, $nome! Você já tem mais de 18 anos!";
        }else{
            return"Olá, $nome! Você é menor de idade!";
        }
    }
    echo saudacao($nome,$idade);

    $livros=array('PHP Básico','PHP Intermediário','PHP Avançado');

    foreach($livros as $livro)
    {
        echo"Você já leu o livro: $livro<br>";
    }
class Pessoa
{
    public $nome;
    public $idade;
    
    function __construct($nome,$idade)
    {
        $this->nome=$nome;
        $this->idade=$idade;
    }
    
    function apresentar()
    {
        echo"Nome: $this->nome, Idade: $this->idade<br>";
    }
}
    $pessoa1=new Pessoa('Maria',25);
    $pessoa1->apresentar();
    $pessoa2=new Pessoa('Carlos',30);
    $pessoa2->apresentar();
    $pessoas=array($pessoa1,$pessoa2);
    
        foreach($pessoas as $pessoa)
        {
            $pessoa->apresentar();
        }
        
        function calcularIdade($anoNascimento)
        {
            $anoAtual=date('Y');
            $idade=$anoAtual-$anoNascimento;
            
            if($idade>=18)
            {
                echo'Você é maior de idade!';
            }else
            {
                echo'Você é menor de idade!';
            }
        }
        
        calcularIdade(2000);
        
    $temperatura=30;
    
    if($temperatura>25)
    {
        echo'Está quente!';
    }else
    {
        echo'Está frio!';
    }
    
    for($i=1;$i<=5;$i++)
    {
        echo"Contando: $i<br>";
    }
    
    for($i=10;$i>=1;$i--)
    {
        echo"Contando de trás para frente: $i<br>";
    }
    
    function somar($a,$b)
    {
        return$a+$b;
    }
    
    echo"A soma de 5 + 3 é: ".somar(5,3)."<br>";
    
    function subtrair($a,$b)
    {
        return$a-$b;
    }
    
    echo"A subtração de 8 - 3 é: ".subtrair(8,3)."<br>";
    
    function multiplicar($a,$b)
    {
        return$a*$b;
    }
    
    echo"A multiplicação de 4 * 6 é: ".multiplicar(4,6)."<br>";
    
    function dividir($a,$b)
    {
        if($b==0)
        {
            return'Não é possível dividir por zero!';
        }else
        {
            return$a/$b;
        }
    }
    
    echo"A divisão de 12 / 4 é: ".dividir(12,4)."<br>";
    
    $dados=array('nome'=>'João','idade'=>20,'profissao'=>'programador');
    
    echo"Nome: ".$dados['nome']."<br>";
    
    echo"Idade: ".$dados['idade']."<br>";
    
    echo"Profissão: ".$dados['profissao']."<br>";
    
    $carros=array('Fusca','Civic','Gol','BMW');
    
    foreach($carros as $carro)
    {
        echo"Eu gosto do carro: $carro<br>";
    }
    
    function verificarMaioridade($idade)
    {
        if($idade>=18)
        {
            echo'Você é maior de idade!';
        }else
        {
            echo'Você é menor de idade!';
        }
    }
    
    verificarMaioridade(16);
    
    $idadePessoa=25;
    
    if($idadePessoa>=18)
    {
        echo'Você pode votar!';
    }
    else
    {
        echo'Você não pode votar!';
    }
    
    function somaArray($arr)
    {
        $soma=0;
    
        foreach($arr as $numero)
        {
            $soma+=$numero;
        }
        return$soma;

    }
    
    echo"A soma do array é: ".somaArray([1,2,3,4,5])."<br>";
    
    $pessoasArray=array(array('nome'=>'Ana','idade'=>22),array('nome'=>'Lucas','idade'=>19));
    
    foreach($pessoasArray as $pessoa)
    {
        echo"Nome: ".$pessoa['nome'].", Idade: ".$pessoa['idade']."<br>";
    }
    
    $arrayNumeros=array(1,2,3,4,5);
    
    sort($arrayNumeros);
    
    echo"Array ordenado: ".implode(",",$arrayNumeros)."<br>";

    
    $arrayAssociativo=array('a'=>1,'b'=>2,'c'=>3);
    
    echo"Valor da chave 'b': ".$arrayAssociativo['b']."<br>";

    
    $usuarios=array('João'=>'1234','Maria'=>'5678');
    
    echo"Senha do João: ".$usuarios['João']."<br>";
    
    echo"Senha da Maria: ".$usuarios['Maria']."<br>";
    
    
    $dataAtual=date('d/m/Y');
    
    echo"A data de hoje é: $dataAtual<br>";
    
    
    $horaAtual=date('H:i');
    
    echo"A hora atual é: $horaAtual<br>";
    
    
    $timestamp=strtotime('2025-12-31');
    
    echo"O timestamp de 31/12/2025 é: $timestamp<br>";
    
    
    $formato='Y-m-d';
    
    echo"Data formatada: ".date($formato)."<br>";
    
    
    $numero=50;
    
    if($numero%2==0)
    {
        echo'O número é par!';
    }else
    {
        echo'O número é ímpar!';
    }
?>
