<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>

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
						<?php href("Audio", "#nav-tools-audio"); ?>
					</ul>
					<li><?php href("Links da Oficina de Game Design", "#links-oficina"); ?></li>
					<li><?php href("Contato", "#contato"); ?></li>
					<li><?php href("Especializações", "#especializacoes"); ?></li>
				</ol>
				<br />
					
			</div>
			<br /><br />
			<br /><br />
			<br /><br />
			<div class="row m-0">
				<div class="col-12 nav-content" id="nav-header">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/quem-somos.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/o-que-sao-jogos.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/habilidades.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/qual-jogo-fazer.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/montar-time.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/ferramentas.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/oficina-links.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/contato.php'); ?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/especializacoes.php'); ?>
				</div>
			</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
