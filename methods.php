<?php

function href(string $name, string $link)
{
	if (substr($link, 0, 1) == '#') {
		echo "<a href='" . $link . "'>" . $name . "</a>";
	} else {
		echo "<a href='" . $link . "' target='_blank' rel='noopener noreferrer'>" . $name . "</a>";
	}
}

function button_spec(string $name, string $link)
{
	echo '<div class="col-12 col-md-4 p-3">
			<a href="' . $link . '" class="btn-especializacoes">
				' . $name . '
			</a>
		</div>';
}

// [Section Name, SectionTag, subsection?, SectionPathPHP]
function create_section(array $args)
{
	/*
	echo '<div id="lateral-menu" class="fixed-hide nav-section">
	<ol>
	';
	*/

	foreach ($args as [$name, $tag, $subsection]) {
		if($subsection)
		{
			echo "<ul>";
			echo href($name, '#nav-' . $tag);
			echo "</ul>";
		} else {
			echo "<li>";
			echo href($name, '#nav-' . $tag);
			echo "</li>";
		}
	}
}

?>
