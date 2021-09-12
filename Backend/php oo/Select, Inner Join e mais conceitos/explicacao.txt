<?php
    $pdo = new PDO('mysql:host=localhost;dbname=bdephp','root','');//conexão com o BD
   /* $sql = $pdo->prepare("SELECT * FROM posts");//* significa pegar todas as informações ta tabela
    $sql->execute();
    $info = $sql->fetchAll();*///fetchAll significa que vou pegar todas as informações

    /*echo '<pre>';
    print_r($info);
    echo '</pre>';*///retorna meus arrays

  /*  foreach ($info as $key => $value){
        echo 'Titulo: '.$value['titulo'];
        echo '</br>';
        echo 'Noticia: '.$value['conteudo'];
        echo '<hr>';
    }

    for($i = 0; $i < count($info);$i++){
        echo 'Titulo: '.$info[$i]['titulo'];
        echo '</br>';
        echo 'Noticia: '.$info[$i]['conteudo'];
        echo '<hr>';
    }*/// FOR E FOREACH PUXA TODOS OS DADOS DA TABELA

  /*  $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2");
    $sql->execute();
    $info = $sql->fetchAll();

    foreach ($info as $key => $value){
        echo 'Titulo: '.$value['titulo'];
        echo '</br>';
        echo 'Noticia: '.$value['conteudo'];
        echo '<hr>';
    }*///puxar a categoria desejada  e as noticias dessa categoria

  /*  $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();
    $info = $sql->fetchAll();

    foreach ($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'Exibindo posts de: '.$value['nome'];
        echo '</br>';
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach ($infoPosts as $key => $value) {
            echo 'Titulo: '.$value['titulo'];
            echo '</br>';
            echo 'Noticia: '.$value['conteudo'];
            echo '<hr>';
        }
    }*///mostrar as categorias e as noticias dessa categoria

    //INNER JOIN- juntar posts com atabela categorias
  /*  $sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` 
    ON `posts`.`categoria_Id` = `categorias`.`id`");

    $sql->execute();
    $info = $sql->fetchAll();
    echo '<pre>';
    print_r($info);
    echo '</pre>';*/

    $sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*,`posts.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

    $sql->execute();
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($info);
    echo '</pre>';
?>