<?php
/**
 * Assembly Catalan language file.
 *
 */

$catalan = array(
	'assemblies' => 'Assemblees',
	'assemblies:assembly' => 'Assemblea',
	'item:object:assembly' => 'Assemblees',
	'item:object:decission' => 'Ordre del dia',
	'assemblies:none' => 'No hi ha assemblees',
	'assemblies:assembly:none' => 'No hi ha assemblees',
	'assemblies:none-previous' => 'No hi ha assemblees anteriors',
	'assemblies:general_assembly' => 'Assemblea general',

	'assemblies:title:all_assemblies' => 'Totes les assemblees del lloc',
	'assembly:edit_general' => 'Editar valors per defecte',

	'assembly:group' => 'Assemblees del grup',
	'assemblies:group' => 'Assemblea del grup',
	'assemblies:decission:group' => 'Actes del grup',
	'assemblies:enableassemblies' => 'Activar les assemblees al grup',
	'assemblies:next' => 'Pròxima assemblea',

	// General properties
	'assemblies:assembly_location' => 'Localització per defecte',
	'assemblies:periodicity' => 'Periodicitat',
	'assemblies:chat' => 'Url del xat',
	'assemblies:streaming' => 'Url del streaming',
	'assemblies:voip' => 'Url del voip',
	'assemblies:location' => 'Localització per defecte',

	// Assembly fields
	'assemblies:assembly:title' => 'Títol',
	'assemblies:assembly:description' => 'Descripció',
	'assemblies:assembly:date' => 'Data',
	'assemblies:assembly:location' => 'Localització',
	'assemblies:assembly:category' => 'Seccions',
	'assemblies:assembly:access_id' => 'Accés',
	'assemblies:assembly:children' => 'Ordre del dia',
	'assemblies:assembly:owner' => 'Creat per %s',

	// Date sort menu
	'assemblies:assembly:section:all' => 'Totes',
	'assemblies:assembly:section:previous' => 'Fetes',
	'assemblies:assembly:section:next' => 'Pròximes',

	// Decissions
	'decission:add' => 'Afegir un punt',
	'decission:edit' => 'Editar un punt',
	'assemblies:decission:title' => 'Títol',
	'assemblies:decission:description' => 'Objetiu',
	'assemblies:decission:date' => 'Data',
	'assemblies:decission:access_id' => 'Accés',
	'assemblies:decission:status' => 'Estat',
	'assemblies:decission:tags' => 'Tags',
	'assemblies:decission:proposal' => 'Proposta',
	'assemblies:decission:mode' => 'Classe',
	'assemblies:decission:owner' => 'Proposat por %s',
	'assemblies:decission:children' => 'Propostes per aquesta decisió',
	'assemblies:decission:child' => 'Proposta',
	'assemblies:decission:none' => 'No hi ha decisions',
	'assemblies:decission:category' => 'Secció',

	// modes
	'assemblies:decission:section:all' => 'Totes',
	'assemblies:decission:section:permanent' => 'Permanents',
	'assemblies:decission:section:conjunctural' => 'Conjunturals',
	// statuses
	'assemblies:decission:new' => 'Nova',
	'assemblies:decission:accepted' => 'Acceptada',
	'assemblies:decission:discarded' => 'Descartada',
	'assemblies:decission:delayed' => 'Posposada',
	'assemblies:decission:section:new' => 'Noves',
	'assemblies:decission:section:accepted' => 'Aceptades',
	'assemblies:decission:section:discarded' => 'Descartades',
	'assemblies:decission:section:delayed' => 'Posposades',

	// Group widget
	'assemblies:link:view' => 'Veure',
	'assemblies:link:edit' => 'Editar',
	'assemblies:info' => 'Info',
	'assemblies:info:when' => 'Quan',
	'assemblies:info:where' => 'On',
	'assemblies:agenda' => 'Ordre del dia',
	'assemblies:minutes' => 'Actes',

	// Tooltips
	'assemblies:link:view:tooltip' => 'Veure la propera assemblea',
	'assemblies:link:edit:tooltip' => 'Editar la propera assemblea',
	'assemblies:link:view:all:tooltip' => 'Veure totes les assemblees',

	// Crud
	'crud:assembly:nochildren' => 'No hi ha punts creats per aquesta assemblea',
	'crud:assembly:addchild' => 'Afegir',
	

	// Editing
	'assembly:add' => 'Afegir una assemblea',
	'assembly:edit' => 'Editar una assemblea',

	// messages
	'assemblies:message:saved' => 'No s\'ha pogut desar l\'assemblea.',
	'assemblies:error:cannot_save' => 'No s\'ha pogut desar l\'assemblea.',
	'assemblies:error:cannot_write_to_container' => 'Accés insuficient per desar l\'assemblea dins del grup.',
	'assemblies:message:deleted_assembly' => 'S\'ha esborrat l\'assemblea.',
	'assemblies:error:cannot_delete_assembly' => 'No s\'ha pogut esborrar l\'assemblea.',
	'assemblies:error:assembly_not_found' => 'No s\'ha trobat l\'assemblea.',
	'assemblies:message:deleted_decission' => 'Punt de l\'ordre del dia esborrat.',
	'assemblies:error:cannot_delete_decission' => 'No s\'ha pogut esborrar el punt d\'ordre del dia',
	'assemblies:error:decission_not_found' => 'No s\'ha trobat el punt d\'ordre del dia.',
	'assemblies:error:missing:title' => 'És necessari omplir el títol de l\'assemblea!',
	'assemblies:error:cannot_edit' => 'L\'assemblea no existeix o no tens permisos per editar-la.',

	// river
	'river:create:object:assembly' => '%s ha publicat una assemblea %s',
	'river:create:object:decission' => '%s ha publicat un punt d\'ordre del dia %s',
	'river:edited:object:assembly' => '%s ha editat una assemblea %s',
	'river:edited:object:decission' => '%s ha editat un punt d\'ordre del dia %s',
	'river:comment:object:assembly' => '%s comentat sobre l\'assemblea %s',
	'river:comment:object:decission' => '%s ha comentat sobre el punt d\'ordre del dia %s',

	// notifications
	'assemblies:newcall' => 'Una nova assemblea',
	'assemblies:notification' =>
'
%s ha realitzat una crida d\'assemblea.

%s
%s

Pots veure i suggerir noves propostes a l\'assemblea:
%s
',

	// Other
	'assemblies:decission:link' => 'Enllaçar a la pròxima assemblea',
	'assemblies:decission:linked' => 'S\'ha enllaçat la proposta a la propera assemblea',
	'assemblies:decission:cantlink' => 'No s\'ha pogut enllaçar la proposta',
	'assemblies:decission:nonext' => 'No hi ha assemblees pendents',


	// group`widget
	'assemblies:widget:description' => 'Mostrar les properes assemblees',
	'assemblies:moreassemblies' => 'Més assemblees',
	'assemblies:numbertodisplay' => 'Nombre d\'assemblees que es mostraran',
	'assemblies:nocalls' => 'No hi ha assemblees pendents',

	// user`widget
	'assemblies:assembly:numbertodisplay' => 'Nombre màxim d\'assemblees que es mostraran'
);

add_translation('ca', $catalan);
