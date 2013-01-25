<?php

elgg_load_library('elgg:assemblies');

$entity_guid = $vars['entity'];
$group = get_entity($entity_guid);

// Grab variables
$periodicity = $group->assembly_periodicity;
$chat = $group->assembly_chat;
$streaming_url = $group->assembly_streaming;
$voip = $group->assembly_voip;
$assembly_location = $group->assembly_location;

// Grab next assembly and format title
$next_assembly = assemblies_get_next_assembly($group);
if ($next_assembly) {
	$title = $next_assembly->getTitleLink();;
	$next_assembly_url = elgg_view('output/url', array(
				'href' => "assembly/view/$next_assembly->guid",
				'text' => $title,
				));
}
// Show next assembly link
if ($next_assembly) {
	echo "<br/>";
	echo "<b>".elgg_echo('assemblies:next')."</b>";
	echo ": " . $next_assembly_url;
	echo "<br/>";
}
// Show general assembly settings
if ($assembly_location) {
	echo "<b>".elgg_echo('assemblies:assembly_location')."</b>";
	echo ": " . $assembly_location;
	echo "<br/>";
}
if ($periodicity) {
	echo "<b>".elgg_echo('assemblies:periodicity')."</b>";
	echo ": " . $periodicity;
	echo "<br/>";
}
if ($chat) {
	echo "<b>".elgg_echo('assemblies:chat')."</b>";
	echo ": " . $chat;
	echo "<br/>";
}
if ($streaming_url) {
	echo "<b>".elgg_echo('assemblies:streaming')."</b>";
	echo ": " . $streaming_url;
	echo "<br/>";
}
if ($voip) {
	echo "<b>".elgg_echo('assemblies:voip')."</b>";
	echo ": " . $voip;
}


