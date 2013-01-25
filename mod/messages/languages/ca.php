<?php
/**
* Elgg send a message action page
* 
* @package ElggMessages
*/

$catalan = array(
	/**
	* Menu items and titles
	*/

	'messages' => "Missatges",
	'messages:back' => "Tornar a missatges",
	'messages:user' => "Safata d&acute;entrada de %s",
	'messages:posttitle' => "Missatges de %s: %s",
	'messages:inbox' => "Safata d&acute;entrada",
	'messages:send' => "Enviar",
	'messages:sent' => "Enviat",
	'messages:message' => "Missatge",
	'messages:title' => "Assumpte",
	'messages:to' => "Per a",
	'messages:from' => "De",
	'messages:fly' => "Enviar",
	'messages:replying' => "Missatge de resposta a",
	'messages:inbox' => "Safata d'entrada",
	'messages:sendmessage' => "Enviar un missatge",
	'messages:compose' => "Redactar",
	'messages:add' => "Redactar",
	'messages:sentmessages' => "Missatges enviats",
	'messages:recent' => "Missatges recents",
	'messages:original' => "Missatge original",
	'messages:yours' => "El seu missatge",
	'messages:answer' => "Respondre",
	'messages:toggle' => 'Invertir-los tots',
	'messages:markread' => 'Marcar com a llegit',
	'messages:recipient' => 'Trii un destinatari&hellip;',
	'messages:to_user' => 'Per a: %s',

	'messages:new' => 'Missatge nou',

	'notification:method:site' => 'Missatges',

	'messages:error' => 'Hi ha hagut una errada a l&acute;hora de desar el missatge. Si us plau, torni-ho a intentar.',

	'item:object:messages' => 'Missatges',

	/**
	* Status messages
	*/
	'messages:posted' => "Missatge enviat correctament.",
	'messages:success:delete:single' => 'Missatge eliminat',
	'messages:success:delete' => 'Missatges eliminats',
	'messages:success:read' => 'Missatges marcats com a llegits',
	'messages:error:messages_not_selected' => 'No hi ha missatges seleccionats',
	'messages:error:delete:single' => 'No es pot eliminar el missatge',

	/**
	* Email messages
	*/
	'messages:email:subject' => 'T&eacute; un missatge nou!',
	'messages:email:body' => "T&eacute; un missatge nou de %s. Diu:


	%s


	Per veure els seus missatges, faci clic aqu&iacute;:

	%s

	Per enviar un missatge a %s, faci clic aqu&iacute;:

	%s

	Si us plau, no respongui aquest missatge de correu.",

	/**
	* Error messages
	*/
	'messages:blank' => "Ha d&acute;ingressar text en el cos del missatge per poder-lo desar.",
	'messages:notfound' => "Ens sap greu, no s&acute;ha pogut trobar el missatge especificat.",
	'messages:notdeleted' => "Ens sap greu, no s&acute;ha pogut eliminar el missatge.",
	'messages:nopermission' => "No disposa dels permisos necessaris per modificar el missatge.",
	'messages:nomessages' => "No hi ha missatges.",
	'messages:user:nonexist' => "No s&acute;ha pogut trobar el destinatari a la base de dades d&acute;usuaris.",
	'messages:user:blank' => "No s&acute;ha seleccionat cap destinatari.",

	'messages:deleted_sender' => 'Usuari eliminat',

);
		
add_translation("ca", $catalan);