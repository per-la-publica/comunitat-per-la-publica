<?php
/**
 * Assembly Spanish language file.
 *
 */

$spanish = array(
	'assemblies' => 'Asambleas',
	'assemblies:assembly' => 'Asamblea',
	'item:object:assembly' => 'Asambleas',
	'item:object:decission' => 'Orden del día',
	'assemblies:none' => 'No hay asambleas',
	'assemblies:assembly:none' => 'No hay asambleas',
	'assemblies:none-previous' => 'No hay asambleas anteriores',
	'assemblies:general_assembly' => 'Asamblea general',

	'assemblies:title:all_assemblies' => 'Todas las asambleas del sitio',
	'assembly:edit_general' => 'Editar valores por defecto',

	'assembly:group' => 'Asambleas del grupo',
	'assemblies:group' => 'Asamblea del grupo',
	'assemblies:decission:group' => 'Actas del grupo',
	'assemblies:enableassemblies' => 'Activar las asambleas en el grupo',
	'assemblies:next' => 'Próxima asamblea',

	// General properties
	'assemblies:assembly_location' => 'Localización por defecto',
	'assemblies:periodicity' => 'Periodicidad',
	'assemblies:chat' => 'Url del chat',
	'assemblies:streaming' => 'Url de streaming',
	'assemblies:voip' => 'Url de voip',
	'assemblies:location' => 'Localización por defecto',

	// Assembly fields
	'assemblies:assembly:title' => 'Título',
	'assemblies:assembly:description' => 'Descripción',
	'assemblies:assembly:date' => 'Fecha',
	'assemblies:assembly:location' => 'Localización',
	'assemblies:assembly:category' => 'Secciones',
	'assemblies:assembly:access_id' => 'Acceso',
	'assemblies:assembly:children' => 'Orden del día',
	'assemblies:assembly:owner' => 'Creado por %s',

	// Date sort menu
	'assemblies:assembly:section:all' => 'Todas',
	'assemblies:assembly:section:previous' => 'Hechas',
	'assemblies:assembly:section:next' => 'Próximas',

	// Decissions
	'decission:add' => 'Añadir un punto',
	'decission:edit' => 'Editar un punto',
	'assemblies:decission:title' => 'Título',
	'assemblies:decission:description' => 'Objetivo',
	'assemblies:decission:date' => 'Fecha',
	'assemblies:decission:access_id' => 'Acceso',
	'assemblies:decission:status' => 'Estado',
	'assemblies:decission:tags' => 'Tags',
	'assemblies:decission:proposal' => 'Propuesta',
	'assemblies:decission:mode' => 'Clase',
	'assemblies:decission:owner' => 'Propuesto por %s',
	'assemblies:decission:children' => 'Propuestas para esta decisión',
	'assemblies:decission:child' => 'Propuesta',
	'assemblies:decission:none' => 'No hay decisiones',
	'assemblies:decission:category' => 'Sección',

	// modes
	'assemblies:decission:section:all' => 'Todas',
	'assemblies:decission:section:permanent' => 'Permanentes',
	'assemblies:decission:section:conjunctural' => 'Coyunturales',
	// statuses
	'assemblies:decission:new' => 'Nueva',
	'assemblies:decission:accepted' => 'Aceptada',
	'assemblies:decission:discarded' => 'Descartada',
	'assemblies:decission:delayed' => 'Postpuesta',
	'assemblies:decission:section:new' => 'Nuevas',
	'assemblies:decission:section:accepted' => 'Aceptadas',
	'assemblies:decission:section:discarded' => 'Descartadas',
	'assemblies:decission:section:delayed' => 'Postpuestas',

	// Group widget
	'assemblies:link:view' => 'Ver',
	'assemblies:link:edit' => 'Editar',
	'assemblies:info' => 'Info',
	'assemblies:info:when' => 'Cuando',
	'assemblies:info:where' => 'Dónde',
	'assemblies:agenda' => 'Orden del día',
	'assemblies:minutes' => 'Actas',

	// Tooltips
	'assemblies:link:view:tooltip' => 'Ver la próxima asamblea',
	'assemblies:link:edit:tooltip' => 'Editar la próxima asamblea',
	'assemblies:link:view:all:tooltip' => 'Ver todas las asambleas',

	// Crud
	'crud:assembly:nochildren' => 'No hay puntos creados para esta asamblea',
	'crud:assembly:addchild' => 'Añadir',
	

	// Editing
	'assembly:add' => 'Añadir una asamblea',
	'assembly:edit' => 'Editar una asamblea',

	// messages
	'assemblies:message:saved' => 'No pudo guardarse la asamblea.',
	'assemblies:error:cannot_save' => 'No se ha podido guardar la asamblea.',
	'assemblies:error:cannot_write_to_container' => 'Acceso insuficiente para guardar la asamblea dentro del grupo.',
	'assemblies:message:deleted_assembly' => 'Se ha borrado la asamblea.',
	'assemblies:error:cannot_delete_assembly' => 'No se ha podido borrar la asamblea.',
	'assemblies:error:assembly_not_found' => 'No se ha encontrado la asamblea.',
	'assemblies:message:deleted_decission' => 'Punto del orden del día borrado.',
	'assemblies:error:cannot_delete_decission' => 'No se ha podido borrar el punto del orden del día',
	'assemblies:error:decission_not_found' => 'No se ha encontrado el punto de orden del día.',
	'assemblies:error:missing:title' => 'Es necesario rellenar el título de la asamblea!',
	'assemblies:error:cannot_edit' => 'La asamblea no existe o no tienes permisos para editarla.',

	// river
	'river:create:object:assembly' => '%s ha publicado una asamblea %s',
	'river:create:object:decission' => '%s ha publicado un punto de orden del día %s',
	'river:edited:object:assembly' => '%s ha editado una asamblea %s',
	'river:edited:object:decission' => '%s ha editado un punto de orden del día %s',
	'river:comment:object:assembly' => '%s comentado sobre la asamblea %s',
	'river:comment:object:decission' => '%s ha comentado sobre el punto de orden del día %s',

	// notifications
	'assemblies:newcall' => 'Una nueva asamblea',
	'assemblies:notification' =>
'
%s ha realizado un llamamiento de asamblea.

%s
%s

Puedes ver y sugerir nuevas propuestas a la asamblea:
%s
',

	// Other
	'assemblies:decission:link' => 'Enlazar a la próxima asamblea',
	'assemblies:decission:linked' => 'Se ha enlazado la propuesta a la próxima asamblea',
	'assemblies:decission:cantlink' => 'No se ha podido enlazar la propuesta',
	'assemblies:decission:nonext' => 'No hay asambleas pendientes',


	// group`widget
	'assemblies:widget:description' => 'Mostrar las próximas asambleas',
	'assemblies:moreassemblies' => 'Más asambleas',
	'assemblies:numbertodisplay' => 'Número de asambleas que se mostrarán',
	'assemblies:nocalls' => 'No hay asambleas pendientes',

	// user`widget
	'assemblies:assembly:numbertodisplay' => 'Número máximo de asambleas que se mostrarán'
);

add_translation('es', $spanish);
