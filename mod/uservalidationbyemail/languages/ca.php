<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$catalan = array(
	'admin:users:unvalidated' =>
 'No validats',
	
	'email:validate:subject' => "%s si us plau, confirmi la seva adre&ccedil;a de correu per %s!",
	'email:validate:body' => "%s,

abans de comen&ccedil;ar a utilitzar %s, ha de confirmar la seva adre&ccedil;a de correu.

Si us plau, confirmi la seva adre&ccedil;a fent clic a l&acute;enlla&ccedil; de sota:

%s

Si no pot fer clic a l&acute;enlla&ccedil;, copii&acute;l i enganxi&acute;l en el seu explorador manualment.

%s
%s
",
	'email:confirm:success' => "Ha confirmat la seva adre&ccedil;a de correu!",
	'email:confirm:fail' => "La seva adre&ccedil;a de correu no ha pogut ser confirmada...",

	'uservalidationbyemail:registerok' => "Per activar el seu compte, per favor, confirmi la seva adre&ccedil;a de correu amb el correu que li hem enviat a la seva b&uacute;stia.",
	'uservalidationbyemail:login:fail' => "El seu compte no es troba validat. La identificaci&oacute; ha fallat. S&acute;ha enviat un altre correu de verificaci&oacute;.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'No hi ha usuaris no validats.',

	'uservalidationbyemail:admin:unvalidated' => 'No validat',
	'uservalidationbyemail:admin:user_created' => 'Registrat %s',
	'uservalidationbyemail:admin:resend_validation' => 'Reenviar validaci&oacute;',
	'uservalidationbyemail:admin:validate' => 'Validar',
	'uservalidationbyemail:admin:delete' => 'Eliminar',
	'uservalidationbyemail:confirm_validate_user' => 'Validar %s?',
	'uservalidationbyemail:confirm_resend_validation' => 'Reenviar correu de validaci&oacute; a %s?',
	'uservalidationbyemail:confirm_delete' => 'Eliminar %s?',
	'uservalidationbyemail:confirm_validate_checked' => 'Validar els usuaris seleccionats?',
	'uservalidationbyemail:confirm_resend_validation_checked' => 'Reenviar validaci&oacute; als usuaris seleccionats?',
	'uservalidationbyemail:confirm_delete_checked' => 'Eliminar els usuaris seleccionats?',
	'uservalidationbyemail:check_all' => 'Tots',

	'uservalidationbyemail:errors:unknown_users' => 'Usuaris desconeguts',
	'uservalidationbyemail:errors:could_not_validate_user' => 'No es pot validar l&acute;usuari.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'No es pot validar tots els usuaris seleccionats.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'No es pot eliminar l&acute;usuari.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'No es poden eliminar tots els usuaris seleccionats.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'No es pot reenviar la sol&middot;licitud de validaci&oacute;.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'No es poden reenviar les sol&middot;licituts de validaci&oacute; a tots els usuaris seleccionats.',

	'uservalidationbyemail:messages:validated_user' => 'Usuari validat.',
	'uservalidationbyemail:messages:validated_users' => 'Tots els usuaris seleccionats han estat validats.',
	'uservalidationbyemail:messages:deleted_user' => 'Usuari eliminat.',
	'uservalidationbyemail:messages:deleted_users' => 'Tots els usuaris seleccionats han estat eliminats.',
	'uservalidationbyemail:messages:resent_validation' => 'Solicitud de validaci&oacute; reenviada.',
	'uservalidationbyemail:messages:resent_validations' => 'Solicituts de validaci&oacute; reenviades als usuaris seleccionats.'

);

add_translation("ca", $catalan);