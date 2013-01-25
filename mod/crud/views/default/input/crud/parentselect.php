<?php

$varname = $vars['name'];

$crud = $vars['crud'];
$parent = $vars['parent'];

$data = $crud->getVariableData($varname);
$property_name = $data['property'];
$values = $parent->$property_name;

$options_values = array();
foreach($values as $option) {
	//$options_values[$option] = elgg_echo("$crud->module:$crud->crud_type:$option"); 
	$options_values[$option] = $option; 
}
unset($vars['options']);
$vars['options_values'] = $options_values;

echo elgg_view('input/dropdown', $vars);
