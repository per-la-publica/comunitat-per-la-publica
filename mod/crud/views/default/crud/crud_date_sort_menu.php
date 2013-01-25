<?php
/**
 * All crud objects listing page navigation
 *
 * @uses $vars['selected'] Name of the tab that has been selected
 * @uses $vars['crud'] Crud metadata object
 */

$crud = $vars['crud'];
$container_guid = elgg_get_page_owner_guid();
$msg_prefix = "$crud->module:$crud->crud_type:section";

$tabs = array('all' => array(
                'text' => elgg_echo($msg_prefix.':all'),
                'href' => $crud->crud_type.'/owner/'.$container_guid.'?filter=all',
                'priority' => 200,
        ));
$tab_var = $crud->variables[$crud->list_tabs];
$tab_options = $tab_var['options'];

$selected = $vars['selected'];
if (!$selected) {
	$selected = 'all';
}

$priority = 300;

$tab_options = array('all', 'previous', 'next');

foreach($tab_options as $tab_option) {
	$tabs[$tab_option] = array(
                'text' => elgg_echo("$msg_prefix:$tab_option"),
                'href' => $crud->crud_type.'/owner/'.$container_guid.'?filter='.$tab_option,
                'priority' => $priority,
        );
	$priority += 100;
}


foreach ($tabs as $name => $tab) {
	$tab['name'] = $name;

	if ($selected == $name) {
		$tab['selected'] = true;
	}

	elgg_register_menu_item('filter', $tab);
}

echo elgg_view_menu('filter', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));
