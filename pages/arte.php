<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>


<?php create_section(
	array(
		["Arte", "arte", false, "arte/intro.php"],

		["Pixel Art", "pixel-art", false, "arte/pixel-art.php"],
		["Aseprite", "aseprite", true, "arte/aseprite.php"],
		["Libresprite", "libresprite", true, "arte/libresprite.php"],

		["3D", "3d", false, "arte/3d.php"],
		["Blender", "blender", true, "arte/blender.php"],
		["Blockbench", "blockbench", true, "arte/blockbench.php"],
		["Poly Haven", "polyhaven", true, "arte/polyhaven.php"],

		["Vetorização", "vetorizacao", false, "arte/vetorizacao.php"],
		["Inkscape", "inkscape", true, "arte/inkscape.php"],

		["Editor de Imagem", "editor-imagem", false, "arte/editor-imagem.php"],
		["Gimp", "gimp", true, "arte/gimp.php"],

		["Ilustração", "ilustracao", false, "arte/ilustracao.php"],
		["Krita", "krita", true, "arte/krita.php"],
		)
	);
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
