<?php

	/*
		2013 Translated by Toni Castillo Girona
		<tonicas.tcg@gmail.com>
	*/

	$catalan = array(
	
		/**
		 * Menu items and titles
		 */
	
			'poll' => htmlspecialchars("Votació"),
	        'polls:add' => htmlspecialchars("Nova Votació"),
			'polls' => htmlspecialchars("Votacions"),
			'polls:votes' => htmlspecialchars("vots"),
			'polls:user' => htmlspecialchars("Votació de") . " %s",
			'polls:group_polls' => htmlspecialchars("Votacions del Grup"),
			'polls:group_polls:listing:title' => htmlspecialchars("Votacions de") ." %s",
			'polls:user:friends' => htmlspecialchars("Votacions dels amics de") . " %s",
			'polls:your' => htmlspecialchars("Votacions en les que has participat"),
			'polls:not_me' => htmlspecialchars("Votacions de") . " %s",
			'polls:posttitle' => htmlspecialchars("Votacions de") . " %s: %s",
			'polls:friends' => htmlspecialchars("Votacions dels amics"),
			'polls:not_me_friends' => htmlspecialchars("Votacions dels amics de") . " %s",
			'polls:yourfriends' => htmlspecialchars("Les darreres votacions dels teus amics"),
			'polls:everyone' => htmlspecialchars("Totes les Votacions"),
			'polls:read' => htmlspecialchars("Llegir les Votacions"),
			'polls:addpost' => htmlspecialchars("Crear una nova Votació"),
			'polls:editpost' => htmlspecialchars("Editar la Votació:"). " %s",
			'polls:edit' => htmlspecialchars("Editar una Votació"),
			'polls:text' => htmlspecialchars("Títol de la Votació"),
			'polls:strapline' => "%s",			
			'item:object:poll' => htmlspecialchars("Votacions"),
			'item:object:poll_choice' => htmlspecialchars("Opcions per a la Votació"),
			'polls:question' => htmlspecialchars("Pregunta de la Votació"),
			'polls:responses' => htmlspecialchars("Opcions de Resposta"),
			'polls:results' => "[+] Mostrar els resultats",
			'polls:show_results' => htmlspecialchars("Mostrar els resultats"),
			'polls:show_poll' => htmlspecialchars("Mostrar la Votació"),
			'polls:add_choice' => htmlspecialchars("Afegir una nova opció de resposta"),
			'polls:delete_choice' => htmlspecialchars("Esborrar aquesta opció"),
			'polls:settings:group:title' => htmlspecialchars("Votacions de Grup"),
			'polls:settings:group_polls_default' => htmlspecialchars("Sí, activat per defecte"),
			'polls:settings:group_polls_not_default' => htmlspecialchars("Sí, desactivat per defecte"),
			'polls:settings:no' => "no",
			'polls:settings:group_profile_display:title' =>  
				"Si les Votacions de Grup estan activades," .
				htmlspecialchars("a ón s'haurien de mostrar dins dels perfils de grup?") ,
			'polls:settings:group_profile_display_option:left' => "esquerre",
			'polls:settings:group_profile_display_option:right' => "dreta",
			'polls:settings:group_profile_display_option:none' => "cap",
			'polls:settings:group_access:title' => 
				"Si les Votacions de Grup estan activades, qui en pot crear?",
			'polls:settings:group_access:admins' => htmlspecialchars("Propietaris del grup i administradors únicament"),
			'polls:settings:group_access:members' => "qualsevol membre del grup",
			'polls:settings:front_page:title' => 
						htmlspecialchars("Els Administradors poden possar una Votació a la Pàgina Principal"),
			'polls:none' => htmlspecialchars("No s'han trobat votacions"),
			'polls:permission_error' => htmlspecialchars("No tens permisos per editar aquesta Votació"),
			'polls:vote' => "Vota",
			'polls:login' => htmlspecialchars("Has d'iniciar sessió si vols participar en aquesta Votació"),
			'group:polls:empty' => "No hi ha votacions",
			'polls:settings:site_access:title' => "Qui pot crear votacions per a tota la Comunitat?",
			'polls:settings:site_access:admins' => htmlspecialchars("Administradors únicament"),
			'polls:settings:site_access:all' => "Qualsevol usuari validat",
			'polls:can_not_create' => "No tens permissos per crear votacions",
			'polls:front_page_label' => htmlspecialchars("Possar aquesta Votació a la pàgina principal."),
		/**
	     * poll widget
	     **/
			'polls:latest_widget_title' => "Darreres Votacions de la Comunitat",
			'polls:latest_widget_description' => htmlspecialchars("Mostra les votacions més recents."),
			'polls:my_widget_title' => "Les Meves Votacions",
			'polls:my_widget_description' => 
				htmlspecialchars("Aquest Widget mostrarà les Votacions en les que has participat"),
			'polls:widget:label:displaynum' => "Quantes votacions vols mostrar?",
			'polls:individual' => htmlspecialchars("Darrera Votació."),
			'poll_individual_group:widget:description' => 
				htmlspecialchars("Mostra la Darrera Votació per a aquest grup"),
			'poll_individual:widget:description' => 
				htmlspecialchars("Mostra la teva darrera Votació"),
			'polls:widget:no_polls' => "Encara no existeixen votacions per a %s.",
			'polls:widget:nonefound' => htmlspecialchars("No s'han trobat votacions"),
			'polls:widget:think' => "%s, ". htmlspecialchars("digue'ns que n'opines!"),
			'polls:enable_polls' => "Activar Votacions",
			'polls:group_identifier' => "(a %s)",
			'polls:noun_response' => "resposta",
			'polls:noun_responses' => "respostes",
	        'polls:settings:yes' => "sí",
			'polls:settings:no' => "no",
			
         /**
	     * poll river
	     **/
	        'polls:settings:create_in_river:title' => 
				htmlspecialchars("Mostrar la creació de Votacions en un flux"),
			'polls:settings:vote_in_river:title' => 
				htmlspecialchars("Mostrar la Participació en Votacions en un flux"),
			'river:create:object:poll' => '%s ha creat una' . htmlspecialchars(" Votació") . ' %s',
			'river:vote:object:poll' => '%s ha participat en la ' . htmlspecialchars("Votació") . '  %s',
			'river:comment:object:poll' => '%s ha afegit un commentari a la ' .
									htmlspecialchars("Votació") . ' %s',
		/**
		 * Status messages
		 */
	
			'polls:added' => htmlspecialchars("La teva Votació s'ha creat amb èxit."),
			'polls:edited' => htmlspecialchars("S'ha desat la teva Votació."),
			'polls:responded' => htmlspecialchars("Gràcies per participar; el teu vot ha quedat registrat."),
			'polls:deleted' => htmlspecialchars("La teva Votació s'ha esborrat correctament."),
			'polls:totalvotes' => "Nombre de votacions: ",
			'polls:voted' => htmlspecialchars("El teu vot ha estat emès. Gràcies per participar!"),
	
		/**
		 * Error messages
		 */
	
			'polls:save:failure' => htmlspecialchars("El teu vot no s'ha pogut desar, intenta-ho més tard."),
			'polls:blank' => htmlspecialchars("Ho sentim; has d'omplir tant les opcions com les respostes per
												poder crear la Votació"),
			'polls:novote' => htmlspecialchars("Ho sentim; has d'escollir una opció per poder emetre el vot."),
			'polls:notfound' => htmlspecialchars("Ho sentim; aquesta Votació no existeix."),
			'polls:nonefound' => htmlspecialchars("No s'han trobat Votacions de %s"),
			'polls:notdeleted' => htmlspecialchars("Ho sentim; aquesta Votació no es pot esborrar.")
	);
					
	add_translation("ca",$catalan);

?>
