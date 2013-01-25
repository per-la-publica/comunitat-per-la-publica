<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$catalan = array(

	/**
	 * Menu items and titles
	 */
	'file' => "Arxius",
	'file:user' => "Arxius de %s",
	'file:friends' => "Arxius de contactes",
	'file:all' => "Tots els arxius",
	'file:edit' => "Editar arxiu",
	'file:more' => "M&eacute;s arxius",
	'file:list' => "Vista de llista",
	'file:group' => "Arxius del grup",
	'file:gallery' => "Vista de galeria",
	'file:gallery_list' => "Vista de galeria o llista",
	'file:num_files' => "Quantitat d'arxius a mostrar",
	'file:user:gallery'=>'Vista %s galeria',
	'file:via' => 'arxius via',
	'file:upload' => "Carregar un arxiu",
	'file:replace' => 'Substituir contingut de l&acute;arxiu (deixar en blanc si no es vol modificar)',
	'file:list:title' => "%s - %s %s",
	'file:title:friends' => "De contactes",

	'file:add' => 'Carregar un arxiu',

	'file:file' => "Arxiu",
	'file:title' => "T&iacute;tol",
	'file:desc' => "Descripci&oacute;",
	'file:tags' => "Tags",

	'file:types' => "Tipus d&acute;arxiu carregats",

	'file:type:' => 'Arxius',
	'file:type:all' => "Tots els arxius",
	'file:type:video' => "V&iacute;deos",
	'file:type:document' => "Documents",
	'file:type:audio' => "&Agrave;udio",
	'file:type:image' => "Imatges",
	'file:type:general' => "General",

	'file:user:type:video' => "V&iacute;deos de %s",
	'file:user:type:document' => "Documents de %s",
	'file:user:type:audio' => "&Agrave;udio de %s",
	'file:user:type:image' => "Imatges de %s",
	'file:user:type:general' => "Arxius generals de %s",

	'file:friends:type:video' => "V&iacute;deos de contactes",
	'file:friends:type:document' => "Documents de contactes",
	'file:friends:type:audio' => "&Agrave;udio de contactes",
	'file:friends:type:image' => "Imatges de contactes",
	'file:friends:type:general' => "Arxius generals de contactes",

	'file:widget' => "Widget d&acute;arxius",
	'file:widget:description' => "Veure els arxius m&eacute;s recents",

	'groups:enablefiles' => 'Habilitar arxius de grups',

	'file:download' => "Descarregar",

	'file:delete:confirm' => "Vol esborrar aquest arxiu?",

	'file:tagcloud' => "N&uacute;vol d&acute;etiquetes",

	'file:display:number' => "Quantitat d&acute;arxius a mostrar",

	'river:create:object:file' => '%s ha carregat l&acute;arxiu %s',
	'river:comment:object:file' => '%s ha comentat l&acute;arxiu %s',

	'item:object:file' => 'Arxius',

	/**
	 * Embed media
	 **/
		'file:embed' => "Incrustar multim&egrave;dia",
		'file:embedall' => "Tot",

	/**
	 * Status messages
	 */
		'file:saved' => "Arxiu desat correctament.",
		'file:deleted' => "Arxiu eliminat correctament.",

	/**
	 * Error messages
	 */
		'file:none' => "No s&acute;ha carregat cap arxiu.",
		'file:uploadfailed' => "Ens sap greu, no s&acute;ha pogut desar l&acute;arxiu.",
		'file:downloadfailed' => "Ens sap greu, l&acute;arxiu no est&agrave; disponible en aquest moment.",
		'file:deletefailed' => "El seu arxiu no es pot eliminar en aquests moments.",
		'file:noaccess' => "No disposa dels permisos necessaris per modificar l&acute;arxiu",
		'file:cannotload' => "Hi ha hagut una errada a l'hora d&acute;intentar carregar l&acute;arxiu",
		'file:nofile' => "Ha de seleccionar un arxiu",
);

add_translation("ca", $catalan);