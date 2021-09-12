<?php
//GROUP BY  AGRUPA POR 'COLUNA' DA TAB SELECIONADA
 /*   $pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');//conexão com o BD
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes AS $key => $value){
        echo $value['nome'];
        echo '<hr>';
    }

//LIMIT limita a quantidade de dados que vai retornar    

$pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');//conexão com o BD
$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo LIMIT 2");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes AS $key => $value){
    echo $value['nome'];
    echo '<hr>';
}*/

//ORDER - QUAL A ORDEM DA COLUNA REQUISITADA / ASC - DESC

$pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');//conexão com o BD
$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY CARGO ASC LIMIT 4");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes AS $key => $value){
    echo $value['nome'];
    echo '<hr>';
}
    ?>