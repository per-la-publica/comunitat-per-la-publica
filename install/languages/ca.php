<?php
/**
 * Installer Catalan Language
 *
 * @package ElggLanguage
 * @subpackage Installer
 */

$catalan = array(
	'install:title' =>
 'Instal·laci&oacute; d&acute;Elgg',
	'install:welcome' => 'Benvingut!',
	'install:requirements' => 'Verificaci&oacute; de requisits',
	'install:database' => 'Instal&middot;laci&oacute; de la base de dades',
	'install:settings' => 'Configuraci&oacute; del lloc',
	'install:admin' => 'Crear compte admin',
	'install:complete' => 'Finalitzat',

	'install:welcome:instructions' => "La instal·laci&oacute; d&acute;Elgg té 6 passes simples. Llegir aquesta benvinguda &eacute;s el primer!

Si no ho ha fet, llegeixi les instruccions d&acute;instal&middot;laci&oacute; que v&eacute;nen amb Elgg (faci clic a l&acute;enllaç d&acute;instruccions que hi ha al final de la p&agrave;gina).

Quan estigui a punt per continuar, premi el bot&oacute; 'seg&uuml;ent'.",
	'install:requirements:instructions:success' => "Si el seu servidor ha superat la verificaci&oacute; de requisits.",
	'install:requirements:instructions:failure' => "Si el seu servidor ha fallat la verificaci&oacute; de requisists. Despr&eacute;s de solucionar els &iacute;tems enumerats abaix, recarregui aquesta p&agrave;gina. Si necessita m&eacute;s ajuda, verifiqui els enlla&ccedil;os de soluci&oacute; de problemes que hi ha al final d'aquesta p&agrave;gina.",
	'install:requirements:instructions:warning' => "Si el seu servidor ha superat la verificaci&oacute; de requisits, per&ograve; hi ha, com a m&iacute;nim, una advert&egrave;ncia, li recomanam que verifiqui la p&agrave;gina de soluci&oacute; de problemes per a m&eacute;s informaci&oacute;.",

	'install:require:php' => 'PHP',
	'install:require:rewrite' => 'Servidor web',
	'install:require:settings' => 'Arxiu de configuraci&oacute;',
	'install:require:database' => 'Base de dades',

	'install:check:root' => 'El seu servidor web no t&eacute; els permisos necessaris per crear l&acute;arxiu .htaccess a l&acute;arrel del directori d&acute;Elgg. T&eacute; dues opcions:

		1. Modificar els permisos en el directori d&acute;arrel

		2. Copiar l&acute;arxiu htaccess_dist a .htaccess',

	'install:check:php:version' => 'Elgg requereix la versi&oacute; %s de PHP o superior. Aquest servidor executa ara mateix la  versi&oacute; %s.',
	'install:check:php:extension' => 'Elgg requereix l&acute;extensi&oacute; %s de PHP.',
	'install:check:php:extension:recommend' => 'Es recomana que l&acute;extensi&oacute; de PHP es trobi instal&middot;lada.',
	'install:check:php:open_basedir' => 'La directiva de PHP open_basedir pot evitar que Elgg allotgi arxius en el seu directori de dades.',
	'install:check:php:safe_mode' => 'No es recomana executar PHP en mode segur. Pot ocasionar inconvenients amb Elgg.',
	'install:check:php:arg_separator' => 'arg_separator.output ha de ser & perqu&egrave; Elgg funcioni, el valor actual del servidor &eacute;s %s',
	'install:check:php:register_globals' => 'Ha de desactivar el registre de globals.',
	'install:check:php:session.auto_start' => "session.auto_start s'ha d'activar perqu&egrave; Elgg funcioni. Modifiqui la configuraci&oacute; del seu servidor o afegeixi la directiva a l'arxiu .htaccess d'Elgg.",

	'install:check:enginedir' => 'El seu servidor no posseeix els permisos per crear l&acute;arxiu settings.php en el directori engine. T&eacute; dues opcions:

		1. Modificar el permisos en el directori engine

		2. Copiar l&acute;arxiu settings.example.php a settings.php i seguir les instruccions que hi ha en aquest arxiu per establir els par&agrave;metres de la base de dades.',
	'install:check:readsettings' => 'Existeix un arxiu settings en el directori engine, per&ograve; el servidor no pot llegir-lo. Pot eliminar l&acute;arxiu o modificar els permisos.',

	'install:check:php:success' => "El PHP del seu servidor satisf&agrave; tots els requisits d'Elgg.",
	'install:check:rewrite:success' => 'El test de reescriptura de normes ha estat un &egrave;xit.',
	'install:check:database' => 'Els requisits de la base de dades es verificaran quan Elgg carregui la base de dades.',

	'install:database:instructions' => "Si encara no ha creat una base de dades per a Elgg, ara &eacute;s quan ho ha de fer. Despr&eacute;s, ompli les dades de sota per inicialitzar la base de dades.",
	'install:database:error' => 'Hi ha hagut una errada en el moment de crear la base de dades d&acute;Elgg i la instal&middot;laci&oacute; no pot continuar. Revisi els missatges d&acute;error i corregeixi els problemes. Si necessita m&eacute;s ajuda, visiti l&acute;enlla&ccedil; de soluci&oacute; de porblemes d&acute;instal&middot;laci&oacute; qui ha a la part d&acute;abaix o utilitzi els f&ograve;rums de la comunitat Elgg.',

	'install:database:label:dbuser' =>  'Usuari de la Base de Dades',
	'install:database:label:dbpassword' => 'Contrasenya',
	'install:database:label:dbname' => 'Nom de la Base de Dades',
	'install:database:label:dbhost' => 'Host de la Base de Dades',
	'install:database:label:dbprefix' => 'Prefix de de Taules de la Base de Dades',

	'install:database:help:dbuser' => 'Usuari que poseeix tots els privilegis sobre la base de dades MySql que s&acute;ha creat per a Elgg',
	'install:database:help:dbpassword' => 'Contrasenya per al compte de l&acute;usuari anterior',
	'install:database:help:dbname' => 'Nom de la base de dades d&acute;Elgg',
	'install:database:help:dbhost' => 'Nombre del Host per al servidor MySQL (habitualment localhost)',
	'install:database:help:dbprefix' => "Prefix per a totes le taules d&acute;Elgg (habitualment elgg_)",

	'install:settings:instructions' => 'Necessitem alguna informaci&oacute; sobre el lloc per configurar Elgg. Si vost&egrave; no ha creat <a href="http://docs.elgg.org/wiki/Data_directory" target="_blank"> un directori de dades (data)</a> per a Elgg, ara &eacute;s quan ho ha de fer.',

	'install:settings:label:sitename' => 'Nom del Lloc',
	'install:settings:label:siteemail' => 'Adre&ccedil;a de Correu del Lloc',
	'install:settings:label:wwwroot' => 'URL del Lloc',
	'install:settings:label:path' => 'Directori d&acute;Instal&middot;laci&oacute; d&acute;Elgg',
	'install:settings:label:dataroot' => 'Directori Data',
	'install:settings:label:language' => 'Idioma del Lloc',
	'install:settings:label:siteaccess' => 'Acc&eacute;s per Defecte',
	'install:label:combo:dataroot' => 'Elgg crea el directori data',

	'install:settings:help:sitename' => 'El nom del seu nou lloc Elgg',
	'install:settings:help:siteemail' => 'Adre&ccedil;a de Correu utilitzada per Elgg per comunicacions als usuaris',
	'install:settings:help:wwwroot' => 'L&acute;adre&ccedil;a d&acute;aquest lloc (habitualment, Elgg la selecciona correctament)',
	'install:settings:help:path' => 'El directori on s&acute;emmagatzema el codi d&acute;Elgg (habitualment, Elgg el selecciona correctament)',
	'install:settings:help:dataroot' => 'El directori que ha creat perqu&egrave; Elgg desi arxius (es validaran els permisos sobre aquest directori quan premi el bot&oacute; de seg&uuml;ent)',
	'install:settings:help:dataroot:apache' => 'T&eacute; l&acute;opci&oacute; que Elgg crei el directori o de seleccionar un que ja hagi creat (es validaran els permisos sobre aquest directori quan premi el bot&oacute; de seg&uuml;ent)',
	'install:settings:help:language' => 'L&acute;idioma per defecte del lloc',
	'install:settings:help:siteaccess' => 'El nivell d&acute;acc&eacute;s per defecte quan els usuaris crein nou contingut',

	'install:admin:instructions' => "Ara &eacute;s el moment de crear el compte de l'Administrador.",

	'install:admin:label:displayname' => 'Nom a Mostrar',
	'install:admin:label:email' => 'Adre&ccedil;a de Correu',
	'install:admin:label:username' => 'Nom d&acute;Usuari',
	'install:admin:label:password1' => 'Contrasenya',
	'install:admin:label:password2' => 'Torni a escriure la Contrasenya',

	'install:admin:help:displayname' => 'El nom que es mostra en el lloc per aquest compte',
	'install:admin:help:email' => '',
	'install:admin:help:username' => 'Nom d&acute;usuari utilizat per accedir al lloc',
	'install:admin:help:password1' => "La contrasenya del compte ha de tenir, com a m&iacute;nim, %u car&agrave;cters",
	'install:admin:help:password2' => 'Torni a escriure la contrasenya per confirmar',

	'install:admin:password:mismatch' => 'Las contrasenyes han de coincidir.',
	'install:admin:password:empty' => 'La contrasenya no pot estar buida.',
	'install:admin:password:tooshort' => 'La contrasenya &eacute;s massa curta',
	'install:admin:cannot_create' => 'No s&acute;ha pogut crear el compte Administrador.',

	'install:complete:instructions' => 'El seu lloc Elgg est&agrave; a punt per al seu &uacute;s. Faci clic en el bot&oacute; de sota per anar-hi.',
	'install:complete:gotosite' => 'Anar al lloc',

	'InstallationException:UnknownStep' => '%s &eacute;s una passa d&acute;instal&middot;laci&oacute; desconeguda.',

	'install:success:database' => 'S&acute;ha instal&middot;lat la base de dades.',
	'install:success:settings' => 'S&acute;ha guardat la configuraci&oacute; del lloc.',
	'install:success:admin' => 'S&acute;ha creat el compte Admin.',

	'install:error:htaccess' => 'No s&acute;ha pogut crear l&acute;arxiu .htaccess',
	'install:error:settings' => 'No s&acute;ha pogut crear l&acute;arxiu de configuraci&oacute;',
	'install:error:databasesettings' => 'No s&acute;ha pogut connectar a la base de dades amb la informaci&oacute; que s&acute;ha donat',
	'install:error:oldmysql' => 'MySQL ha de ser una versi&oacute; 5.0 o superior. El seu servidor est&agrave; usant la versi&oacute; %s.',
	'install:error:nodatabase' => 'No s&acute;ha pogut accedit a la base de dades %s. Pot ser que no existeixi.',
	'install:error:cannotloadtables' => 'No es poden carregar les taules de la base de dades',
	'install:error:tables_exist' => 'S&acute;han trobat taules d&acute;Elgg preexistents a la base de dades. Les hauria d&acute;eliminar o reiniciar l&acute;instal&middot;lador per intentar utilitzar-les. Per reiniciar l&acute;instal&middot;lador,  llevi \'?step=database\' de l&acute;URL a  la barra de direccions del seu navegador i premi ENTER.',
	'install:error:readsettingsphp' => 'No s&acute;ha pogut llegir l&acute;arxiu engine/settings.example.php',
	'install:error:writesettingphp' => 'No s&acute;ha pogut escriure l&acute;arxiu engine/settings.php',
	'install:error:requiredfield' => 'Es requereix %s',
	'install:error:datadirectoryexists' => 'El directori de dades (data) %s no existeix.',
	'install:error:writedatadirectory' => 'El servidor no pot escriure en el directori de dades (data) %s.',
	'install:error:locationdatadirectory' => 'El directori de dades (data) %s ha d&acute;estar fora de la carpeta d&acute;instal&middot;laci&oacute; per motius de seguretat.',
	'install:error:emailaddress' => '%s no &eacute;s una direcci&oacute; de Correu v&agrave;lida',
	'install:error:createsite' => 'No s&acute;ha pogut crear el lloc.',
	'install:error:savesitesettings' => 'No s&acute;ha pogut guardar la configuraci&oacute; del lloc',
	'install:error:loadadmin' => 'No s&acute;ha pogut carregar l&acute;usuari Administrador.',
	'install:error:adminaccess' => 'No es poden donar privilegis d&acute;administrador a l&acute;usuari.',
	'install:error:adminlogin' => 'No es pot identificar autom&agrave;ticament l&acute;usuari Administrador.',
	'install:error:rewrite:apache' => 'Creiem que el seu servidor est&agrave; executant el servidor web Apache.',
	'install:error:rewrite:nginx' => 'Creiem que el seu servidor est&agrave; executant el servidor web Nginx.',
	'install:error:rewrite:lighttpd' => 'Creiem que el seu servidor est&agrave; executant el servidor web Lighttpd.',
	'install:error:rewrite:iis' => 'Creiem que el seu servidor est&agrave; executant el servidor web Microsoft IIS.',
	'install:error:rewrite:allowoverride' => "La prova de reescriptura ha fallat. La causa m&eacute;s comuna &eacute;s que AllowOverride no est&agrave; establert en All dins el directori d&acute;Elgg. Aix&ograve; impedeix Apache processar l&acute;arxiu .htaccess, que &eacute;s el que cont&eacute; les normes de reescriptura. \n\nUna altra causa pot ser que Apache tingui configurat un alias per al directori d&acute;Elgg i s'hagi d&acute;establir RewriteBase en el seu arxiu .htaccess. Hi ha diverses instruccions dins l&acute;arxiu .htaccess que hi ha al seu directori d&acute;Elgg.",
	'install:error:rewrite:htaccess:write_permission' => 'El seu servidor web no t&eacute; permisos per escriure l&acute;arxiu  .htaccess que hi ha a la carpeta d&acute;Elgg. Ha de copiar manualment htaccess_dist a .htaccess o modificar els permisos del directori.',
	'install:error:rewrite:htaccess:read_permission' => 'Hi ha un arxiu .htaccess dins el directori d&acute;Elgg, per&ograve; el seu servidor web no t&eacute; els permisos necessaris per llegir-lo.',
	'install:error:rewrite:htaccess:non_elgg_htaccess' => 'Hi ha un arxiu .htaccess dins el directori d&acute;Elgg que no ha estat creat per Elgg. Si us plau, elimineu-lo.',
	'install:error:rewrite:htaccess:old_elgg_htaccess' => 'Sembla que hi ha un arxiu  .htaccess antic d&acute;Elgg dins el directori d&acute;Elgg. Aquest arxiu no cont&eacute; la norma de reescriptura per realitzar la prova del servidor web.',
	'install:error:rewrite:htaccess:cannot_copy' => 'Hi ha hagut un error desconegut a l&acute;hora de crear l&acute;arxiu .htaccess. Haur&agrave; de copiar manualment htaccess_dist a .htaccess dins el directori d&acute;Elgg.',
	'install:error:rewrite:altserver' => 'La prova de la reescriptura de normes ha fallat. Ha de configurar el seu servidor web amb reescriptura de normes i intentar-ho una altra vegada.',
	'install:error:rewrite:unknown' => 'Ups! No podem saber quin tipus de servidor web est&agrave; executant. Ha fallat la reescriptura de normes. No podem oferir cap ajuda espec&iacute;fica. Si us plau, verifiqui l&acute;enlla&ccedil; de soluci&oacute; de problemes (troubleshooting).',
	'install:warning:rewrite:unknown' => 'El seu servidor no ha superat la prova autom&agrave;tica de reescriptura de normes. Pot continuar amb la instal&middot;laci&oacute;, per&ograve; podria experimentar problemes amb el lloc. Tamb&eacute; pot provar manualment la reescriptura de normes accedint a aquest enlla&ccedil;: <a href="%s" target="_blank">proves</a>. Podr&agrave; veure la paraula &acute;success&acute; si l&acute;execuci&oacute; ha tingut &egrave;xit.',
);

add_translation("ca", $catalan);