<?php

echo "<b>".elgg_echo("assemblies:minutes")."</b>";

$group = elgg_get_page_owner_entity();

// Get previous assemblies
$options = array('types' => 'object',
		 'subtypes' => 'assembly',
		 'limit' => 5,
		 'container_guid' => $group->guid,
		 'metadata_name_value_pairs' => array(
                                        array('name' => 'date',
                                                'value' => time(),
                                                'operand' => '<')
                                        ),
		 'order_by_metadata' => array('name' => 'date',
					      'direction' => 'DESC')
		);
$assemblies = elgg_get_entities_from_metadata($options);

if (count($assemblies)) {
	echo "<ul>";
	foreach ($assemblies as $assembly) {
		echo "<li>".elgg_view('output/url', array(
        		'href' => "assembly/view/$assembly->guid",
		        'text' => date("d.m.y", $assembly->date),
			))."</li>";
	}
	echo "</ul>";
} else {
	echo "<p>".elgg_echo("assemblies:none-previous")."</p>";
}
