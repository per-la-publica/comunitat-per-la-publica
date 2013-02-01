<?php
    /**
	 * Per la Pública
	 * 
	 * @package perlapublica
	 * @author Per la Pública Developers
	 * @link http://www.perlapublica.org
     *
     * Select SQL to get all initial emails in database
     * > SELECT u.username, s1.string, s2.string 
     * > FROM users_entity u, metadata d, metastrings s1, metastrings s2 
     * > WHERE u.guid = d.entity_guid AND d.name_id = s1.id AND s1.string = 'initial_email' AND d.value_id = s2.id;
     *
     * TODO: Pendent de utilitzar el sistema i18n de l'elgg.
     */

	/**
	 * Initialization of plugin
	 */
    function perlapublica_init() {
        elgg_register_plugin_hook_handler('register', 'user', 'perlapublica_save_initial_email');
        elgg_register_plugin_hook_handler('registeruser:validate:email', 'all', 'perlapublica_filter_upc_address');
        elgg_register_plugin_hook_handler('view', 'register/extend', 'perlapublica_filter_upc_address_information');
    }

    elgg_register_event_handler('init', 'system', 'perlapublica_init');


    /**
     * Show information about email address from upc.edu
     */
    function perlapublica_filter_upc_address_information($hook, $type, $returnvalue, $params) {
        // we only want to alter when viewtype is "default"
        if ($params['viewtype'] !== 'default') {
            return $returnvalue;
        }
        $infoUpc = '';
	    switch (get_current_language()) {
            case 'es':
			    $infoUpc = '<p>Con el fin de permitir el accesos sólo a miembros de la comunidad UPC, la dirección de correo tiene que pertenecer a la UPC.</p>'.
                           '<p>Al finalizar el registro, recibirás, en unos minutos, un correo de confirmación en tu correo.</p>';
                break;
		    default:
			    $infoUpc = '<p>Per tal de permetre l\'accés només a membres de la comunitat UPC, l\'adreça de correu ha de pertànyer a la UPC.</p>'.
                           '<p>Al finalitzar el registre, rebràs, en uns minuts, un email de confirmació al teu correu.</p>';
	    }
        return '<div class="elgg-message elgg-state-notice" style="margin-top:1em">'.$infoUpc.'</div>'.$returnvalue;
      
    }

    /**
     * Email address from upc.edu
     */
    function perlapublica_filter_upc_address($hook, $type, $returnvalue, $params) { 
        return $returnvalue && preg_match('/(@|\.)upc\.edu$/i', $params['email']);
    }

    /**
     * Handle registration and save initial email in $user->initial_email attribute.
     */
    function perlapublica_save_initial_email($hook, $type, $value, $params) {
	    $user = elgg_extract('user', $params);

	    // no clue what's going on, so don't react.
	    if (!$user instanceof ElggUser) {
		    return;
	    }

        $user->initial_email = $user->email;
        $user->save();
	    return $value;
    }
