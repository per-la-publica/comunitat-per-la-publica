<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$catalan = array(

	/**
	 * Menu items and titles
	 */
	'pages' => "P&agrave;gines",
	'pages:owner' => "P&agrave;gines de %s",
	'pages:friends' => "P&agrave;gines de contactes",
	'pages:all' => "Totes les p&agrave;gines",
	'pages:add' => "Afegir p&agrave;gina",

	'pages:group' => "P&agrave;gines de grup",
	'groups:enablepages' => 'Habilitar p&agrave;gines del grup',

	'pages:edit' => "Editar aquesta p&agrave;gina",
	'pages:delete' => "Eliminar aquesta p&agrave;gina",
	'pages:history' => "Historial",
	'pages:view' => "Veure p&agrave;gina",
	'pages:revision' => "Revisi&oacute;",

	'pages:navigation' => "Navegaci&oacute;",
	'pages:via' => "p&agrave;gines via",
	'item:object:page_top' => 'P&agrave;gines de nivell superior',
	'item:object:page' => 'P&agrave;gines',
	'pages:nogroup' => 'El grup no t&eacute; encara cap p&agrave;gina',
	'pages:more' => 'M&eacute;s p&agrave;gines',
	'pages:none' => 'Encara no hi ha cap p&agrave;gina creada',

	/**
	* River
	**/
	'river:create:object:page' => '%s ha creat la p&agrave;gina %s',
	'river:create:object:page_top' => '%s ha creat una p&agrave;gina %s',
	'river:update:object:page' => '%s ha actualizat la p&agrave;gina %s',
	'river:update:object:page_top' => '%s ha actualizat una p&agrave;gina %s',
	'river:comment:object:page' => '%s ha comentat en la p&agrave;gina %s',
	'river:comment:object:page_top' => '%s ha comentat en la p&agrave;gina %s',

	/**
	 * Form fields
	 */
	'pages:title' => 'T&iacute;tol de la p&agrave;gina',
	'pages:description' => 'Text de la p&agrave;gina',
	'pages:tags' => 'Etiquetes',
	'pages:access_id' => 'Acc&eacute;s de lectura',
	'pages:write_access_id' => 'Acc&eacute;s d&acute;escriptura',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No hi ha acc&eacute;s a la p&agrave;gina',
	'pages:cantedit' => 'No pot editar aquesta p&agrave;gina',
	'pages:saved' => 'P&agrave;gina desada',
	'pages:notsaved' => 'La p&agrave;gina no s&acute;ha pogut desar',
	'pages:error:no_title' => 'Ha d&acute;especificar un t&iacute;tol per aquesta p&agrave;gina.',
	'pages:delete:success' => 'La p&agrave;gina ha estat eliminada correctament.',
	'pages:delete:failure' => 'La p&agrave;gina no ha pogut ser eliminada.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Actualizaci&oacute;n m&eacute;s recent %s per %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revisi&oacute; creada %s per %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Quantitat de p&agrave;gines a mostrar',
	'pages:widget:description' => "Aquest &eacute;s el llistat de les seves p&agrave;gines.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Veure p&agrave;gina",
	'pages:label:edit' => "Editar p&agrave;gina",
	'pages:label:history' => "Historial de la p&agrave;gina",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Aquesta p&agrave;gina",
	'pages:sidebar:children' => "Sub-p&agrave;gines",
	'pages:sidebar:parent' => "Mare",

	'pages:newchild' => "Crear una sub-p&agrave;gina",
	'pages:backtoparent' => "Tornar a '%s'",
);

add_translation("ca", $catalan);