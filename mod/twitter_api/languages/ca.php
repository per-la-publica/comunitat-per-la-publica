<?php
/**
 * An english language definition file
 */

$catalan = array(
	'twitter_api' =>
	 'Serveis de Twitter',

	'twitter_api:requires_oauth' => 'Els serveis de Twitter requereixen el plugin OAuth Libraries per poder-se activar.',

	'twitter_api:consumer_key' => 'Clau del consumidor',
	'twitter_api:consumer_secret' => 'Secret del consumidor',

	'twitter_api:settings:instructions' => 'Ha d&acute;obtenir la clau i el secret del consumidor a <a href="https://dev.twitter.com/apps/new" target="_blank">Twitter</a>. Completi la nova app. Seleccioni "Browser" com a tipus d&acute;app i estableixi "Read & Write" per al tipus d&acute;acc&eacute;s. La URL de callback &eacute;s %stwitter_api/authorize',

	'twitter_api:usersettings:description' => "Enllaci el seu compte %s amb Twitter.",
	'twitter_api:usersettings:request' => "Abans ha d&acute;<a href=\"%s\">autoritzar</a> %s per accedir al seu compte de Twitter.",
	'twitter_api:usersettings:cannot_revoke' => "No pot trencar l&acute;enlla&ccedil; amb el seu compte de Twitter perqu&egrave; no ha ingressat cap  usuari ni cap contrasenya. <a href=\"%s\">Introdueixi&acute;ls aqu&iacute;</a>.",
	'twitter_api:authorize:error' => 'No es pot autoritzar Twitter.',
	'twitter_api:authorize:success' => 'L&acute;acc&eacute;s a Twitter ha estat autoritzat.',

	'twitter_api:usersettings:authorized' => "Ha autoritzat a %s a accedir al seu compte de Twitter: @%s.",
	'twitter_api:usersettings:revoke' => 'Clic <a href="%s">aqu&iacute;</a> par revocar l&acute;acc&eacute;s.',
	'twitter_api:revoke:success' => 'L&acute;acc&eacute;s a Twitter ha estat revocat.',

	'twitter_api:login' => 'Permetre els usuaris que han registrat el seu Twitter identificar-se amb el seu compte de Twitter?',
	'twitter_api:new_users' => 'Permetre els nous usuaris identificar-se utilizant el seu compte de Twitter si la registraci&oacute; d&acute;usuaris es troba desactivada?',
	'twitter_api:login:success' => 'Ha estat identificat.',
	'twitter_api:login:error' => 'No s&acute;ha pogut identificar amb Twitter.',
	'twitter_api:login:email' => "Ha d&acute;ingressar una direcci&oacute;n de correu v&agrave;lida pel seu compte de %s.",

	'twitter_api:invalid_page' => 'P&agrave;gina no v&agrave;lida',

	'twitter_api:deprecated_callback_url' => 'L&acute;URL de callback per l&acute;API de Twitter ha canviat a %s. Si us plau, consulti amb el seu administrador per modificar- la.',

	'twitter_api:interstitial:settings' => 'Configuri les seves prefer&egrave;ncies',
	'twitter_api:interstitial:description' => 'Es troba pr&agrave;cticament a punt per utilitzar %s! Necessitam uns quants detalls m&eacute;s per continuar. S&oacute;n opcionals, per&ograve; li permetran autenticar-se si cau Twitter o si desitja desvincular els seus comptes',

	'twitter_api:interstitial:username' => 'Aquest &eacute;s el seu nom d&acute;usuari, no pot ser modificat. Si estableix una contrasenya, pot utilitzar el seu nom d&acute;usuari o el seu correu electr&ograve;nic per identificar-se.',

	'twitter_api:interstitial:name' => 'Aquest &eacute;s el nom que els usuaris veuran per interactuar amb vost&egrave;.',

	'twitter_api:interstitial:email' => 'La seva direcci&oacute; de correu electr&ograve;nic. Per defecte, els altres usuaris no la poden veure.',

	'twitter_api:interstitial:password' => 'Una contrasenya per identificar-se si Twitter ha caigut o desitja desvincular els seus comptes.',
	'twitter_api:interstitial:password2' => 'La mateixa contrasenya, una altra vegada.',

	'twitter_api:interstitial:no_thanks' => 'No, gr&agrave;cies',

	'twitter_api:interstitial:no_display_name' => 'Ha de tenir un nom per mostrar.',
	'twitter_api:interstitial:invalid_email' => 'Ha d&acute;ingressar una adre&ccedil;a de correu electr&ograve;nic v&agrave;lida o deixar-ho en blanc.',
	'twitter_api:interstitial:existing_email' => 'El correu ja est&agrave; registrat en el lloc.',
	'twitter_api:interstitial:password_mismatch' => 'Les contrasenyes no coincideixen.',
	'twitter_api:interstitial:cannot_save' => 'No es poden desar els detalls del compte.',
	'twitter_api:interstitial:saved' => 'Detalls del compte desats!',
);

add_translation('ca', $catalan);
