<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

	<body>
		<div class="container-fluid p-0 shell">
			<div id="lateral-menu" class="fixed-hide nav-section">
				<ol>
					<li><?php href("Quem Somos Nós?", "#nav-game"); ?></li>
					<li><?php href("O que são Jogos?", "#o-que-sao-jogos"); ?></li>
					<li><?php href("Preciso saber de ... ?", "#nav-skills"); ?></li>
					<ul>
						<?php href("Programação", "#nav-skills-programming"); ?>
					</ul>
					<ul>
						<?php href("Arte", "#nav-skills-art"); ?>
					</ul>
					<ul>
						<?php href("Musica", "#nav-skills-music"); ?>
					</ul>
					<li><?php href("Escolhendo um Gênero", "#nav-type"); ?></li>
					<li><?php href("Montando um Time", "#nav-team"); ?></li>
					<li><?php href("Ferramentas", "#nav-tools"); ?></li>
					<ul>
						<?php href("Programação", "#nav-tools-engine"); ?>
					</ul>
					<ul>
						<?php href("Arte e Modelagem", "#nav-tools-art"); ?>
					</ul>
					<ul>
						<?php href("Audio", "#nav-tools-audio"); ?>
					</ul>
					<ul>
						<?php href("Repositórios", "#ferramentas-repositorios"); ?>
					</ul>
					<li><?php href("Links da Oficina de Game Design", "#links-oficina"); ?></li>
					<li><?php href("Contato", "#contato"); ?></li>
				</ol>
				<br /><br /><br />
					
			</div>
			<div id="header" class="row m-0">
				<div class="col-10">
					<div class="nav-section" style="margin-left: 2rem; top: 0.5rem; position: relative">
						<h3 class="header-title"> Crie Games </h3> 
						<div class="version">
							v0.0.6 - Edição: Apoie Eventos Locais 
							<?php href("[1]", "https://www.instagram.com/firmagamedev/"); ?>
							<?php href("[2]", "https://www.instagram.com/eaijogos/"); ?>
							<?php href("[3]", "https://www.instagram.com/newgameplusfest/"); ?>
							<?php href("[4]", "https://www.instagram.com/hugsp_/"); ?>
							<?php href("[5]", "https://recnplay.pe/"); ?>
						</div>
					</div>
				</div>
				<div class="col-2">
					<img id="hamburger" src="/assets/images/menu.svg" />
				</div>
				<div class="separator ZGizmo"></div>
			</div>
			<br /><br />
			<br /><br />
			<br /><br />
			<div class="row m-0">
				<div class="col-12 nav-content" id="nav-header">
					
					<?php include('includes/quem-somos.php'); ?>
					
					<?php include('includes/o-que-sao-jogos.php'); ?>

					<?php include('includes/habilidades.php'); ?>

					<?php include('includes/qual-jogo-fazer.php'); ?>

					<?php include('includes/montar-time.php'); ?>

					<?php include('includes/ferramentas.php'); ?>

					<?php include('includes/oficina-links.php'); ?>

					<?php include('includes/contato.php'); ?>

					<?php include('includes/especializacoes.php'); ?>

				</div>
			</div>
			<br /><br /><br />
			<br /><br /><br />
		</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
