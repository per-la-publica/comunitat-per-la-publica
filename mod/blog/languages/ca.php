<?php
/**
 * Blog Catalan language file.
 *
 */

$catalan = array(
	'blog' =>
 'Blogs',
	'blog:blogs' => 'Blogs',
	'blog:revisions' => 'Revisions',
	'blog:archives' => 'Arxius',
	'blog:blog' => 'Blog',
	'item:object:blog' => 'Blogs',

	'blog:title:user_blogs' => 'Blogs de %s',
	'blog:title:all_blogs' => 'Tots els blogs del lloc',
	'blog:title:friends' => 'Blogs d&acute;amics',

	'blog:group' => 'Blog del grup',
	'blog:enableblog' => 'Habilitar blog del grup',
	'blog:write' => 'Afegir una entrada al blog',

	// Editing
	'blog:add' => 'Afegir una entrada al blog',
	'blog:edit' => 'Editar entrada del blog',
	'blog:excerpt' => 'Extracte',
	'blog:body' => 'Cos',
	'blog:save_status' => 'Desat: ',
	'blog:never' => 'Mai',

	// Statuses
	'blog:status' => 'Estat',
	'blog:status:draft' => 'Esborrany',
	'blog:status:published' => 'Publicat',
	'blog:status:unsaved_draft' => 'Esborrany no desat',

	'blog:revision' => 'Revisi&oacute;',
	'blog:auto_saved_revision' => 'Revisi&oacute; desa autom&agrave;ticament',

	// messages
	'blog:message:saved' => 'Entrada del blog desada.',
	'blog:error:cannot_save' => 'No s&acute;ha pogut desar l&acute;entrada del blog.',
	'blog:error:cannot_write_to_container' => 'No t&eacute; els permisos necessaris per afegir el blog al grup.',
	'blog:error:post_not_found' => 'Aquesta entrada ha estat suprimida, no es v&agrave;lida o no t&eacute; els permisos necessaris per poder-la veure.',
	'blog:messages:warning:draft' => 'Hi ha un esborrany sense desar per aquesta entrada!',
	'blog:edit_revision_notice' => '(Versi&oacute; anterior)',
	'blog:message:deleted_post' => 'Entrada del blog eliminada.',
	'blog:error:cannot_delete_post' => 'No s&acute;ha pogut eliminar l&acute;entrada del blog.',
	'blog:none' => 'No hi ha entrades en el blog',
	'blog:error:missing:title' => 'Ha d&acute;ingressar un t&iacute;tol per al blog!',
	'blog:error:missing:description' => 'Ha d&acute;ingresar el cos del seu blog!',
	'blog:error:cannot_edit_post' => 'La publicaci&oacute; no existeix o no t&eacute; els permisos necessaris sobre ella.',
	'blog:error:revision_not_found' => 'No s&acute;ha pogut trobar la revisi&oacute;.',

	// river
	'river:create:object:blog' => '%s ha publicat una entrada al blog %s',
	'river:comment:object:blog' => '%s ha comentat  en el blog %s',

	// notifications
	'blog:newpost' => 'Una entrada nova de blog',

	// widget
	'blog:widget:description' => 'Mostrar las entrades m&eacute;s recents del blog',
	'blog:moreblogs' => 'M&eacute;s entrades del blog',
	'blog:numbertodisplay' => 'Quantitat d&acute;entrades del blog a mostrar',
	'blog:noblogs' => 'No hi ha entrades del blog'
);

add_translation('ca', $catalan);
