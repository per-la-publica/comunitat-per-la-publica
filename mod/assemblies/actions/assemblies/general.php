<?php
/**
 * Create or edit a crud object
 *
 * @package Assemblies
 */

$crud_type = get_input('crud');
$guid = get_input('guid');

$entity = get_entity($guid);
$crud = crud_get_handler($crud_type);

$msg_prefix = $crud->module.":general";

$variables = array('periodicity' => 'text',
		   'chat' => 'text',
		   'streaming' => 'text',
		   'voip' => 'text',
		   'location' => 'text');
$input = array();
foreach ($variables as $name => $type) {
	$input[$name] = get_input($name);
}

// Get guids
$group = (int)get_input('guid');

elgg_make_sticky_form('assemblies_general');

foreach($input as $name => $value) {
	$name = 'assembly_' . $name;
	$entity->$name = $value;
}

if ($entity->save()) {

	elgg_clear_sticky_form('assemblies_general');

	system_message(elgg_echo($msg_prefix.':saved'));

	/*if ($new_entity) {
		add_to_river('river/object/crud/create', 'create', elgg_get_logged_in_user_guid(), $entity->guid);
	}
	else {
		add_to_river('river/object/crud/create', 'edited', elgg_get_logged_in_user_guid(), $entity->guid);
	}*/

	forward('assembly/owner/'.$guid);
} else {
	register_error(elgg_echo($msg_prefix.':error:no_save'));
	forward(REFERER);
}
