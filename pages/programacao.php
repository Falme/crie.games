<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>


<?php create_section(
	array(
		["Programação", "programacao", false, "programacao/intro.php"],
		["Engines", "engines", false, "programacao/engines.php"],
		["Godot Engine", "godot", true, "programacao/godotengine.php"],
		["GameMaker", "gamemaker", true, "programacao/gamemaker.php"],
		["Unreal Engine", "unreal", true, "programacao/unrealengine.php"],
		["Ren'Py", "renpy", true, "programacao/renpy.php"],
		["Game Engines Database", "enginesdatabase", true, "programacao/enginesdatabase.php"],
		// ["Construct", "construct", true, "programacao/construct.php"],
		// ["GBstudio", "gbstudio", true, "programacao/gbstudio.php"],
		)
	);
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
