<?php
/**
 * Delete crud entity
 *
 * @package CRUD
 */

$entity_guid = get_input('guid');
$entity = get_entity($entity_guid);

$crud_type = $entity->getSubtype();
$crud = crud_get_handler($crud_type);

$module = $crud->module;

if (elgg_instanceof($entity, 'object', $crud_type) && $entity->canEdit()) {
	$parent = get_entity($entity->parent_guid);
	$container = get_entity($entity->container_guid);
	if ($entity->delete()) {
		system_message(elgg_echo("$module:message:deleted_$crud_type"));
		if ($parent) {
			$parent_type = $parent->getSubtype();
			forward("$parent_type/view/$parent->guid");
		} else {
			forward("$crud_type/owner/$container->guid");
		}
	} else {
		register_error(elgg_echo("$module:error:cannot_delete_$crud_type"));
	}
} else {
	register_error(elgg_echo("$module:error:$crud_type"."_not_found"));
}

forward(REFERER);
