<?php include($_SERVER['DOCUMENT_ROOT'].'/methods.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/title.php'); ?>


<?php create_section(
	array(
		["Arte", "arte", false, "arte/intro.php"],

		["Pixel Art", "pixel-art", false, "arte/pixel-art.php"],
		["Aseprite", "aseprite", true, "arte/aseprite.php"],
		["Libresprite", "libresprite", true, "arte/libresprite.php"],

		// ["3D", "3d", false, "arte/3d.php"],
		// ["", "", true, "arte/unrealengine.php"],
		// ["", "", true, "arte/renpy.php"],
		// ["", "", true, "arte/construct.php"],
		// ["", "", true, "arte/gbstudio.php"],
		// ["", "", true, "arte/unity.php"],
		// ["", "", true, "arte/enginesdatabase.php"],

		// ["", "", false, "arte/purecode.php"],
		// ["", "", true, "arte/cpp.php"],
		)
	);
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
