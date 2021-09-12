<?php
/*PERCORRER ARRAY - FOREACH E FOR PARA ARRAYS
$arr = array('chave1'=>'gyani', 'joao', 'jose', 'mario');

foreach($arr as $key => $value){
    echo $key;
    echo '=>';
    echo $value;
    echo '<hr>';
}

/*
$total = count($arr);

for($i = 0; $i < $total; $i++){
    echo $arr[$i];
    echo '<br />';
}

ARRAY SINGLE 
$arr = ['joao', 'jose', 'mario'];
$arr = array ('chave2'=>'gyani', 'joao', 'jose', 'mario');
$arr[0] = 'mario';
$arr[] = 

/*ARRAY MUNTIDIMENSIONAL */

/*$arr2 = array(array('gyani', 'joao'),array(23,45));

$arr2[0] = array('chave1'=>'gyani', 'joao');

$arr2[0] ['chave1'] = 'ani';

echo $arr2[0]['chave1'];

/*DIE E SLEEP

sleep(3);//quantos segundos queo que meu servidor durma antes de executar
echo '<br />','olaaaa', '<br />';


DIE

$nome = 'guilherme';
if($nome == "joão"){
    //contiamos o código
    echo 'tudo certo';
}else{
    die('o script parou de ser executado, ele quer férias.');//o cód morre, não executa nada mais abaixo
}


CRIAR FUNÇÕES

function mostrarNome($nome,$idade){
    echo '<h2>Nome é: </h2>'.$nome;
    echo '<hr>';
    echo "idade: $idade";
}

mostrarNome('ana',20);

function calculadora($numero1 = 10,$numero2 = 5){
    echo ($numero1+$numero2);
}

calculadora(20,30);

 DATE E INCLUDE

date_default_timezone_set('America/Sao_Paulo');
$data1 = '<br /> <br /> 03/01/1987 13:00:00 <br />';

$data = date('d/m/Y H:i:s'); 
echo $data1;

echo $data;

include('header.php');

?>

<h1>Meu conteudo!</h1>
<?php
    include('footer.php');
?>

FUNÇOES PARA STRINGS
//RECORTAR STRIING

$conteudo = 'É um fato conhecido  de todos que um leitor se distrairá 
com o conteúdo de texto legível de uma página quando estiver examinando
sua diagramação.';

echo substr($conteudo,0,20);

//separando array
$nome = 'Gyani Pereira do Nascimento';
$nomes = explode (' ',$nome);
//print_r($nomes);
//juntando array com delimitador

$nomes = implode(' ',$nomes);

echo $nomes;

//CONDIÇÃO SWITCH, CONTINUE E BREAK

$nome = 'Gyani';
//SWITCH
switch($nome){
    case 'Gyani':
    echo 'Minha variavel é Gyani <br/>';
break;
    case 'Joao':
    echo 'Minha variavel e joao';
break;

}

//BREAK

for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<hr>';
    if($i == 5)
break;
}

//CONTINUE

for($i = 0; $i < 10; $i++){
    if($i == 5)
    continue;
    echo $i;
    echo '<hr>';
}*/





?>








