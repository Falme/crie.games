<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>


<?php create_section(
	array(
		["Repositórios", "repositorio", false, "repositorios/intro.php"],
		["Arte e Interface", "arte", false, "repositorios/arte-e-interface.php"],
		["OpenGameArt", "opengameart", true, "repositorios/opengameart.php"],
		["Kenney", "kenney", true, "repositorios/kenney.php"],
		["Game Icons", "gameicons", true, "repositorios/gameicons.php"],
		["Xelu's Free Controllers & Keyboard Prompts", "xelu", true, "repositorios/xelu.php"],
		["Modelos e Texturas 3D", "models3d", false, "repositorios/models3d.php"],
		["Poly.Pizza", "polypizza", true, "repositorios/polypizza.php"],
		["Outros repositórios", "outros-repositorios", false, "repositorios/outros-repositorios.php"],
		["Ultimate Resource Database", "gentleland", true, "repositorios/gentleland.php"],
		["DNA Codex", "dna-codex", true, "repositorios/dna-codex.php"],
		)
	);
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
