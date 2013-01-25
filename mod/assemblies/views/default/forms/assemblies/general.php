<?php
/**
 * Edit assembly general properties form
 *
 * @package Assemblies
 */

$group = get_entity($vars['guid']);
$vars['entity'] = $group;

// Grab variables
$periodicity = $group->assembly_periodicity;
$chat = $group->assembly_chat;
$voip = $group->assembly_voip;
$location = $group->assembly_location;
$streaming = $group->assembly_streaming;

$vars['periodicity'] = $periodicity;
$vars['chat'] = $chat;
$vars['streaming'] = $streaming;
$vars['voip'] = $voip;
$vars['location'] = $location;

$action_buttons = '';

$save_button = elgg_view('input/submit', array(
	'value' => elgg_echo('save'),
	'name' => 'save',
));
$action_buttons = $save_button;

$periodicity_label = elgg_echo('assemblies:periodicity');
$periodicity_input = elgg_view('input/text', array(
	'name' => 'periodicity',
	'id' => 'assembly_periodicity',
	'value' => $vars['periodicity']
));
$chat_label = elgg_echo('assemblies:chat');
$chat_input = elgg_view('input/text', array(
	'name' => 'chat',
	'id' => 'assembly_chat',
	'value' => $vars['chat']
));
$streaming_label = elgg_echo('assemblies:streaming');
$streaming_input = elgg_view('input/text', array(
	'name' => 'streaming',
	'id' => 'assembly_streaming',
	'value' => $vars['streaming']
));
$voip_label = elgg_echo('assemblies:voip');
$voip_input = elgg_view('input/text', array(
	'name' => 'voip',
	'id' => 'assembly_voip',
	'value' => $vars['voip']
));
$location_label = elgg_echo('assemblies:location');
$location_input = elgg_view('input/text', array(
	'name' => 'location',
	'id' => 'assembly_location',
	'value' => $vars['location']
));


// hidden inputs
$guid_input = elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['guid']));


echo <<<___HTML

$draft_warning

<div>
	<label for="assembly_periodicity">$periodicity_label</label>
	$periodicity_input
</div>

<div>
	<label for="assembly_chat">$chat_label</label>
	$chat_input
</div>

<div>
	<label for="assembly_streaming">$streaming_label</label>
	$streaming_input
</div>

<div>
	<label for="assembly_voip">$voip_label</label>
	$voip_input
</div>

<div>
	<label for="assembly_location">$location_label</label>
	$location_input
</div>


<div class="elgg-foot">
	$guid_input
	$action_buttons
</div>

___HTML;
