<?php

$crud = $vars['crud'];

$options_values = array();
foreach($vars['options'] as $option) {
	$options_values[$option] = elgg_echo("$crud->module:$crud->crud_type:$option"); 
}
unset($vars['options']);
$vars['options_values'] = $options_values;

echo elgg_view('input/dropdown', $vars);
