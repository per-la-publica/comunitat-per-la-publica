<?php

$catalan = array( 
	/**
	 * Menu items and titles
	 */
	'messageboard:board' => "Mur",
	'messageboard:messageboard' => "mur",
	'messageboard:viewall' => "Veure-ho tot",
	'messageboard:postit' => "Publicar",
	'messageboard:history:title' => "Historial",
	'messageboard:none' => "Encara no hi ha res en aquest mur",
	'messageboard:num_display' => "Missatges a mostrar",
	'messageboard:desc' => "Això és un mur en el qual poden posar comentaris altres usuaris. Vostè també pot comentar en el dels altres.",

	'messageboard:user' => "Mur de %s",

	'messageboard:replyon' => 'respondre',
	'messageboard:history' => "historial",

	'messageboard:owner' => 'mur de %s',
	'messageboard:owner_history' => '%s ha comentat en el mur de %s',

	/**
	 * Message board widget river
	 */
	'river:messageboard:user:default' => "%s ha comentat en el mur de %s",

	/**
	 * Status messages
	 */
	'messageboard:posted' => "Comentari en el mur afegit.",
	'messageboard:deleted' => "Comentari eliminat.",

	/**
	 * Email messages
	 */
	'messageboard:email:subject' => 'Hi ha un missatge nou en el mur!',
	'messageboard:email:body' => "Hi ha un comentari nou en el mur de %s. Diu:

%s


Per veure els comentaris del mur, premi aqu&iacute;:

	%s

Per veure el perfil de %s, premi aqu&iacute;:

	%s

Si us plau, no respogui aquest missatge de correu.",

	/**
	 * Error messages
	 */
	'messageboard:blank' => "Ens sap greu, ha d´ingressar contingut a l´àrea de missatge per poder desar.",
	'messageboard:notfound' => "Ens sap greu, no s´ha pogut trobar l´element especificat.",
	'messageboard:notdeleted' => "Ens sap greu, no s´ha pogut eliminar el missatge.",
	'messageboard:somethingwentwrong' => "Asseguri´s d´haver escrit un missatge.",

	'messageboard:failure' => "Hi ha hagut una errada inesperada a l´hora d´intentar publicar el missatge. Si us plau, torni-ho a intentar",

);

add_translation('ca', $catalan); 

?>