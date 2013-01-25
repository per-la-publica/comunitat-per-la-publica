<?php
/**
 * User assembly widget display view
 */

elgg_load_library('elgg:assemblies');

$user = elgg_get_logged_in_user_entity();
$num = $vars['entity']->num_display;

$options = array(
	'types' => 'group',
	'relationship' => 'member',
	'relationship_guid' => $user->guid,
	'inverse_relationship' => FALSE,
	'limit' => $num,
	'full_view' => FALSE,
	'pagination' => FALSE,
	'metadata_name' => 'assembly_location',
);
$groups = elgg_get_entities_from_relationship($options);

$assemblies = array();

$list_body = "";

foreach($groups as $group) {
	$next_assembly = assemblies_get_next_assembly();
	if ($next_assembly) {
		$icon = elgg_view_entity_icon($group, 'tiny');
		$link = elgg_view('output/url', array(
			'href' => $next_assembly->getURL(),
			'text' => $next_assembly->getTitle(),
		));

		$params = array(
			'entity' => $group,
			'title' => $group->name,
			'subtitle' => $link,
			'tags' => false,
		);
		$params = $params;
		$list_body = elgg_view('object/elements/summary', $params);
	}
}

$content = elgg_view_image_block($icon, $list_body);


if ($content) {
	echo $content;
} else {
	echo elgg_echo('assemblies:noassembly');
}
