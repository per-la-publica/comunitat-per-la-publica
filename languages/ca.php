<?php
/**
 * Core English Language
 *
 * @package Elgg.Core
 * @subpackage Languages.English
 */

$catalan = array(
/**
 * Sites
 */
 
	'item:site' =>
 'Llocs',

/**
 * Sessions
 */
 
	'login' => "Iniciar sessi&oacute;",
	'loginok' => "Ha iniciat sessi&oacute;",
	'loginerror' => "Ha fallat alguna cosa en iniciar la sessi&oacute;. Verifiqui les seves credencials i torni-ho a intentar",
	'login:empty' => "Es requereix un nom d&acute;usuari i una contrasenya",
	'login:baduser' => "No s&acute;ha pogut carregar el compte d&acute;aquest nom d&acute;usuari",
	'auth:nopams' => "Error intern. No s&acute;ha trobat un m&egrave;tode d&acute;identificaci&oacute;",

	'logout' => "Tancar sessi&oacute;",
	'logoutok' => "S&acute;ha tancat la sessi&oacute;",
	'logouterror' => "No s&acute;ha pogut tancar la sessi&oacute;. Si us plau, torni-ho a intentar",

	'loggedinrequired' => "Ha d&acute;estar identificat per poder veure aquesta p&agrave;gina",
	'adminrequired' => "Ha de ser un administrador per poder veure aquesta p&agrave;gina",
	'membershiprequired' => "Ha de ser un membre del grup per poder veure aquesta p&agrave;gina",


/**
 * Errors
 */
 	'exception:title' => "Error Fatal",

	'actionundefined' => "L&acute;acci&oacute; (%s) sol&middot;licitada no es troba definida en el sistema",
	'actionnotfound' => "No s&acute;ha pogut trobar el log d&acute;accions per a %s",
	'actionloggedout' => "Ens sap greu, no es pot fer aquesta acci&oacute; sense identificar-se abans",
	'actionunauthorized' => 'Vost&eacute; no t&eacute; els permisos necessaris per realitzar aquesta acci&oacute;',

	'InstallationException:SiteNotInstalled' => 'No s&acute;ha pogut processar la sol&middot;licitud. El lloc '
		. ' no est&agrave; configurat o la base de dades ha caigut',
	'InstallationException:MissingLibrary' => 'No s&acute;ha pogut carregar %s',
	'InstallationException:CannotLoadSettings' => 'No s&acute;ha pogut carregar l&acute;arxiu de configuraci&oacute;. Pot ser que no existeixi o que sigui un error de configuraci&oacute; de permisos',

	'SecurityException:Codeblock' => "Acc&eacute;s denegat per l&acute;execuci&oacute; de bloc de codi privilegiat",
	'DatabaseException:WrongCredentials' => "No s&acute;ha pogut connectar a la base de dades amb aquestes credencials. Verifiqui l&acute;arxiu de configuraci&oacute;",
	'DatabaseException:NoConnect' => "No es pot consultar la base de dades '%s'. Si un plau, verifiqui que aquesta base de dades existeixi i que  vost&egrave; tingui els permisos corresponents",
	'SecurityException:FunctionDenied' => "Acc&eacute;s denegat a la funci&oacute; privilegiada '%s'",
	'DatabaseException:DBSetupIssues' => "S&acute;han trobat algunes errades: ",
	'DatabaseException:ScriptNotFound' => "No ha estat possible trobar l&acute;script de base de dades %s",
	'DatabaseException:InvalidQuery' => "Consulta no v&agrave;lida",

	'IOException:FailedToLoadGUID' => "Error en carregar una nova %s de GUID: %d",
	'InvalidParameterException:NonElggObject' => "Passant un no-ElggObject a un constructor ElggObject!",
	'InvalidParameterException:UnrecognisedValue' => "No es reconeix el valor que s&acute;ha passat al constructor",

	'InvalidClassException:NotValidElggStar' => "GUID: %d no &eacute;s un %s v&agrave;lid",

	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) &eacute;s un plugin desconfigurat que ha estat deshabilitat. Si us plau, revisi la Wiki d&acute;Elgg per ampliar la informaci&oacute; (http://docs.elgg.org/wiki/)",
	'PluginException:CannotStart' => '%s (guid: %s) no pot iniciar. Motiu: %s',
	'PluginException:InvalidID' => "%s no &eacute;s una ID de plugin v&agrave;lida",
	'PluginException:InvalidPath' => "%s &eacute;s un path de plugin no v&agrave;lid",
	'PluginException:InvalidManifest' => 'Arxiu de manifest no v&agrave;lid per al plugin %s',
	'PluginException:InvalidPlugin' => '%s no &eacute;s un plugin v&agrave;lid',
	'PluginException:InvalidPlugin:Details' => '%s no &eacute;s un plugin v&agrave;lid: %s',

	'ElggPlugin:MissingID' => 'No s&acute;ha pogut trobar la ID del plugin (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => 'ElggPluginPackage falta per al plugin amb ID %s (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Falta l&acute;arxiu %s al paquet',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Tipus de depend&egrave;ncia "%s" no v&agrave;lida',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Tipus "%s" prove&iuml;t no v&agrave;lid',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Depend&egrave;ncia %s inv&agrave;lida "%s" al plugin %s. Els plugins no poden entrar en conflicte amb altres de requerits!',

	'ElggPlugin:Exception:CannotIncludeFile' => 'No es pot incloure %s per al plugin %s (guid: %s) a %s. Verifiqui els permisos!',
	'ElggPlugin:Exception:CannotRegisterViews' => 'No es pot carregar el directori "views" per al plugin %s (guid: %s) en %s. Verifiqui els permisos!',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'No poden registrar-se idiomes per al plugin %s (guid: %s) a %s.  Verifiqui els permisos!',
	'ElggPlugin:Exception:NoID' => 'No s&acute;ha trobat la ID per al  plugin amb guid %s!',

	'PluginException:ParserError' => 'Error en processar el manifest amb versi&oacute; d&acute; API %s al plugin %s',
	'PluginException:NoAvailableParser' => 'No s&acute;ha pogut trobar un processador per al manifest de la versi&oacute; de l&acute; API %s al plugin %s',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Falta l&acute;atribut '%s' al manifest del plugin %s",

	'ElggPlugin:Dependencies:Requires' => 'Requereix',
	'ElggPlugin:Dependencies:Suggests' => 'Suggereix',
	'ElggPlugin:Dependencies:Conflicts' => 'Conflictes',
	'ElggPlugin:Dependencies:Conflicted' => 'En conflicte',
	'ElggPlugin:Dependencies:Provides' => 'Proveeix',
	'ElggPlugin:Dependencies:Priority' => 'Prioritat',

	'ElggPlugin:Dependencies:Elgg' => 'Versi&oacute; Elgg',
	'ElggPlugin:Dependencies:PhpExtension' => 'Extensi&oacute; PHP: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'Configuraci&oacute; PHP ini: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'Després %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Abans %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s no instal&middot;lat',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Falta',

	'ElggPlugin:InvalidAndDeactivated' => '%s no &eacute;s un plugin v&agrave;lid i ha estat deshabilitat',

	'InvalidParameterException:NonElggUser' => "Passant un no-ElggUser a un constructor ElggUser!",

	'InvalidParameterException:NonElggSite' => "Passant un no-ElggSite a un constructor ElggSite!",

	'InvalidParameterException:NonElggGroup' => "Passant un no-ElggGroup a un constructor ElggGroup!",

	'IOException:UnableToSaveNew' => "No s&acute;ha pogut desar un nou %s",

	'InvalidParameterException:GUIDNotForExport' => "No s&acute;ha especificat un GUID durant l&acute;exportaci&oacute;. Aix&ograve; no hauria de succeir",
	'InvalidParameterException:NonArrayReturnValue' => "Funci&oacute; de serialitzaci&oacute; d&acute;entitat passada a un par&agrave;metre de retorn no-array",

	'ConfigurationException:NocachePath' => "Path de mem&ograve;ria cau setejat en Null!",
	'IOException:NotDirectory' => "%s no &eacute;s un directori",

	'IOException:BaseEntitySaveFailed' => "No s&acute;ha pogut desar una nova entitat!",
	'InvalidParameterException:UnexpectedODDClass' => "import() passat a una classe ODD inesperada",
	'InvalidParameterException:EntityTypeNotSet' => "S&acute;ha de setejar el tipus d&acute;entitat",

	'ClassException:ClassnameNotClass' => "%s no &eacute;s un %s",
	'ClassNotFoundException:MissingClass' => "Classe '%s' no trobada, Falta algun plugin?",
	'InstallationException:TypeNotSupported' => "No es reconeix el tipus %s. Aix&ograve; indica un error en la instal&middot;laci&oacute;  causat, probablement, per una actualizaci&oacute; incompleta",

	'ImportException:ImportFailed' => "No s&acute;ha pogut importar l&acute;element %d",
	'ImportException:ProblemSaving' => "S&acute;ha trobat un problema en desar %s",
	'ImportException:NoGUID' => "S&acute;ha creat una nova entitat sense GUID. Aix&ograve; no pot passar",

	'ImportException:GUIDNotFound' => "No s&acute;ha pogut trobar l&acute;entitat '%d'",
	'ImportException:ProblemUpdatingMeta' => "Hi ha hagut un error en actualizar '%s' a l&acute;entitat '%d'",

	'ExportException:NoSuchEntity' => "GUID d&acute;entitat no v&agrave;lid: %d",

	'ImportException:NoODDElements' => "No s&acute;han trobat elements OpenDD per a la importaci&oacute;. La importaci&oacute; ha fallat",
	'ImportException:NotAllImported' => "No s&acute;han importat tots els elements",

	'InvalidParameterException:UnrecognisedFileMode' => "Mode d&acute;arxiu '%s' no reconegut",
	'InvalidParameterException:MissingOwner' => "L&acute;arxiu %s (guid: %d) (guid del propietari: %d) no t&eacute; un propietari!",
	'IOException:CouldNotMake' => "No es pot fer %s",
	'IOException:MissingFileName' => "Ha d&acute;especificar un nom abans d&acute;obrir un arxiu",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "No s&acute;ha pogut carregar la classe de repositori per a l&acute;arxiu %u",
	'NotificationException:NoNotificationMethod' => "No s&acute;ha especificat un m&egrave;tode de notificaci&oacute;",
	'NotificationException:NoHandlerFound' => "No s&acute;ha trobat un controlador '%s' o no &eacute;s executable",
	'NotificationException:ErrorNotifyingGuid' => "Hi ha hagut un error en notificar %d",
	'NotificationException:NoEmailAddress' => "No s&acute;ha pogut carregar l&acute;adre&ccedil;a de correu per al GUID:%d",
	'NotificationException:MissingParameter' => "Falta el par&agrave;metre requerit: '%s'",

	'DatabaseException:WhereSetNonQuery' => "On no contingui WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Falten camps a l&acute;estil de la consulta",
	'DatabaseException:UnspecifiedQueryType' => "Tipus de consulta no reconegut o no especificat",
	'DatabaseException:NoTablesSpecified' => "No s&acute;han especificat les taules per a la consulta",
	'DatabaseException:NoACL' => "No s&acute;ha especificat el control d'acc&eacute;s en la consulta",

	'InvalidParameterException:NoEntityFound' => "No es troba l&acute;entitat. Pot ser que no existeixi o que no tingui els premisos necessaris sobre ella",

	'InvalidParameterException:GUIDNotFound' => "No s&acute;ha pogut trobar el GUID: %s, o no hi t&eacute; acc&eacute;s",
	'InvalidParameterException:IdNotExistForGUID' => "Ens sap greu, '%s' no existeix per al guid: %d",
	'InvalidParameterException:CanNotExportType' => "Ens sap greu, l&acute;exportaci&oacute;n de '%s' no es troba implementada ",
	'InvalidParameterException:NoDataFound' => "No s&acute;han trobat resultats",
	'InvalidParameterException:DoesNotBelong' => "No pertany a l&acute;entitat",
	'InvalidParameterException:DoesNotBelongOrRefer' => "No pertany o no es refereix a l&acute;entitat",
	'InvalidParameterException:MissingParameter' => "Falta un par&agrave;metre. Ha de proveir un GUID",
	'InvalidParameterException:LibraryNotRegistered' => '%s no &eacute;s una llibreria  registrada',

	'APIException:ApiResultUnknown' => "Els resultats de l&acute;API no s&oacute;n coneguts. Aix&ograve; no pot passar",
	'ConfigurationException:NoSiteID' => "No s&acute;ha especificat una ID del lloc",
	'SecurityException:APIAccessDenied' => "Ens sap greu, l&acute;acc&eacute;s a l&acute;API ha estat deshabilitat per part de l&acute;administrador",
	'SecurityException:NoAuthMethods' => "No s&acute;han trobat m&egrave;todes d&acute;identificaci&oacute; per processar la sol&middot;licitud",
	'SecurityException:UnexpectedOutputInGatekeeper' => 'Sortida inesperada en el resultat gatekeeper. S&acute;aturar&agrave; l&acute;execuci&oacute; per seguretat. Revisi http://docs.elgg.org/ per ampliar la informaci&oacute;',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "M&egrave;tode o funci&oacute; no especificada a l&acute;hora de cridar  expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Les estructures d&acute;Array no s&oacute;n v&agrave;lides en les crides a la funci&oacute; '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "M&egrave;tode http %s no reconegut per al m&egrave;tode '%s' de l&acute;API",
	'APIException:MissingParameterInMethod' => "Falta un par&agrave;metre %s al m&egrave;tode %s",
	'APIException:ParameterNotArray' => "%s no &eacute;s un Array",
	'APIException:UnrecognisedTypeCast' => "Tipus no reconegut al casteig %s per a la variable '%s' en el m&egrave;tode '%s'",
	'APIException:InvalidParameter' => "S&acute;ha trobat un par&agrave;metre no v&agrave;lid per a '%s' en el m&egrave;tode '%s'",
	'APIException:FunctionParseError' => "%s(%s) t&eacute; un error de processament",
	'APIException:FunctionNoReturn' => "%s(%s) no ha tornat cap valor",
	'APIException:APIAuthenticationFailed' => "La crida al m&egrave;tode ha fallat en la identificaci&oacute; de l&acute;API",
	'APIException:UserAuthenticationFailed' => "La crida al m&egrave;tode ha fallat en la indetificaci&oacute; de l&acute;usuari",
	'SecurityException:AuthTokenExpired' => "El token d&acute;identificaci&oacute; no es troba o ha caducat",
	'CallException:InvalidCallMethod' => "%s ha de ser cridat utilitzant '%s'",
	'APIException:MethodCallNotImplemented' => "La crida al m&egrave;tode '%s' no es troba implementada",
	'APIException:FunctionDoesNotExist' => "La funci&oacute; per al m&egrave;tode '%s' no &eacute;s executable",
	'APIException:AlgorithmNotSupported' => "No se suporta o s&acute;ha deshabilitat l&acute;algoritme '%s'",
	'ConfigurationException:cacheDirNotSet' => "Directori de mem&ograve;ria cau; 'cache_path' no establert",
	'APIException:NotGetOrPost' => "El m&egrave;tode de Request ha de ser GET o POST",
	'APIException:MissingAPIKey' => "Falta una clau API",
	'APIException:BadAPIKey' => "Clau API incorrecta",
	'APIException:MissingHmac' => "Falta l&acute;encap&ccedil;alat X-Elgg-hmac",
	'APIException:MissingHmacAlgo' => "Falta l&acute;encap&ccedil;alat X-Elgg-hmac-algo",
	'APIException:MissingTime' => "Falta l&acute;encap&ccedil;alat X-Elgg-time",
	'APIException:MissingNonce' => "Falta l&acute;encap&ccedil;alat X-Elgg-nonce",
	'APIException:TemporalDrift' => "X-Elgg-time &eacute;s molt lluny&agrave; en el passat o en el futur. Error Epoch",
	'APIException:NoQueryString' => "No hi ha dades a la query string",
	'APIException:MissingPOSTHash' => "Falta l&acute;encap&ccedil;alat X-Elgg-posthash",
	'APIException:MissingPOSTAlgo' => "Falta l&acute;encap&ccedil;alat X-Elgg-posthash_algo",
	'APIException:MissingContentType' => "Falta content type per a post data",
	'SecurityException:InvalidPostHash' => "Hash de POST data no v&agrave;lid - S&acute;esperava %s, per&ograve; s&acute;ha rebut %s",
	'SecurityException:DupePacket' => "Signatura de paquet vista abans",
	'SecurityException:InvalidAPIKey' => "Clau API no v&agrave;lida o perduda",
	'NotImplementedException:CallMethodNotImplemented' => "No se suporta la crida al m&egrave;tode '%s'",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "Crida al m&egrave;tode XML-RPC '%s' no implementada",
	'InvalidParameterException:UnexpectedReturnFormat' => "La crida al m&egrave;tode '%s' ha tingut un resultat inesperat",
	'CallException:NotRPCCall' => "La crida no sembla ser una crida XML-RPC v&agrave;lida",

	'PluginException:NoPluginName' => "No s&acute;ha pogut trobar el nom del plugin",

	'SecurityException:authenticationfailed' => "No s&acute;ha pogut identificar l&acute;usuari",

	'CronException:unknownperiod' => '%s no &eacute;s un per&iacute;ode 
	recognoscible',

'SecurityException:deletedisablecurrentsite' => 'No es pot eliminar o deshabilitar el lloc que est&agrave; veient en aquests moments!',

	'RegistrationException:EmptyPassword' => 'Els camps de contrasenya s&oacute;n obligatoris',
	'RegistrationException:PasswordMismatch' => 'Les contrassenyes han de coincidir',
	'LoginException:BannedUser' => 'El seu ingr&eacute;s ha estat bloquejat de moment',
	'LoginException:UsernameFailure' => 'No s&acute;ha pogut inciar la sessi&oacute;. Si us plau, verifiqui el seu nom d&acute;usuari',
	'LoginException:PasswordFailure' => 'No s&acute;ha pogut iniciar la sessi&oacute;. Si us plau, verifiqui la seva contrasenya',
	'LoginException:AccountLocked' => 'El seu compte ha estat bloquejat perqu&egrave; ha superat el nombre perm&egrave;s d&acute;intents d&acute;iniciar la sessi&oacute;',

	'memcache:notinstalled' => 'M&ograve;dul memcache del PHP no instal&middot;lat. Ha d&acute;instal&middot;lar el m&ograve;dul php5-memcache',
	'memcache:noservers' => 'No hi ha servidors memcache definits. Si us plau, popule la variable $CONFIG-cache_servers',
	'memcache:versiontoocache requereix, com a m&iacute;nim, la versi&oacute; %s perqu&egrave; funcioni. S&acute;est&agrave; executant la versi&oacute; %s',
	'memcache:noaddserver' => 'Suport per a m&uacute;ltiples servidors deshabilitat. Ha d&acute;actualizar la llibreria memcache PECL',

	'deprecatedfunction' => 'Alerta: aquest codi utilitza la funci&oacute; obsoleta \'%s\' que no &eacute;s compatible amb aquesta versi&oacute;  d&acute;Elgg',

	'pageownerunavailable' => 'Alerta: l&acute; administrador de la p&agrave;gina %d no es troba accessible!',
	'viewfailure' => 'Hi ha hagut un error intern en la vista %s',
	'changebookmark' => 'Si us plau, modifiqui el seu &iacute;ndex per aquesta vista',
/**
 * API
 */
	'system.api.list' => "Llista de totes les crides API disponibles en el sistema",
	'auth.gettoken' => "Aquesta crida API permet a l&acute;usuari obtenir un token d&acute;identificaci&oacute; que es pot usar per identificar futures crides API. S&acute;ha d&acute;enviar com a par&agrave;metre auth_token",

/**
 * User details
 */
	'name' => "Nom",
	'correul' => "adre&ccedil;a de correu",
	'username' => "Nom d&acute;usuari",
	'loginusername' => "Nom d&acute;usuari o correu",
	'password' => "Contrasenya",
	'passwordagain' => "Contrasenya (una altra vegada, per verificar)",
	'admin_option' => "Fer administrador a aquest usuari?",

/**
 * Access
 */
	'PRIVATE' => "Privat",
	'LOGGED_IN' => "Usuaris en l&iacute;nia",
	'PUBLIC' => 'Tothom',
	'access:friends:label' => "Contacte",
	'access' => "Acc&eacute;s",

/**
 * Dashboard and widgets
 */
	'dashboard' => "Panell de control",
	'dashboard:nowidgets' => "El seu panell de control li permet seguir l&acute;activitat i el contingut que l&acute;interessen d&acute;aquest lloc",

	'widgets:add' => 'Afegir widget',
	'widgets:add:description' => "Premi el bot&oacute;  del widget que l&acute;interessi per afegir-lo a la p&agrave;gina",
	'widgets:position:fixed' => '(Posici&oacute; fixa a la p&agrave;gina)',
	'widget:unavailable' => 'Ja ha afegit aquest widget',
	'widget:numbertodisplay' => 'Quantitat d&acute;elements a mostrar',

	'widget:delete' => 'Esborrar %s',
	'widget:edit' => 'Personalitzar aquest widget',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "El widget s&acute;ha desat correctament",
	'widgets:save:failure' => "No s&acute;ha pogut desar el widget. Si us plau, intenti-ho una altra vegada",
	'widgets:add:success' => "El widget s&acute;ha afegit correctament",
	'widgets:add:failure' => "No s&acute;ha pogut afegir el widget",
	'widgets:move:failure' => "No s&acute;ha pogut desar la nova posici&oacute; del widget",
	'widgets:remove:failure' => "No s&acute;ha pogut esborrar el widget",

/**
 * Groups
 */
	'group' => "Grup",
	'item:group' => "Grups",

/**
 * Users
 */
	'user' => "Usuari",
	'item:user' => "Usuaris",

/**
 * Friends
 */
	'friends' => "Contactes",
	'friends:yours' => "Els teus contactes",
	'friends:owned' => "Contactes de %s",
	'friend:add' => "Nou contacte",
	'friend:remove' => "Esborrar contacte",

	'friends:add:successful' => "%s ha estat afegit com a contacte",
	'friends:add:failure' => "No s&acute;ha pogut afegir %s com a contacte. Si us plau, torni-ho a intentar",

	'friends:remove:successful' => "S&acute;ha esborrat  %s dels seus contactes",
	'friends:remove:failure' => "No s&acute;ha pogut esborrar %s dels seus contactes. Si us plau, torni-ho a intentar",

	'friends:none' => "Aquest usuari no t&eacute; cap contacte",
	'friends:none:you' => "Encara no tens cap contacte",

	'friends:none:found' => "No s&acute;ha trobat cap contacte",

	'friends:of:none' => "Ning&uacute; no ha afegit aquest usuari com a contacte",
	'friends:of:none:you' => "Ning&uacute; no t&acute;ha afegit com a contacte. Pots comen&ccedil;ar a afegir contingut i completar el teu perfil perqu&egrave; la gent et trobi.",

	'friends:of:owned' => "Contactes de %s",

	'friends:of' => "Contactes de",
	'friends:collections' => "Col&middot;leccions de contactes",
	'collections:add' => "Nova col&middot;lecci&oacute;",
	'friends:collections:add' => "Nova col&middot;lecci&oacute; de contactes",
	'friends:addfriends' => "Seleccionar contactes",
	'friends:collectionname' => "Nom de la col&middot;lecci&oacute;",
	'friends:collectionfriends' => "Contactes en aquesta col&middot;lecci&oacute;",
	'friends:collectionedit' => "Editar aquesta col&middot;lecci&oacute;",
	'friends:nocollections' => "Encara no tens cap col&middot;lecci&oacute;",
	'friends:collectiondeleted' => "La col&middot;lecci&oacute; ha estat eliminada",
	'friends:collectiondeletefailed' => "No s&acute;ha pogut eliminar la col&middot;lecci&oacute;",
	'friends:collectionadded' => "La col&middot;lecci&oacute; ha estat creada correctament",
	'friends:nocollectionname' => "Ha de posar un nom a la col&middot;lecci&oacute; abans de crear-la",
	'friends:collections:members' => "Membres d&acute;aquesta col&middot;lecci&oacute;",
	'friends:collections:edit' => "Editar col&middot;lecci&oacute;",
	'friends:collections:edited' => "Col&middot;lecci&oacute; desada",
	'friends:collection:edit_failed' => 'No s&acute;ha pogut desar la col&middot;lecci&oacute;',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => 'Imatge de perfil',
	'avatar:create' => 'Crear una imatge de perfil',
	'avatar:edit' => 'Editar la imatge de perfil',
	'avatar:preview' => 'Previsualitzar',
	'avatar:upload' => 'Pujar una nova imatge de perfil',
	'avatar:current' => 'Imatge de perfil actual',
	'avatar:crop:title' => 'Eina per retallar la imatge de perfil',
	'avatar:upload:instructions' => "La seva imatge de perfil es mostrar&agrave; a la xarxa. Podr&agrave; modificar-la quan ho desitgi (Formats d&acute;arxiu acceptats: GIF, JPG o PNG)",
	'avatar:create:instructions' => 'Premi i arrossegui un quadrat de baix per seleccionar el retall de la imatge. Apareixer&agrave; una previsualitzaci&oacute; a la caixa de la dreta. Quan hagi acabat, premi  \'Crear imatge de perfil\'. La versi&oacute; retallada ser&agrave; la que s&acute;usi per mostrar a la xarxa',
	'avatar:upload:success' => 'La nova imatge de perfil s&acute;ha carregat correctament',
	'avatar:upload:fail' => 'Ha fallat la c&agrave;rrega de la imatge de perfil',
	'avatar:resize:fail' => 'Hi ha hagut una errada en la modificaci&oacute; del tamany de la imatge de perfil',
	'avatar:crop:success' => 'La retallada de la imatge de perfil ha acabat correctament',
	'avatar:crop:fail' => 'Hi ha hagut una errada en la retallada de la imatge de perfil',

	'profile:edit' => 'Editar perfil',
	'profile:aboutme' => "Sobre mi",
	'profile:description' => "Sobre mi",
	'profile:briefdescription' => "Descripci&oacute; curta",
	'profile:location' => "Ubicaci&oacute;",
	'profile:skills' => "Habilitats",
	'profile:interests' => "Interessos",
	'profile:contactemail' => "Correu de contacte",
	'profile:phone' => "Tel&egrave;fon",
	'profile:mobile' => "Tel&egrave;fon m&ograve;bil",
	'profile:website' => "Lloc web",
	'profile:twitter' => "Usuari de Twitter",
	'profile:saved' => "El seu perfil s&acute;ha guardat correctament",

	'admin:appearance:profile_fields' => 'Editar camps de perfil',
	'profile:edit:default' => 'Editar camps de perfil',
	'profile:label' => "Etiqueta de perfil",
	'profile:type' => "Tipus de perfil",
	'profile:editdefault:delete:fail' => 'Hi ha hagut una errada en eliminar l&acute;element de perfil per defecte',
	'profile:editdefault:delete:success' => 'Element per defecte de perfil eliminat!',
	'profile:defaultprofile:reset' => 'Torna a inciar el  perfil de sistema per defecte',
	'profile:resetdefault' => 'Torna a iniciar el perfil de sistema per defecte',
	'profile:explainchangefields' => "Pot substituir els camps de perfil que hi ha amb d&acute;altres creats per vost&egrave; si utilitza el formulari de sota. \n\n Ingressi un nou camp de perfil. Per exemple, 'Equip favorit'. Despr&eacute;s, seleccioni el tipus de camp. Per exemple, 'text, url, etiquetes'. Premi el bot&oacute;  'Afegir'. Per tornar a ordenar els camps, arrossegui el control al costat de l&acute;etiqueta del camp. Per editar l&acute;etiqueta del camp, faci clic al text de l&acute;etiqueta.  \n\n Pot tornar a la disposici&oacute; original del perfil en qualsevol moment, per&ograve; perdr&agrave; la informaci&oacute; creada en els camps personalitzats del perfil fins al moment",
	'profile:editdefault:success' => 'Element afegit al perfil per defecte correctament',
	'profile:editdefault:fail' => 'No s&acute;ha pogut guardar el perfil per defecte',

/**
 * Feeds
 */
	'feed:rss' => 'Canal RSS d&acute;actualitzacions per aquesta p&agrave;gina',
	
/**
 * Links
 */
	'link:view' => 'Veure enlla&ccedil;',
	'link:view:all' => 'Veure&acute;ls tots',

/**
 * River
 */
	'river' => "River",
	'river:friend:user:default' => "%s &eacute;s ara un contacte de %s",
	'river:update:user:avatar' => '%s t&eacute; una nova imatge de perfil',
	'river:noaccess' => 'No t&eacute; perm&iacute;s per veure aquest element',
	'river:posted:generic' => '%s publicat',
	'riveritem:single:user' => 'un usuari',
	'riveritem:plural:user' => 'alguns usuaris',
	'river:ingroup' => 'en el grup %s',
	'river:none' => 'Sense activitat',

	'river:widget:title' => "Activitat",
	'river:widget:description' => "Mostrar l&acute;activitat recent",
	'river:widget:type' => "Tipus d&acute;activitat",
	'river:widgets:friends' => 'Activitat d&acute;amics',
	'river:widgets:all' => 'Tota l&acute;activitat del lloc',

/**
 * Notifications
 */
	'notifications:usersettings' => "Configuraci&oacute; de notificacions",
	'notifications:methods' => "Si us plau, indiqui els m&egrave;todes que vol habilitar",

	'notifications:usersettings:save:ok' => "La seva configuraci&oacute; de notificacions s&acute;ha guardat correctament",
	'notifications:usersettings:save:fail' => "Hi ha hagut una errada a l&acute;hora de desar  la configuraci&oacute; de notificacions",

	'user.notification.get' => 'Retornar la configuraci&oacute; de notificacions per a un usuari en concret',
	'user.notification.set' => 'Establir la configuraci&oacute; de notificacions per a un usuari en concret',
/**
 * Search
 */
	'search' => "Cercar",
	'searchtitle' => "Cercar: %s",
	'users:searchtitle' => "Cercar per  usuaris: %s",
	'groups:searchtitle' => "Cercar per grups: %s",
	'advancedsearchtitle' => "%s amb coincid&egrave;ncies en resultats %s",
	'notfound' => "No s&acute;han trobat resultats",
	'next' => "Seg&uuml;ent",
	'previous' => "Anterior",

	'viewtype:change' => "Modificar tipus de llista",
	'viewtype:list' => "Vista de llista",
	'viewtype:gallery' => "Galeria",

	'tag:search:startblurb' => "Elements amb tags que coincideixin amb '%s':",

	'user:search:startblurb' => "Usuaris que coincideixin amb '%s':",
	'user:search:finishblurb' => "Cliqui aqu&iacute; per veure m&eacute;s",

	'group:search:startblurb' => "Grups que coincideixen amb '%s':",
	'group:search:finishblurb' => "Cliqui aqu&iacute; per veure m&eacute;s",
	'search:go' => 'Anar',
	'userpicker:only_friends' => 'Nom&eacute;s contactes',

/**
 * Account
 */
	'account' => "Compte",
	'settings' => "Configuraci&oacute;",
	'tools' => "Eines",

	'register' => "Registrar-se",
	'registerok' => "S&acute;ha registrat correctament per a %s",
	'registerbad' => "No s&acute;ha pogut registrar per culpa d&acute;una errada desconeguda",
	'registerdisabled' => "L&acute;administrador del sistema ha deshabilitat el registre",

	'registration:notemail' => 'No ha ingressat una adre&ccedil;a de correu v&agrave;lida',
	'registration:userexists' => 'El nom de l&acute;usuari ja existeix',
	'registration:usernametooshort' => 'El nom de l&acute;usuari ha de tenir, com a m&iacute;nim, %u car&agrave;cters',
	'registration:passwordtooshort' => 'La contrasenya ha de tenir, com a m&iacute;nim, %u car&agrave;cters',
	'registration:dupeemail' => 'Aquesta adre&ccedil;a de correu ja est&agrave; registrada',
	'registration:invalidchars' => 'Ens sap greu, el seu nom d&acute;usuari t&eacute; car&agrave;cters no v&agrave;lids: %s. Aquests s&oacute;n tots els car&agrave;cters que estan invalidats:  %s',
	'registration:emailnotvalid' => 'Ens sap greu, l&acute;adre&ccedil;a de correu que ha ingressat no &eacute;s v&agrave;lida en el sistema',
	'registration:passwordnotvalid' => 'Ens sap greu, la contrasenya que ha ingressat no &eacute;s v&agrave;lida en el sistema',
	'registration:usernamenotvalid' => 'Ens sap greu, el nom d&acute;usuari que ha ingressat no &eacute;s v&agrave;lid en el sistema',

	'adduser' => "Nou usuari",
	'adduser:ok' => "S&acute;ha afegit correctament un nou usuari",
	'adduser:bad' => "No s&acute;ha pogut afegir el nou usuari",

	'user:set:name' => "Configuraci&oacute; del nom del compte",
	'user:name:label' => "El meu nom per mostrar",
	'user:name:success' => "S&acute;ha modificat correctament el seu nom a la xarxa",
	'user:name:fail' => "No s&acute;ha pogut modificar el seu nom a la xarxa. Si us plau, asseguri's que no &eacute;s massa llarg i torni-ho a intentar",

	'user:set:password' => "Contrasenya del compte",
	'user:current_password:label' => 'Contrasenya actual',
	'user:password:label' => "Nova contrasenya",
	'user:password2:label' => "Confirmar nova contrasenya",
	'user:password:success' => "Contrasenya modificada",
	'user:password:fail' => "No s&acute;ha pogut modificar la contrasenya a la xarxa",
	'user:password:fail:notsame' => "Les dues contrasenyes no coincideixen!",
	'user:password:fail:tooshort' => "La contrasenya &eacute;s massa curta!",
	'user:password:fail:incorrect_current_password' => 'La contrasenya ingressada no &eacute;s correcta',
	'user:resetpassword:unknown_user' => 'Usuari no v&agrave;lid',
	'user:resetpassword:reset_password_confirm' => 'Quan modifiqui la contrasenya, se li enviar&agrave; la nova a l&acute;adre&ccedil;a de correu registrada',

	'user:set:language' => "Configuraci&oacute; d&acute;idioma",
	'user:language:label' => "El seu idioma",
	'user:language:success' => "S&acute;ha actualitzat la configuraci&oacute; d&acute;idioma",
	'user:language:fail' => "No s&acute;ha pogut actualitzar la configuraci&oacute; d&acute;idioma",

	'user:username:notfound' => 'No s&acute;ha trobat l&acute;usuari %s',

	'user:password:lost' => 'He oblidat la meva contrasenya',
	'user:password:resetreq:success' => 'Sol&middot;licitud de nova contrasenya confirmada. Li hem enviat un correu electr&ograve;nic',
	'user:password:resetreq:fail' => 'No s&acute;ha pogut sol&middot;lictar una nova contrasenya',

	'user:password:text' => 'Per sol&middot;licitar una nova contrasenya, ingressi el seu nom d&acute;usuari i premi el bot&oacute; de sota',

	'user:persistent' => 'Recordeu-me',

	'walled_garden:welcome' => 'Benvinguda o benvingut',

/**
 * Administration
 */
	'menu:page:header:administer' => 'Administrar',
	'menu:page:header:configure' => 'Configurar',
	'menu:page:header:develop' => 'Desenvolupar',
	'menu:page:header:default' => 'Altres',

	'admin:view_site' => 'Veure lloc',
	'admin:loggedin' => 'Sessi&oacute; iniciada como %s',
	'admin:menu' => 'Men&uacute;',

	'admin:configuration:success' => "La seva configuraci&oacute; ha estat guardada",
	'admin:configuration:fail' => "No s&acute;ha pogut guardar la seva configuraci&oacute;",

	'admin:unknown_section' => 'Secci&oacute; d&acute;administraci&oacute; no v&agrave;lida',

	'admin' => "Administraci&oacute;",
	'admin:description' => "El panell d&acute;administraci&oacute; li permetr&agrave; organitzar tots els aspectes del sistema, des de la gesti&oacute; d&acute;usuaris fins al comportament dels plugins. Seleccioni una opci&oacute; a sota per comen&ccedil;ar",

	'admin:statistics' => "Estad&iacute;stiques",
	'admin:statistics:overview' => 'Resum',

	'admin:appearance' => 'Aspecte',
	'admin:utilities' => 'Utiltats',

	'admin:users' => "Usuaris",
	'admin:users:online' => 'Connectats ara mateix',
	'admin:users:newest' => 'Els m&eacute;s recents',
	'admin:users:add' => 'Afegir nou usuari',
	'admin:users:description' => "Aquest panell d&acute;administraci&oacute; li permetr&agrave; gestionar la configuraci&oacute; d&acute;usuaris de la xarxa. Seleccioni una opci&oacute; a sota per comen&ccedil;ar",
	'admin:users:adduser:label' => "Cliqui aqu&iacute; per afegir un nou usuari..",
	'admin:users:opt:linktext' => "Configurar usuaris..",
	'admin:users:opt:description' => "Configurar usuaris i informaci&oacute; de comptes",
	'admin:users:find' => 'Cercar',

	'admin:settings' => 'Configuraci&oacute;',
	'admin:settings:basic' => 'Configuraci&oacute;b&agrave;sica',
	'admin:settings:advanced' => 'Configuraci&oacute; avan&ccedil;ada',
	'admin:site:description' => "Aquest panell d&acute;administraci&oacute; li permetr&agrave; gestionar la configuraci&oacute; global de la xarxa. Seleccioni una opci&oacute; a sota per comen&ccedil;ar",
	'admin:site:opt:linktext' => "Configurar lloc..",
	'admin:site:access:warning' => "Les modificacions en el control dels acessos nom&eacute;s tindran impacte en els acessos futurs",

	'admin:dashboard' => 'Panell de control',
	'admin:widget:online_users' => 'Usuaris connectats',
	'admin:widget:online_users:help' => 'Llista dels usuaris connectats ara mateix a la xarxa',
	'admin:widget:new_users' => 'Usuaris nous',
	'admin:widget:new_users:help' => 'Llista dels usuaris m&eacute;s recents',
	'admin:widget:content_stats' => 'Estad&iacute;stiques de contingut',
	'admin:widget:content_stats:help' => 'Seguiment del contingut creat pels usuaris de la xarxa',
	'widget:content_stats:type' => 'Tipus de contingut',
	'widget:content_stats:number' => 'N&uacute;mero',

	'admin:widget:admin_welcome' => 'Benvinguda o benvingut',
	'admin:widget:admin_welcome:help' => "Aquesta &eacute;s l&acute;&agrave;rea d&acute;administraci&oacute;",
	'admin:widget:admin_welcome:intro' =>
'Benvinguda o benvingut! Est&agrave; veient el panell de control de l&acute;administraci&oacute;. &Eacute;s &uacute;til per visualitzar les novetats de la xarxa',

	'admin:widget:admin_welcome:admin_overview' =>
"La navegaci&oacute; per l&acute;&agrave;rea d&acute;administraci&oacute; es troba al men&uacute; de la dreta, que s&acute;organitza en "
. " tres seccions:
<dl>
		<dt>Administrar</dt>
		<dd>Tasques di&agrave;ries, com fer monitoratge de contingut reportat, verificar qui est&agrave; connectat i visualitzar estad&iacute;stiques.</dd>
		<dt>Configurar</dt>
		<dd>Tasques ocasionals, com establir el nom de la xarxa social o activar i desactivar plugins.</dd>
		<dt>Desenvolupar</dt>
		<dd>Per a desenvolupadors que construeixen plugins o dissenyen temes personalitzats. (Requereix el plugin de desenvolupador.)</dd>
</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />
	Asseguri&acute;s de verificar els recursos disponibles als enlla&ccedil;os a peu de p&agrave;gina i gr&agrave;cies per utilitzar Elgg!',

	'admin:footer:faq' => 'FAQs d&acute;Administraci&oacute;',
	'admin:footer:manual' => 'Manual d&acute;Administraci&oacute;',
	'admin:footer:community_forums' => 'F&ograve;rums de la Comunitat Elgg',
	'admin:footer:blog' => 'Blog Elgg',

	'admin:plugins:category:all' => 'Tots els plugins',
	'admin:plugins:category:active' => 'Plugins actius',
	'admin:plugins:category:inactive' => 'Plugins inactius',
	'admin:plugins:category:admin' => 'Admin',
	'admin:plugins:category:bundled' => 'Incl&ograve;s',
	'admin:plugins:category:content' => 'Contingut',
	'admin:plugins:category:development' => 'Desenvolupament',
	'admin:plugins:category:enhancement' => 'Millores',
	'admin:plugins:category:api' => 'Servei/API',
	'admin:plugins:category:communication' => 'Comunicaci&oacute;',
	'admin:plugins:category:security' => 'Seguretat i spam',
	'admin:plugins:category:social' => 'Social',
	'admin:plugins:category:multimedia' => 'Multim&egrave;dia',
	'admin:plugins:category:theme' => 'Temes',
	'admin:plugins:category:widget' => 'Widgets',

	'admin:plugins:sort:priority' => 'Prioritat',
	'admin:plugins:sort:alpha' => 'Alfab&egrave;tic',
	'admin:plugins:sort:date' => 'Els m&eacute;s nous',

	'admin:plugins:markdown:unknown_plugin' => 'Plugin desconegut',
	'admin:plugins:markdown:unknown_file' => 'Arxiu desconegut',


	'admin:notices:could_not_delete' => 'Notificaci&oacute; de no s&acute;ha pogut eliminar',

	'admin:options' => 'Opcions d&acute;Admin',


/**
 * Plugins
 */
	'plugins:settings:save:ok' => "Configuraci&oacute; per al plugin %s desada correctament",
	'plugins:settings:save:fail' => "Hi ha hagut una errada en intentar guardar la configuraci&oacute; per al plugin %s",
	'plugins:usersettings:save:ok' => "Configuraci&oacute; de l&acute;usuari per al plugin %s guardada",
	'plugins:usersettings:save:fail' => "Hi ha hagut una errada en intentar guardar la configuraci&oacute; de l&acute;usuari per al plugin %s",
	'item:object:plugin' => 'Plugins',

	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Activar-los tots',
	'admin:plugins:deactivate_all' => 'Desactivar-los tots',
	'admin:plugins:activate' => 'Activar',
	'admin:plugins:deactivate' => 'Desactivar',
	'admin:plugins:description' => "Aquest panell li permetr&agrave; controlar i configurar les eines instal&middot;lades al seu lloc",
	'admin:plugins:opt:linktext' => "Configurar eines..",
	'admin:plugins:opt:description' => "Configurar les eines instal&middot;lades al lloc. ",
	'admin:plugins:label:author' => "Autor",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Categories',
	'admin:plugins:label:licence' => "Llic&egrave;ncia",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:moreinfo' => 'm&eacute;s informaci&oacute;',
	'admin:plugins:label:version' => 'Versi&oacute;',
	'admin:plugins:label:location' => 'Ubicaci&oacute;',
	'admin:plugins:label:dependencies' => 'Depend&egrave;ncies',

	'admin:plugins:warning:elgg_version_unknown' => 'Aquest plugin utilitza un arxiu de manifest obsolet i no especifica una versi&oacute; d&acute;Elgg compatible. &Eacute;s molt probable que no funcioni!',
	'admin:plugins:warning:unmet_dependencies' => 'Aquest plugin t&eacute; depend&egrave;ncies desconegudes i no s&acute;activar&agrave;. Consulti les depend&egrave;ncies a baix per ampliar la informaci&oacute;',
	'admin:plugins:warning:invalid' => '%s no &eacute;s un plugin Elgg v&agrave;lid. Visiti <a href="http://docs.elgg.org/Invalid_Plugin">la Documentaci&oacute; Elgg</a> per obtenir un consell de soluci&oacute; de problemes',
	'admin:plugins:cannot_activate' => 'no es pot activar',

	'admin:plugins:set_priority:yes' => "Reordenar %s",
	'admin:plugins:set_priority:no' => "No es pot reordenar %s",
	'admin:plugins:deactivate:yes' => "Desactivar %s",
	'admin:plugins:deactivate:no' => "No es pot desactivar %s",
	'admin:plugins:activate:yes' => "Activat%s",
	'admin:plugins:activate:no' => "No es pot activar %s",
	'admin:plugins:categories:all' => 'Totes les categories',
	'admin:plugins:plugin_website' => 'Lloc del plugin',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Versi&oacute; %s',
	'admin:plugins:simple' => 'Simple',
	'admin:plugins:advanced' => 'Avan&ccedil;at',
	'admin:plugin_settings' => 'Configuraci&oacute; del plugin',
	'admin:plugins:simple_simple_fail' => 'No s&acute;ha pogut desar la configuraci&oacute;',
	'admin:plugins:simple_simple_success' => 'Configuraci&oacute; desada',
	'admin:plugins:simple:cannot_activate' => 'No es pot activar el plugin. Verifiqui l&acute;&agrave;rea d&acute;administraci&oacute; avan&ccedil;ada del plugin per obtenir m&eacute;s informaci&oacute;',
	'admin:plugins:warning:unmet_dependencies_active' => 'El plugin est&agrave; actiu, per&ograve; t&eacute; depend&egrave;ncies desconegudes. Pot ser que hi hagi  problemes amb  el seu funcionament. Vegi "m&eacute;s informaci&oacute;" a baix per ampliar els detalls',

	'admin:plugins:dependencies:type' => 'Tipus',
	'admin:plugins:dependencies:name' => 'Nom',
	'admin:plugins:dependencies:expected_value' => 'Valor de test',
	'admin:plugins:dependencies:local_value' => 'Valor actual',
	'admin:plugins:dependencies:comment' => 'Comentari',

	'admin:statistics:description' => "Aix&ograve; &eacute;s un resum de les estad&iacute;stiques del lloc. Si necessita estad&iacute;stiques m&eacute;s avan&ccedil;ades, disposa d&acute;una funcionalitat d'adminsitraci&oacute; professional",
	'admin:statistics:opt:description' => "Veure informaci&oacute; estad&iacute;stica sobre usuaris i objectes en el lloc",
	'admin:statistics:opt:linktext' => "Veure estad&iacute;stiques..",
	'admin:statistics:label:basic' => "Estad&iacute;stiques b&agrave;siques del lloc",
	'admin:statistics:label:numentities' => "Entitats del lloc",
	'admin:statistics:label:numusers' => "Quantitat d&acute;usuaris",
	'admin:statistics:label:numonline' => "Quantitat d&acute;usuaris connectats",
	'admin:statistics:label:onlineusers' => "Usuaris connectats ara mateix",
	'admin:statistics:label:version' => "Versi&oacute; d&acute;Elgg",
	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Versi&oacute;",

	'admin:user:label:search' => "Trobar usuaris:",
	'admin:user:label:searchbutton' => "Cercar",

	'admin:user:ban:no' => "No pot bloquejar aquest  usuari",
	'admin:user:ban:yes' => "Usuari bloquejat",
	'admin:user:self:ban:no' => "No es pot bloquejar a vost&egrave; mateix",
	'admin:user:unban:no' => "No es pot desbloquejar aquest usuari",
	'admin:user:unban:yes' => "Usuari desbloquejat",
	'admin:user:delete:no' => "No es pot eliminar aquest usuari",
	'admin:user:delete:yes' => "L&acute;usuari %s ha estat eliminat",
	'admin:user:self:delete:no' => "No pot eliminar-se vost&egrave; mateix",

	'admin:user:resetpassword:yes' => "Contrasenya restablerta. Es notificar&agrave; a l&acute;usuari",
	'admin:user:resetpassword:no' => "No &eacute;s possible restablir la contrasenya",

	'admin:user:makeadmin:yes' => "L&acute;usuari s&acute;ha convertit en administrador",
	'admin:user:makeadmin:no' => "No s&acute;ha pogut convertir l&acute;usuari en administrador",

	'admin:user:removeadmin:yes' => "L&acute;usuari ja no &eacute;s administrador",
	'admin:user:removeadmin:no' => "No es poden llevar els privilegis d&acute;administrador a aquest usuari",
	'admin:user:self:removeadmin:no' => "No es pot llevar els seus privilegis d&acute;administrador",

	'admin:appearance:menu_items' => 'Elements del Men&uacute;',
	'admin:menu_items:configure' => 'Configurar els elements del men&uacute; principal',
	'admin:menu_items:description' => 'Seleccioni quins elements del men&uacute; vol mostrar com a enlla&ccedil;os favorits. Els elements no usats es trobaran en l&acute;element "M&eacute;s" al final de la llista',
	'admin:menu_items:hide_toolbar_entries' => 'Esborrar enlla&ccedil;os del men&uacute; de la barra d&acute;eines?',
	'admin:menu_items:saved' => 'Elements del men&uacute; guardats',
	'admin:add_menu_item' => 'Afegir un element del men&uacute; personalizat',
	'admin:add_menu_item:description' => 'Completi el nom per mostrar i l&acute;adre&ccedil;a URL per afegir un element de men&uacute; personalizat',

	'admin:appearance:default_widgets' => 'Widgets per defecte',
	'admin:default_widgets:unknown_type' => 'Tipus de widget desconegut',
	'admin:default_widgets:instructions' => 'Afegir, esborrar, moure i configurar els widgets per defecte a la p&agrave;gina de widget seleccionada'
		. 'Aquests canvis nom&eacute;s tindran efecte en els nous usuaris',

/**
 * User settings
 */
	'usersettings:description' => "El panell de configuraci&oacute; permet parametritzar les seves prefer&egrave;ncies personals, des de l&acute;administraci&oacute; d&acute;usuaris al comportament dels plugins. Seleccioni una opci&oacute; a sota per comen&ccedil;ar",

	'usersettings:statistics' => "Les seves estad&iacute;stiques",
	'usersettings:statistics:opt:description' => "Veure informaci&oacute; estad&iacute;stica d&acute;usuaris i d&acute;objectes a la xarxa",
	'usersettings:statistics:opt:linktext' => "Estad&iacute;stiques del compte",

	'usersettings:user' => "Les seves prefer&egrave;ncies",
	'usersettings:user:opt:description' => "Aix&ograve; li permetr&agrave; establir les seves prefer&egrave;ncies",
	'usersettings:user:opt:linktext' => "Modificar les seves prefer&egrave;ncies",

	'usersettings:plugins' => "Eines",
	'usersettings:plugins:opt:description' => "Prefer&egrave;ncies de configuraci&oacute; per a les seves eines actives",
	'usersettings:plugins:opt:linktext' => "Configuri les seves eines",

	'usersettings:plugins:description' => "Aquest panell li permetr&agrave; establir les seves prefer&egrave;ncies personals per les eines habilitades per l&acute;administrador del sistema",
	'usersettings:statistics:label:numentities' => "El seu contingut",

	'usersettings:statistics:yourdetails' => "Els seus detalls",
	'usersettings:statistics:label:name' => "Nom complet",
	'usersettings:statistics:label:email' => "Correu",
	'usersettings:statistics:label:membersince' => "Membre des de",
	'usersettings:statistics:label:lastlogin' => "&Uacute;ltim acc&eacute;s",

/**
 * Activity river
 */
	'river:all' => 'Activitat de tota la xarxa',
	'river:mine' => 'La meva activitat',
	'river:friends' => 'Activitat de contactes',
	'river:select' => 'Mostrar %s',
	'river:comments:more' => '+%u m&eacute;s',
	'river:generic_comment' => 'comentat a %s %s',

	'friends:widget:description' => "Mostra alguns dels teus contactes",
	'friends:num_display' => "Quantitat de contactes a mostrar",
	'friends:icon_size' => "Tamany de la icona",
	'friends:tiny' => "diminuta",
	'friends:small' => "petita",

/**
 * Generic action words
 */
	'save' => "Desar",
	'reset' => 'Reiniciar',
	'publish' => "Publicar",
	'cancel' => "Cancel&middot;lar",
	'saving' => "Desant..",
	'update' => "Actualitzar",
	'preview' => "Previsualitzar",
	'edit' => "Editar",
	'delete' => "Esborrar",
	'accept' => "Acceptar",
	'load' => "Carregar",
	'upload' => "Pujar",
	'ban' => "Bloquejar",
	'unban' => "Desbloquejar",
	'banned' => "Bloquejat",
	'enable' => "Habilitar",
	'disable' => "Deshabilitar",
	'request' => "Sol&middot;licitud",
	'complete' => "Completa",
	'open' => 'Obrir',
	'close' => 'Tancar',
	'reply' => "Respondre",
	'more' => 'M&eacute;s',
	'comments' => 'Comentaris',
	'import' => 'Importar',
	'export' => 'Exportar',
	'untitled' => 'Sense t&iacute;tol',
	'help' => 'Ajuda',
	'send' => 'Enviar',
	'post' => 'Publicar',
	'submit' => 'Enviar',
	'comment' => 'Comentar',
	'upgrade' => 'Actualitzar',
	'sort' => 'Ordenar',
	'filter' => 'Filtrar',

	'site' => 'Lloc',
	'activity' => 'Activitat',
	'members' => 'Membres',

	'up' => 'A dalt',
	'down' => 'A baix',
	'top' => 'Primer',
	'bottom' => '&Uacute;ltim',

	'more' => 'm&eacute;s',

	'invite' => "Convidar",

	'resetpassword' => "Restablir contrase&ntilde;a",
	'makeadmin' => "Fer administrador",
	'removeadmin' => "Esborrar administrador",

	'option:yes' => "S&iacute;",
	'option:no' => "No",

	'unknown' => 'Desconegut',

	'active' => 'Actiu',
	'total' => 'Total',

	'learnmore' => "Clic aqu&iacute; per veure m&eacute;s",

	'content' => "contingut",
	'content:latest' => 'activitat recent',
	'content:latest:blurb' => 'Opcionalment, cliqui aqu&iacute; per veure el contingut m&eacute;s recent de tota la xarxa',

	'link:text' => 'veure enlla&ccedil;',
	
/**
 * Generic questions
 */
	'question:areyousure' => 'Est&agrave; segur?',

/**
 * Generic data words
 */
	'title' => "T&iacute;tol",
	'description' => "Descripci&oacute;",
	'tags' => "Etiquetes",
	'spotlight' => "Enfocament",
	'all' => "Tot",
	'mine' => "Meu",

	'by' => 'per',
	'none' => 'res',

	'annotations' => "Anotacions",
	'relationships' => "Relacions",
	'metadata' => "Metadata",
	'tagcloud' => "N&uacute;vol d&acute;etiquetes",
	'tagcloud:allsitetags' => "Etiquetes de tot el lloc",

/**
 * Entity actions
 */
	'edit:this' => 'Editar',
	'delete:this' => 'Eliminar',
	'comment:this' => 'Comentar',

/**
 * Input / output strings
 */
	'deleteconfirm' => "Est&agrave; segur d&acute;eliminar aquest element?",
	'fileexists' => "L&acute;arxiu ja ha estat carregat. Per substituir-lo, seleccioni:",

/**
 * User add
 */
	'useradd:subject' => 'Compte d&acute;usuari creat',
	'useradd:body' => '
%s,

El seu compte d&acute;usuari ha estat creat a %s. Per iniciar la sessi&oacute; visiti:

%s

i inici&iuml; sessi&oacute; amb les seg&uuml;ents credencials:

Usuari: %s
Contrasenya: %s

Un cop identificat, li recomanem que modifiqui la seva contrasenya.
',

/**
 * System messages
 **/
	'systemmessages:dismiss' => "cliqui per tancar",


/**
 * Import / export
 */
	'importsuccess' => "Importaci&oacute; exitosa",
	'importfail' => "Error en importar dades d&acute;OpenDD",

/**
 * Time
 */
	'friendlytime:justnow' => "ara",
	'friendlytime:minutes' => "fa %s minuts",
	'friendlytime:minutes:singular' => "fa un minut",
	'friendlytime:hours' => "fa %s hores",
	'friendlytime:hours:singular' => "fa una hora",
	'friendlytime:days' => "fa %s dies",
	'friendlytime:days:singular' => "ahir",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => 'Gener %s',
	'date:month:02' => 'Febrer %s',
	'date:month:03' => 'Mar&ccedil; %s',
	'date:month:04' => 'Abril %s',
	'date:month:05' => 'Maig %s',
	'date:month:06' => 'Juny %s',
	'date:month:07' => 'Juliol %s',
	'date:month:08' => 'Agost %s',
	'date:month:09' => 'Setembre %s',
	'date:month:10' => 'Octubre %s',
	'date:month:11' => 'Novembre %s',
	'date:month:12' => 'Desembre %s',

/**
 * System settings
 */
	'installation:sitename' => "El nom del lloc:",
	'installation:sitedescription' => "Descripci&oacute; curta del lloc (opcional):",
	'installation:wwwroot' => "URL del lloc:",
	'installation:path' => "El path complet de la instal&middot;laci&oacute; d&acute;Elgg:",
	'installation:dataroot' => "El path complet del directori de dades:",
	'installation:dataroot:warning' => "Ha de crear aquest directori manualment. S&acute;ha de trobar en un directori diferent al de la instal&middot;laci&oacute; d&acute;Elgg",
	'installation:sitepermissions' => "Permisos d&acute;acc&eacute;s per defecte:",
	'installation:language' => "Idioma per defecte del lloc:",
	'installation:debug' => "El mode Debug proveeix informaci&oacute; extra que es pot utilizar per evaluar eventualitats. Pot fer m&eacute;s lent el funcionament del sistema i s&acute;ha d&acute;usar  nom&eacute;s quan es detectin problemes:",
	'installation:debug:none' => 'Desactivar mode Debug (recomanat)',
	'installation:debug:error' => 'Mostrar nom&eacute;s errors cr&iacute;tics',
	'installation:debug:warning' => 'Mostrar nom&eacute;s alertes cr&iacute;tiques',
	'installation:debug:notice' => 'Mostrar totes les errades, alertes i informacions d&acute;esdeveniments',

	// Walled Garden support
	'installation:registration:description' => 'El registre d&acute;usuaris est&agrave; habilitat per defecte. El pot deshabilitar per impedir que es registrin usuaris nous sense el perm&iacute;s de l&acute;administrador' ,
	'installation:registration:label' => 'Permetre el registre d&acute;usuaris nous',
	'installation:walled_garden:description' => 'Habilitar el lloc perqu&egrave; s&acute;executi com una xarxa privada. Aix&ograve; impedir&agrave; a usuaris no registrats visualitzar qualsevol p&agrave;gina del lloc, excepte les establertes com a p&uacute;bliques',
	'installation:walled_garden:label' => 'Restringir p&agrave;gines a usuaris registrats',

	'installation:httpslogin' => "Habilitar aquesta opci&oacute; perqu&egrave; els usuaris s&acute;identifiquin mitjan&ccedil;ant HTTPS. Necessitar&agrave; habilitar HTTPS tamb&eacute; al servidor perqu&egrave; funcioni",
	'installation:httpslogin:label' => "Habilitar identificaci&oacute; HTTPS",
	'installation:view' => "Ingressi la vista que es visualitzar&aacute; per defecte en el lloc o deixi-ho en blanc per la vista per defecte (si hi t&eacute; dubtes, deixi-ho per defecte):",

	'installation:siteemail' => "adre&ccedil;a de correu del lloc (utilizada per enviar correus des del sistema):",

	'installation:disableapi' => "Elgg proveeix una API per al desenvolupament de serveis web de manera que aplicacions remotes puguin interactuar amb el lloc",
	'installation:disableapi:label' => "Habilitar l&acute;API de serveis web d&acute;Elgg",

	'installation:allow_user_default_access:description' => "Si se selecciona, es permetr&agrave; als usuaris establir el seu nivell d&acute;acc&eacute;s per defecte i pot sobreescriure els nivells d&acute;acc&eacute;s del sistema",
	'installation:allow_user_default_access:label' => "Permetre l&acute;acc&eacute;s per defecte dels usuaris",

	'installation:simplecache:description' => "La cach&eacute; simple augmenta el rendiment perqu&egrave; emmagatzema contingut est&agrave;tic, com fulls CSS i arxius JavaScript. Habitualment es desitja que aquesta opci&oacute; estigui activada",
	'installation:simplecache:label' => "Utilitzar cach&eacute; simple (recomanat)",

	'installation:viewpathcache:description' => "La cach&eacute; de paths de vistes redueix els temps de c&agrave;rrega de plugins perqu&egrave; emmagatzema la ubicaci&oacute; dels seus arxius",
	'installation:viewpathcache:label' => "Utilitzar cach&eacute; de paths de vistes (recomanat)",

	'upgrading' => 'Actualizant..',
	'upgrade:db' => 'S&acute;ha actualitzat la base de dades',
	'upgrade:core' => 'S&acute;ha actualitzat la instal&middot;laci&oacute; d&acute;Elgg',
	'upgrade:unable_to_upgrade' => 'No &eacute;s possible actualizar',
	'upgrade:unable_to_upgrade_info' =>
'No es pot actualizar perqu&egrave; s&acute;han detectat vistes antigues en el directori de vistes del nucli d&acute;Elgg. Aquestes vistes han quedat obsoletes i s&acute;han d&acute;esborrar perqu&egrave; Elgg funcioni correctament. Si no ha fet canvis al nucli d&acute;Elgg, elimini nom&eacute;s el directori de vistes (views) i substitueixi&acute;l amb  l&acute;&uacute;ltim paquet d&acute;instal&middot;laci&oacute; descarregat d&acute;<a href="http://elgg.org">elgg.org</a>.<br />
		<br />

		Si necessita instruccions detallades, visiti la <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Documentaci&oacute; d&acute;actualizaci&oacute; d&acute;Elgg</a>. Si necessita assist&egrave;ncia, si us plau vagi als <a href="http://community.elgg.org/pg/groups/discussion/">F&ograve;rums de Suport de la Comunitat</a>',

	'update:twitter_api:deactivated' => 'L&acute;API de Twitter (abans Twitter Service) s&acute;ha desactivat durant l&acute;actualizaci&oacute;. Si us plau, activi-la manualment si cal',
	'update:oauth_api:deactivated' => 'L&acute;API OAuth (abans OAuth Lib) s&acute;ha desactivat durant l&acute;actualitaci&oacute;. Si us plau, activi-la manualment si cal',

	'deprecated:function' => '%s() ha quedat obsoleta per %s()',

/**
 * Welcome
 */
	'welcome' => "Benvinguda o benvingut",
	'welcome:user' => 'Benvinguda o benvingut %s',

/**
 * Emails
 */
	'email:settings' => "Configuraci&oacute; de correu",
	'email:address:label' => "adre&ccedil;a de correu",

	'email:save:success' => "Nova adre&ccedil;a de correu desada, s&acute;ha sol&middot;licitat la verificaci&oacute;",
	'email:save:fail' => "No s&acute;ha pogut desar la nova adre&ccedil;a de correu",

	'friend:newfriend:subject' => "%s t&acute;ha fet un dels seus contactes!",
	'friend:newfriend:body' => "%s t&acute;ha fet un dels seus contactes!

Per veure el seu perfil, cliqui aqu&iacute;:

%s

Si us plau, no respongui aquest correu",



	'email:resetpassword:subject' => "Contrasenya restablerta!",
	'email:resetpassword:body' => "Hola %s,

la seva contrasenya ha estat restablerta a: %s",


	'email:resetreq:subject' => "Sol&middot;licitud de nova contrasenya",
	'email:resetreq:body' => "Hola %s,

Alg&uacute; (de la direcci&oacute; IP %s) ha sol&middot;licitat una nova contrasenya pel seu compte.

Si ha estat vost&egrave; qui ha realitzat la petici&oacute;, faci clic a l&acute;enlla&ccedil; de sota. Si no &eacute;s aix&iacute;, ignori aquest correu.

%s
",

/**
 * user default access
 */
'default_access:settings' => "El seu nivell d&acute;acc&eacute;s per defecte",
'default_access:label' => "Acc&eacute;s per defecte",
'user:default_access:success' => "El nivell d&acute;acc&eacute;s per defecte ha estat desat",
'user:default_access:failure' => "El nivell d&acute;acc&eacute;s per defecte no s&acute;ha pogut desar",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Falten dades",

/**
 * Comments
 */
	'comments:count' => "%s comentaris",

	'riveraction:annotation:generic_comment' => '%s va comentar a %s',

	'generic_comments:add' => "Comentar",
	'generic_comments:post' => "Publicar un comentari",
	'generic_comments:text' => "Comentar",
	'generic_comments:latest' => "comentaris m&eacute;s recents",
	'generic_comment:posted' => "S&acute;ha publicat el seu  comentari",
	'generic_comment:deleted' => "S&acute;ha esborrat el seu comentari",
	'generic_comment:blank' => "Ens sap greu, ha d&acute;ingressar algun comentari abans de poder desar-lo",
	'generic_comment:notfound' => "Ens sap greu, no s&acute;ha pogut trobar l&acute;element que cercava",
	'generic_comment:notdeleted' => "Ens sap greu,  no s&acute;ha pogut eliminar el comentari",
	'generic_comment:failure' => "Hi ha hagut una errada inesperada en intentar afegir el seu comentari. Si us plau, torni-ho a intentar",
	'generic_comment:none' => 'Sense comentaris',

	'generic_comment:email:subject' => 'Tens un comentari nou!',
	'generic_comment:email:body' => "Tens un comentari nou en aquest element \"%s\" de %s. Dice:


%s


Per respondre o veure l&acute;element original, faci clic aqu&iacute;:

%s

Per veure el perfil de %s, faci clic aqu&iacute;:

%s

Si us plau, no respongui a aquest correu",

/**
 * Entities
 */
	'byline' => 'Per %s',
	'entity:default:strapline' => 'Creat %s per %s',
	'entity:default:missingsupport:popup' => 'Aquesta entitat no es pot mostrar correctament. Aix&ograve; pot ser perqu&egrave; el suport del plugin ja no es troba instal&middot;lat',

	'entity:delete:success' => 'L&acute;entitat %s ha estat eliminada',
	'entity:delete:fail' => 'L&acute;entitat %s no ha pogut ser eliminada',

/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => 'Al formulari, falten __token o camps __ts',
	'actiongatekeeper:tokeninvalid' => "S&acute;ha trobat una errada (no coincid&egrave;ncia de token). Aix&ograve; probablement indiqui que la p&agrave;gina que estava utilitzant ja ha caducat. Si us plau, torni-ho a intentar",
	'actiongatekeeper:timeerror' => 'La p&agrave;gina que estava utilitzant ha caducat. Si us plau, recarregui-la i torni-ho a intentar',
	'actiongatekeeper:pluginprevents' => 'Una extensi&oacute; d&acute;aquest formulari ha evitat que s&acute;envi&iuml; el formulari',

/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */
	'tag_names:tags' => 'Etiquetes',
	'tags:site_cloud' => 'N&uacute;vol d&acute;etiquetes del lloc',

/**
 * Javascript
 */
	'js:security:token_refresh_failed' => 'No s&acute;ha pogut contactar amb %s. Pot experimentar problemes a l&acute;hora de desar continguts en el lloc',
	'js:security:token_refreshed' => 'La connexi&oacute; a %s ha estat restaurada!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Espa&ntilde;ol",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinese",
	"zu" => "Zulu",
);

add_translation("ca",$catalan);