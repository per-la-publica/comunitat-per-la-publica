<?php

$class = elgg_extract('class', $vars);
$box = elgg_extract('box', $vars);

if ($class) {
	$class = "group-submodule-box $class";
} else {
	$class = "group-submodule-box";
}

if (elgg_view_exists("assemblies/group_module_boxes/$box")) {
	$box = elgg_view("assemblies/group_module_boxes/$box", $vars);
}

echo <<<HTML
<div class="$class">
	<div class="group-submodule-box-inner">
	$box
	</div>
</div>
HTML;
