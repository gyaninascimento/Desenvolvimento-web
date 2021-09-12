<?php

   /* ECHO '<pre>';
    print_r($_SERVER);
    echo '</pre>'*/

   /* echo $_SERVER['DOCUMENT_ROOT'];
    echo $_SERVER['SERVER_NAME'];*/

   /* date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=bdephp','root','');

if(isset($_POST['acao'])){
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Momento_registro = date('Y-m-d H:i:s');


    $sql = $pdo->prepare("INSERT INTO `bdephp` VALUES (null,?,?,?)");

    $sql->execute(array($Nome,$Sobrenome,$Momento_registro));
    echo 'Cliente inserido com sucesso!';
}

UPDATE e Condições nas queries
$pdo = new PDO('mysql:host=localhost;dbname=bdephp','root','');

$id = 0;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Lucia', sobrenome='Cristina' WHERE id=$id");
no lugar de WHRERE pode ser usado OR ou AND

if($sql->execute()){
    echo 'Meu cliente foi atualizado com sucesso!';
}*/

//DELETE COM PDO

/*$pdo = new PDO('mysql:host=localhost;dbname=bdephp','root','');

$id = 0;

$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

if($sql->execute(array($id))){
    echo 'Meu cliente foi deletado com sucesso!';
}




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="Nome" required />
        <input type="text" name="Sobrenome" required />
        <input type="submit" name="acao" value="Enviar!" />
    </form>
</body>
</html>-->*/

?>