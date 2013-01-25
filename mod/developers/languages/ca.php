<?php
/**
 * Elgg developer tools Catalan language file.
 *
 */


$catalan = array(
	// menu
	'admin:developers' =>
 'Desenvolupadors',
	'admin:developers:settings' => 'Configuraci&oacute; de Desenvolupadors',
	'admin:developers:preview' => 'Previsualitzaci&oacute; de Temes',
	'admin:developers:inspect' => 'Inspecci&oacute;',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Controli la configuraci&oacute; de desenvolupament i depuraci&oacute;. Algunes d&acute;aquestes opcions tamb&eacute; estan disponibles a altres seccions de l&acute;administraci&oacute;.',
	'developers:label:simple_cache' => 'Utilitzar mem&ograve;ria cau simple',
	'developers:help:simple_cache' => 'Deshabilitar la mem&ograve;ria cau durant el temps que es desenvolupa. D&acute;una altra manera, les modificacions a les vistes (inclosos els css) seran ignorades.',
	'developers:label:view_path_cache' => 'Utilitzar mem&ograve;ria cau de paths de vistes',
	'developers:help:view_path_cache' => 'Deshabilitar durant el temps que es desenvolupa. D&acute;una altra manera, les vistes noves als seus plugins no quedaran registrades.',
	'developers:label:debug_level' => "Nivell de monitoratge",
	'developers:help:debug_level' => "Aix&ograve; controla la quantitat d&acute;informaci&oacute; que es registra. Vegi elgg_log() per ampliar la informaci&oacute;.",
	'developers:label:display_errors' => 'Mostrar errors fatals de PHP',
	'developers:help:display_errors' => "Per defecte, l&acute;arxiu .htaccess d&acute;Elgg deshabilita la visualitzaci&oacute; d&acute;errors fatals.",
	'developers:label:screen_log' => "Registrar a la pantalla",
	'developers:help:screen_log' => "Aix&ograve; mostra les sortides de elgg_log() y elgg_dump() a la p&aacute;gina.",
	'developers:label:show_strings' => "Mostrar strings de traduccions estranyes",
	'developers:help:show_strings' => "Aix&ograve; mostra les traduccions utilitzades per elgg_echo().",
	'developers:label:wrap_views' => "Wrap de vistes",
	'developers:help:wrap_views' => "Aix&ograve; agafa gaireb&eacute; tota la vista amb comentaris HTML. &Eacute;s &uacute;til per trobar la vista en particular que genera un  HTML.",
	'developers:label:log_events' => "Esdeveniments de Logs i Hooks de plugins",
	'developers:help:log_events' => "Escriure esdeveniments i hooks de plugins en el log. Alerta: n&acute;hi ha m&eacute;s d&acute;un a cada p&aacute;gina.",

	'developers:debug:off' => 'Apagat',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Alerta',
	'developers:debug:notice' => 'Informaci&oacute;',
	
	// inspection
	'developers:inspect:help' => 'Inspecci&oacute; de configuraci&oacute; del framework Elgg.',

	// event logging
	'developers:event_log_msg' => "%s: '%s, %s' a %s",

	// theme preview
	'theme_preview:general' => 'Introducci&oacute;',
	'theme_preview:breakout' => 'Fora d&acute;iframe',
	'theme_preview:buttons' => 'Botons',
	'theme_preview:components' => 'Components',
	'theme_preview:forms' => 'Formularis',
	'theme_preview:grid' => 'Grilla',
	'theme_preview:icons' => 'Icones',
	'theme_preview:modules' => 'M&ograve;duls',
	'theme_preview:navigation' => 'Navegaci&oacute;',
	'theme_preview:typography' => 'Tipograf&iacute;es',

	// status messages
	'developers:settings:success' => 'Configuracions emmagatzemades',
);

add_translation('ca', $catalan);
