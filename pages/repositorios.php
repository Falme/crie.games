<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>

			<div id="lateral-menu" class="fixed-hide nav-section">
				<ol>
					<li><?php href("Repositórios", "#nav-repositorio"); ?></li>
					<li><?php href("Arte e Interface", "#nav-arte"); ?></li>
					<ul>
						<?php href("OpenGameArt", "#nav-opengameart"); ?>
						<?php href("Kenney", "#nav-kenney"); ?>
						<?php href("Game Icons", "#nav-gameicons"); ?>
						<?php href("Xelu's Free Controllers & Keyboard Prompts", "#nav-xelu"); ?>
					</ul>
					<li><?php href("Outros repositórios", "#nav-outros-repositorios"); ?></li>
					<ul>
						<?php href("Ultimate Resource Database", "#nav-gentleland"); ?>
					</ul>
				</ol>
				<br /><br /><br />
					
			</div>
			<br /><br />
			<br /><br />
			<br /><br />
			<div class="row m-0">
				<div class="col-12 nav-content" id="nav-header">
					<div id="nav-repositorio"></div>
					<br /><br />
					<div class="textbox">
						<img src="/assets/images/gamedev_splash.png" style="width: 100%" /> <br />
						<h1>Repositórios</h1>
						<div class="text-separator"></div>
						<p>
							Fazer todos os assets de um jogo pode ser bem trabalhoso e consumir muito tempo da criação. Muitas vezes não precisamos criar tudo do zero, podemos usar assets que já foram criados para nosso protótipo ou produto final por pessoas extremamente talentosas. 
						</p>
						<p>
							Essa página lista repositórios onde pode-se encontrar assets e conteúdos para acelerar o desenvolvimento do seu game. E fique de olho nos direitos autorais dos assets que irá usar.
						</p>
						<div id="nav-arte"></div>
						<div class="text-separator"></div>
						<h3>Arte e Interface</h3>
						<div id="nav-opengameart"></div>
						<div class="text-separator"></div>
						<img src="/assets/images/opengameart.png" /> <br />
						<p>
							<?php href("OpenGameArt.Org", "https://opengameart.org/"); ?> é um clássico para quem está buscando assets de arte, textura ou 3D gratuito para usar em seus jogos. Normalmente o estilo artistico não vai combinar com o seu projeto ou outros assets, mas é perfeito para protótipos e game jams. Lembre-se sempre de colocar o autor nos créditos.
						</p>
						<div id="nav-kenney"></div>
						<div class="text-separator"></div>
						<img src="/assets/images/kenney.png" /> <br />
						<p>
							<?php href("Kenney", "https://www.kenney.nl/assets"); ?> definitivamente tem uma boa reputação na área e não é a toa, tem ótimos assets de graça em 2D, 3D e UI, para protótipos, Game Jams e até produtos finais. Realmente vale a pena dar uma olhada.
						</p>
						<div id="nav-gameicons"></div>
						<div class="text-separator"></div>
						<img src="/assets/images/game-icons-net.png" /> <br />
						<p>
							<?php href("Game-icons.net", "https://game-icons.net/"); ?> contém icones em SVG feito pela comunidade, tem lindos ícones para ser usado gratuítamente em seu jogo, e se precisar editar, ele já está vetorizado. Só colocar o autor nos créditos, só isso, nada mais.
						</p>
						<div id="nav-xelu"></div>
						<div class="text-separator"></div>
						<img src="/assets/images/xelu-controller-keyboard-prompts.png" /> <br />
						<p>
							<?php href("Xelu's Free Controllers & Keyboard Prompts", "https://thoseawesomeguys.com/prompts/"); ?> é um pacote livre com ícones de botões e gestos de controles, mouse e teclado para sua Interface. Normalmente isso é um problema para Porting, o artista ter que desenhar cada botão diferente para cada console (PC, Xbox, Nintendo, PlayStation, etc), e isso pode dar problema na certificação para publicar o jogo. Se no seu projeto os botões não precisam ser estilizados, essa é a solução perfeita e gratuita para sua interface, só colocar o nome do autor nos créditos, nada mais.
						</p>
						<div id="nav-outros-repositorios"></div>
						<div class="text-separator"></div>
						<h3>Outros repositórios</h3>
						<div id="nav-gentleland"></div>
						<div class="text-separator"></div>
						<img src="/assets/images/ultimate-resource-database.png" /> <br />
						<p>
							Se você não encontrou aqui o repositório que precisava, ele vai estar em <?php href("Ultimate Resource Database", "https://gentleland.notion.site/Ultimate-Resource-Database-9f7f86e9ce5a408090eee1985182d951"); ?>. Essa é uma pagina do Notion de Gentleland com diversos links para diversas ferramentas, ela sendo paga, por assinatura ou gratuita. Dê uma olhada nas listas desse repositório, você pode achar algo melhor do que procura.
						</p>
					</div>
					<br /><br />

				</div>
			</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>

<?php /* create_section(
	array(
		["Nome", "nometag", false, ".."],
		["Nome2", "nometag2", true, "..."],
		["Nome", "nometag", false, ".."],
		)
	);
	*/ 
?>