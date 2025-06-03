<?php

function href(string $name, string $link)
{
	if (substr($link, 0, 1) == '#') {
		echo "<a href='" . $link . "'>" . $name . "</a>";
	} else {
		echo "<a href='" . $link . "' target='_blank' rel='noopener noreferrer'>" . $name . "</a>";
	}
}

?>