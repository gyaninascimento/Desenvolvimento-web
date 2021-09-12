<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>

	<header>
		<div class="center">
			<div class="logo"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="depoimentos">Depoimentos</a></li>
					<li><a href="servicos">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Depoimentos</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="center">
			<form>
				<h2>Qual o seu melhor email?</h2>
				<input type="email" name="email">
				<input type="submit" name="acao" value="Cadastrar">
			</form>
		</div>
	</section>

	<section class="descricao-autor">
		<div class="center">
			<div class="w50">
				<h2>Guilherme Grillo</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="w50">
				<img src="images/foto.jpg">
			</div>
		</div>	
	</section>

	<section class="especialidades">
		<h2 class="title">Especialidades</h2>
		<div class="center">
			<div class="box-especialidade">
				<h3>Icone 1</h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="box-especialidade">
				<h3>Icone 2</h3>
				<h4>HTML 5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="box-especialidade">
				<h3>Icone 3</h3>
				<h4>Javascript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->
		</div>
	</section>

	<section class="extras">
		<div class="center">
			<div class="w50 depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				
				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p class="nome-autor">Lorem ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->

			<div id="servicos" class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p>Todos os direitos reservados!</p>
		</div>
	</footer>
</body>
</html>