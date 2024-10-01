<!DOCTYPE html>
<html>
	<head>
		<title>Crie Games, Gostoso Demais!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" />
		<link href="assets/css/gamedev.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container-fluid p-0 shell">
			<div id="header" class="row m-0">
				<div class="col-12">
					<div class="nav-section" style="margin-left: 2rem; top: 0.5rem; position: relative">
						<h4>Crie Games <i>v0.0.2 - Edição: Cadeirada!</i></h4>
					</div>
				</div>
			</div>
			<div class="separator ZGizmo"></div>
			<br /><br />
			<div class="row m-0">
				<div class="col-12 col-md-3 nav-section">
					<ol>
						<li><a href="#header">Inicio</a></li>
						<li><a href="#nav-game">Quem Somos Nós?</a></li>
						<li><a href="#nav-skills">Preciso saber de ... ?</a></li>
						<ul>
							<a href="#nav-skills-programming">Programação</a>
						</ul>
						<ul>
							<a href="#nav-skills-art">Arte</a>
						</ul>
						<ul>
							<a href="#nav-skills-music">Musica</a>
						</ul>
						<li><a href="#nav-type">Escolhendo um Gênero</a></li>
						<li><a href="#nav-team">Montando um Time</a></li>
						<li><a href="#nav-tools">Ferramentas</a></li>
						<ul>
							<a href="#nav-tools-engine">Programação</a>
						</ul>
						<ul>
							<a href="#nav-tools-art">Arte e Modelagem</a>
						</ul>
						<ul>
							<a href="#nav-tools-audio">Audio</a>
						</ul>
						<li><a href="#links-oficina">Links da Oficina de Game Design</a></li>
						<li><a href="#contato">Contato</a></li>
					</ol>
					<br /><br /><br />
					<div class="home-anchor">
						<a href="#header" style="width:100%; height:100%;"></a>
					</div>
				</div>
				<div class="col-12 col-md-9 nav-content" id="nav-header">
					
					<?php include('includes/quem-somos.php'); ?>
					
					<?php include('includes/o-que-sao-jogos.php'); ?>

					<?php include('includes/habilidades.php'); ?>

					<?php include('includes/qual-jogo-fazer.php'); ?>

					<?php include('includes/montar-time.php'); ?>

					<?php include('includes/ferramentas.php'); ?>

					<?php include('includes/oficina-links.php'); ?>

					<?php include('includes/contato.php'); ?>

				</div>
			</div>
			<br /><br /><br />
			<br /><br /><br />
		</div>
		<div class="separator XGizmo"></div>
		<br />
		<div class="footer">Inspirado em <a href="https://www.develop.games/" target="_blank" rel="noopener noreferrer">develop.games</a> - Pirate Software</div>
		<br />
	</body>
</html>