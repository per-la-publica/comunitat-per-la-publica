<?php
/**
 * Tasques languages
 *
 * @package ElggTasks
 */

$catalan = array(

	/**
	 * Menu items and titles
	 */

	'tasks' => "Tasques",
	'tasks:owner' => "Tasques de %s",
	'tasks:friends' => "Tasques dels amics",
	'tasks:all' => "Totes les tasques del lloc",
	'tasks:add' => "Afegir tasca",
	'tasks:addlist' => "Afegir llista",
	
	'tasks:lists' => "Llista de tasques",
	'tasks:lists:owner' => "Llista de tasques de %s",
	'tasks:lists:friends' => "Llista de tasques d&#39;Amics",
	'tasks:lists:all' => "Llista de tasques de tot el lloc",

	'tasks:group' => "Tasques del Grup",
	'groups:enabletasks' => 'Habilitar tasques de grup',

	'tasks:edit' => "Editar aquesta tasca",
	'tasks:delete' => "Eliminar aquesta tasca",
	'tasks:view' => "Veure tasca",
	
	'tasks:lists:add' => "Afegir llista de tasques",
	'tasks:lists:edit' => "Editar aquesta llista de tasques",
	'tasks:lists:delete' => "Eliminar aquesta llista de tasques",
	'tasks:lists:view' => "Veure llista de tasques",

	'tasks:via' => "via tasques",
	'item:object:tasklist_top' => 'Llista de tasques superior',
	'item:object:tasklist' => 'Llista de tasques ',
	'item:object:task' => 'Tasques',
	'tasks:nogroup' => 'Aquest group no te cap tasca encara',
	'tasks:more' => 'M&eacute;s tasques',
	'tasks:none' => 'No hi han tasques creades encara',
	'tasks:lists:none' => 'No hi han llistes de tasques creades encara',
	'tasks:this' => 'Aquesta tasca',
	'tasks:this:moreinfo' => 'Pots trobar m&eacute;s informaci&oacute; a %s.',
	'tasks:this:moreinfo:here' => 'aqui',
	'tasks:this:referer:comment' => 'Creada la nova tasca: %s.',
	
	'tasks:priority:low' => 'Prioritat baixa',
	'tasks:priority:normal' => 'Prioritat normal',
	'tasks:priority:high' => 'Prioritat alta',
	
	'tasks:participant' => 'Participant de %s',
	'tasks:participants' => 'Participants de %s',
	'tasks:participants:see' => 'Veure qui est&agrave; participant',

	/**
	* River
	**/

	'river:create:object:task' => '%s ha creat la tasca %s',
	'river:create:object:tasklist' => '%s ha creat la llista de tasques %s',
	'river:create:object:tasklist_top' => '%s ha creat la llista de tasques %s',
	'river:update:object:task' => '%s ha actualitzat la tasca %s',
	'river:update:object:tasklist' => '%s ha actualitzat la llista de tasques %s',
	'river:update:object:tasklist_top' => '%s ha actualitzar la llista de tasques %s',
	'river:comment:object:task' => '%s ha comentat a la tasca %s',
	'river:comment:object:tasklist' => '%s ha comentat a la llista de tasques %s',
	'river:comment:object:tasklist_top' => '%s ha comentat a la llista de tasques %s',

	'river:assign:object:task' => "%s s&#39;ha assignat la llista de tasques %s",
	'river:activate:object:task' => "%s estableix com activa la llista de tasques %s",
	'river:assign_and_activate:object:task' => "%s s&#39;ha assignat i establit com activa la llista de tasques %s",
	'river:deactivate:object:task' => "%s no estableix com activa la llista de tasques %s",
	'river:mark_as_done:object:task' => "%s estableix com feta la llista de tasques %s",
	'river:reopen:object:task' => "%s torna a obrir la llista de tasques %s",
	'river:leave:object:task' => "%s deixa per fer la llista de tasques %s",
	'river:close:object:task' => "%s tanca la llista de tasques %s",
	
	/**
	 * Form fields
	 */

	'tasks:title' => 'Nom',
	'tasks:description' => 'Descripci&oacute;',
	'tasks:list_guid' => 'Llista',
	'tasks:priority' => 'Prioritat',
	'tasks:tags' => 'Etiquetes',
	'tasks:elapsed_time' => 'Temps transcorregut',
	'tasks:remaining_time' => 'Temps restant (temps per finalitzar la tasca)',
	'tasks:access_id' => 'Qui pot veure aquesta tasca?',
	
	'tasks:changehistory' => 'Hist&ograve;ric de canvis',
	'tasks:comments:post' => 'Desar canvis',
	'tasks:add:gofull' => 'Veure formulari complet',
	
	'tasks:state:actions' => 'Accions',
	'tasks:state:action:noaction' => 'Deixar com <em>%s</em>',
	'tasks:state:action:assign' => 'Acceptar aquesta tasca',
	'tasks:state:action:leave' => 'Deixar aquesta tasca',
	'tasks:state:action:activate' => 'Establir com la teva tasca activa',
	'tasks:state:action:deactivate' => 'No establir aquesta tasca com activa',
	'tasks:state:action:assign_and_activate' => 'Acceptar aquesta tasca i establir-la com activa teva',
	'tasks:state:action:mark_as_done' => 'Marcar aquesta tasca com feta',
	'tasks:state:action:close' => 'Tancar aquesta tasca',
	'tasks:state:action:reopen' => 'Tornar a obrir-la',
	
	'tasks:assigned' => 'Tasques assignades',
	'tasks:unassigned' => 'Tasques sense assignar',
	'tasks:closed' => 'Tasques tancades',
	
	'tasks:lists:title' => 'Nom',
	'tasks:lists:description' => 'Descripci&oacute;',
	'tasks:lists:startdate' => 'Data d&#39;inici',
	'tasks:enddate' => 'Data final (deadline)',
	'tasks:lists:tags' => 'Etiquetes',
	'tasks:lists:access_id' => 'Qui pot veure aquesta llista de tasques?',

	/**
	 * Status and error messages
	 */
	'tasks:noaccess' => 'No tens acc&eacute;s a la tasca',
	'tasks:cantedit' => 'No pots editar la tasca',
	'tasks:saved' => 'Tasca desada',
	'tasks:notsaved' => 'La tasca no es pot desar',
	'tasks:error:no_title' => 'Has d&#39;especificar un t&iacute;tol per aquesta tasca.',
	'tasks:delete:success' => 'Aquesta tasca s&#39;ha eliminat amb &egrave;xit.',
	'tasks:delete:failure' => 'Auqesta tasca no es pot eliminar.',
	'tasks:status:changed' => 'L&#39;estat de la tasca ha canviat amb &egrave;xit.',

	'tasks:lists:noaccess' => 'Sense acc&eacute;s a la llista de tasques',
	'tasks:lists:cantedit' => 'No es pot editar aquesta llista de tasques',
	'tasks:lists:saved' => 'Llista de tasques desada',
	'tasks:lists:notsaved' => 'No es pot desar la llista de tasques',
	'tasks:lists:error:no_title' => 'S&#39;ha d&#39;especificar un t&iacute;tol per aquesta llista de tasques.',
	'tasks:lists:delete:success' => 'La llista de tasques s&#39;ha eliminat amb &eacute;xit.',
	'tasks:lists:delete:failure' => 'La llista de tasques no s&#39;ha pogut eliminar.',
	
	/**
	 * Task
	 */
	'tasks:strapline:new' => 'Reportat %s per %s',
	'tasks:strapline:assigned' => 'Assignada %s a %s',
	'tasks:strapline:unassigned' => 'No assignada %s a %s',
	'tasks:strapline:active' => 'Assignada %s a %s',
	'tasks:strapline:done' => 'Fet %s per %s',
	'tasks:strapline:closed' => 'Tancat %s per %s',
	'tasks:strapline:reopened' => 'Tornat a obrir %s per %s',
	
	/**
	 * Task list
	 */
	'tasks:lists:strapline' => 'Creada %s per %s. ',
	'tasks:lists:deadline' => 'Deadline %s',
	
	'tasks:lists:graph:total' => '%s tasques',
	'tasks:lists:graph:remaining' => '%s pendents',
	'tasks:lists:graph:assigned' => '%s asignada',
	'tasks:lists:graph:active' => '%s actiu',
	
	/**
	 * Change history
	 */

	'tasks:history:assign' => "s&#39;assigna com seva aquesta tasca",
	'tasks:history:activate' => "set this as her active task",
	'tasks:history:deactivate' => "unset this as her active task",
	'tasks:history:assign_and_activate' => "s&#39;assigna i estableix com seva la tasca activa",
	'tasks:history:mark_as_done' => "estableix aquesta tasca com feta",
	'tasks:history:reopen' => "torna a obrir aquesta tasca",
	'tasks:history:leave' => "deixa per fer aquesta tasca",
	'tasks:history:close' => "tanca aquesta tasca",

	/**
	 * Widget
	 **/

	'tasks:active' => "Tasques actives",
	'tasks:num' => 'N&uacute;mero de tasques a visualitzar',
	'tasks:widget:description' => "Aquesta &eacute;s la llista de les teves tasques.",

	/**
	 * Submenu items
	 */
	'tasks:label:view' => "Veure tasca",
	'tasks:label:edit' => "Editar tasca",
	
	'tasks:lists:label:view' => "Veure la llista de tasques",
	'tasks:lists:label:edit' => "Edita la llista de tasques",
	
	/**
	 * Sidebar items
	 */
	'tasks:sidebar:this' => "Aquesta llista",
	'tasks:sidebar:children' => "Llista de tasques",
	'tasks:sidebar:list' => "Llista",
	'tasks:navigation' => 'Tasques',

	'tasks:newchild' => "Crear una subtasca",
	'tasks:backtolist' => "Tornar a '%s'",
	
	/**
	 * Times 
	 */
	'friendlytime:future:minutes' => "en %s minuts",
	'friendlytime:future:minutes:singular' => "en un minut",
	'friendlytime:future:hours' => "en %s hores",
	'friendlytime:future:hours:singular' => "en una hora",
	'friendlytime:future:days' => "en %s dies",
	'friendlytime:future:days:singular' => "dem&agrave;",

);

add_translation("ca", $catalan);
