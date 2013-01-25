<?php

$assembly = $vars['next_assembly'];
if (!empty($assembly)) {
	echo "<b>".elgg_echo("assemblies:info:when")."</b>";
	echo "<p>";
	echo date("d.m.y", $assembly->date);
	echo "</p>";
	echo "<b>".elgg_echo("assemblies:info:where")."</b>";
	echo "<p>";
	echo $assembly->location;
	echo "</p>";
} else {
	echo elgg_echo("assemblies:none");
}
