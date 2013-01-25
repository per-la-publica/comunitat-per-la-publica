<?php
   elgg_load_library('elgg:assemblies');

   $guid = get_input('guid');

   $entity = get_entity($guid);
   $user = elgg_get_logged_in_user_entity();

   if (!$entity->canEdit()) {
	register_error(elgg_echo("proposals:decission:cantlink"));
        forward(REFERER);
   }

   $next_assembly = assemblies_get_next_assembly();

   if (!empty($next_assembly)) {
   	$entity->parent_guid = $next_assembly->guid;
        system_message(elgg_echo("proposals:decission:linked"));
        forward($next_assembly->getURL());
   }
   else {
        register_error(elgg_echo("proposals:decission:nonext"));
        forward(REFERER);
   }

   //forward($entity->getURL());
