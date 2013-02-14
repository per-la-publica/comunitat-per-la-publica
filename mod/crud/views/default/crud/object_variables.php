<?php
	$entity = $vars['entity'];
	$object_subtype = $entity->getSubtype();
	$crud_object = crud_get_handler($object_subtype);
	$children_categories = $crud_object->children_categories;

	$variables = elgg_get_config($object_subtype);
	foreach ($variables as $name => $type) {
		
		if (is_array($type)) {
			$type = elgg_extract('output_view', $type, elgg_extract('type', $type));
		}

		$value = $entity->$name;
		
		if (in_array($name, array('title', 'description', 'access_id'))) {
			continue;
		}
		if (!$value) {
			continue;
		}
		if ($children_categories == $name) {
			continue;
		}
	?>
	<div>
		<?php
			if ($name != 'tags') {
		?>
		<label><b><?php echo elgg_echo("$crud_object->module:$object_subtype:$name") ?>: </b></label>
		<?php
			}
			if ($type != 'longtext') {
			}
		?>
		<?php echo elgg_view("output/$type", array(
				'name' => $name,
				'crud' => $crud_object,
				'value' => $value,
			));
		?>
	</div>
	<?php
	}

