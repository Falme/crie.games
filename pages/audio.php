<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>


<?php create_section(
	array(
		["Áudio", "audio", false, "audio/intro.php"],

		["Programas", "programas", false, "audio/programas.php"],
		["FamiStudio", "famistudio", true, "audio/famistudio.php"],
		["Anvil Studio", "anvil", true, "audio/anvil.php"],
		["FL Studio", "flstudio", true, "audio/flstudio.php"],
		["Chiptone", "chiptone", true, "audio/chiptone.php"],

		["Relatórios", "relatorios", false, "audio/relatorios.php", true],
		["Leonardo Lima", "leonardolima", true, "audio/relatorio-leonardolima.php"],
		)
	);
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
