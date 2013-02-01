<?php
/**
 * Defines database credentials.
 *
 * Most of Elgg's configuration is stored in the database.  This file contains the
 * credentials to connect to the database, as well as a few optional configuration
 * values.
 *
 * The Elgg installation attempts to populate this file with the correct settings
 * and then rename it to settings.php.
 *
 * @todo Turn this into something we handle more automatically.
 * @package Elgg.Core
 * @subpackage Configuration
 */

global $CONFIG;
if (!isset($CONFIG)) {
	$CONFIG = new stdClass;
}

/*
 * Standard configuration
 *
 * You will use the same database connection for reads and writes.
 * This is the easiest configuration, and will suit 99.99% of setups. However, if you're
 * running a really popular site, you'll probably want to spread out your database connections
 * and implement database replication.  That's beyond the scope of this configuration file
 * to explain, but if you know you need it, skip past this section.
 */

/**
 * The database username
 *
 * @global string $CONFIG->dbuser
 * @name $CONFIG->dbuser
 */
$CONFIG->dbuser = 'comunitat';

/**
 * The database password
 *
 * @global string $CONFIG->dbpass
 */

$CONFIG->dbpass = 'comunitat';
/**
 *
 * @global string $CONFIG->dbname
 */
$CONFIG->dbname = 'comunitat';

/**
 * The database host.
 *
 * For most installations, this is 'localhost'
 *
 * @global string $CONFIG->dbhost
 */
$CONFIG->dbhost = 'localhost';

/**
 * The database prefix
 *
 * This prefix will be appended to all Elgg tables.  If you're sharing
 * a database with other applications, use a database prefix to namespace tables
 * in order to avoid table name collisions.
 *
 * @global string $CONFIG->dbprefix
 */
$CONFIG->dbprefix = '';


/**
 * Memcache setup (optional)
 * This is where you may optionally set up memcache.
 *
 * Requirements:
 * 	1) One or more memcache servers (http://www.danga.com/memcached/)
 *  2) PHP memcache wrapper (http://uk.php.net/manual/en/memcache.setup.php)
 *
 * Note: Multiple server support is only available on server 1.2.1
 * or higher with PECL library > 2.0.0
 */
//$CONFIG->memcache = true;
//
//$CONFIG->memcache_servers = array (
//	array('server1', 11211),
//	array('server2', 11211)
//);


/**
 * Use non-standard headers for broken MTAs.
 *
 * The default header EOL for headers is \r\n.  This causes problems
 * on some broken MTAs.  Setting this to TRUE will cause Elgg to use
 * \n, which will fix some problems sending email on broken MTAs.
 *
 * @global bool $CONFIG->broken_mta
 */
$CONFIG->broken_mta = FALSE;

/**
 * Disable the database query cache
 *
 * Elgg stores each query and its results in a query cache.
 * On large sites or long-running scripts, this cache can grow to be
 * large.  To disable query caching, set this to TRUE.
 *
 * @global bool $CONFIG->db_disable_query_cache
 */
$CONFIG->db_disable_query_cache = FALSE;

/**
 * Minimum password length
 *
 * This value is used when validating a user's password during registration.
 *
 * @global int $CONFIG->min_password_length
 */
$CONFIG->min_password_length = 6;

/**
 * xLP: Email address from upc.edu
 */
$CONFIG->hooks['registeruser:validate:email']['all'][1] = function ($hook, $type, $returnvalue, $params) {
	return $returnvalue && preg_match('/(@|\.)upc\.edu$/i', $params['email']);
};

/**
 * xLP: Show information about email address from upc.edu
 */
$CONFIG->hooks['view']['register/extend']['1'] = function ($hook, $type, $returnvalue, $params) {
  // we only want to alter when viewtype is "default"
  if ($params['viewtype'] !== 'default') {
		return $returnvalue;
  }
	switch (get_current_language()) {
        case 'es':
			return $returnvalue.
'<div class="elgg-message elgg-state-notice">'.
'<p>Con el fin de permitir el accesos sólo a miembros de la comunidad UPC, la dirección de correo tiene que pertenecer a la UPC.</p>'.
'<p>Al finalizar el registro, recibirás en unos minutos un correo de confirmación en tu correo.</p>'.
'</div>';
		default:
			return $returnvalue.
'<div class="elgg-message elgg-state-notice">'.
'<p>Per tal de permetre l\'accés només a membres de la comunitat UPC, l\'adreça de correu ha de pertànyer a la UPC.</p>'.
'<p>Al finalitzar el registre, rebràs en uns minuts un email de conformació al teu correu.</p>'.
'</div>';
	}
};
