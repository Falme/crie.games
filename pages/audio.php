<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>


<?php create_section(
	array(
		["Áudio", "audio", false, "audio/intro.php"],

		["Programas", "programas", false, "audio/programas.php"],
		["FamiStudio", "famistudio", true, "audio/famistudio.php"],
		)
	);
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
