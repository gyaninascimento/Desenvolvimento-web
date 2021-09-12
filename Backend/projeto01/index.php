<?php include('config.php'); ?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<meta charset="utf-8" />
    <title>Projeto 01 </title>
</head>
<body>

    <header>
    <div class="center">
        <div class="logo left"><a href="/"> Logomarca</div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav><!--desktop-->

        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav><!--mobile-->
        <div class="clear"></div><!--clear-->
    </div><!--center-->
    </header>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
            include  ('pages/'.$url.'.php');
        }else{
            //a pagina nao existe. 
            $pagina404 = true;
            include('pages/404.php');
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true)?>>
        <div class="center">
        <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

</body>
</html>