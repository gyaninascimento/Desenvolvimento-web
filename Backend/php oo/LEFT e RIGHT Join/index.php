<?php 
//LEFT e right JOIN                                                                    
$pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');//conexão com o BD
$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`. `id`");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes AS $key => $value){
    echo $value['nome'];
    echo '<br>';
    echo $value['nome_cargo'];
    echo '<hr>';
}
?>