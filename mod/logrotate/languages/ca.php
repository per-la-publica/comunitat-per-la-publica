<?php
/**
 * Elgg log rotator language pack.
 *
 * @package ElggLogRotate
 */

$catalan = array(
	'logrotate:period' => 'Amb quina freq&uuml;&egrave;ncia s&acute;ha de desar el log del sistema?',
	'logrotate:weekly' => 'Un cop cada setmana',
	'logrotate:monthly' => 'Un cop cada mes',
	'logrotate:yearly' => 'Un cop cada any',

	'logrotate:logrotated' => "Registre desat\n",
	'logrotate:lognotrotated' => "Hi ha hagut una errada a l&acute;hora de desar el registre\n",
	
	'logrotate:date' => 'Eliminar registres desats abans de:',

	'logrotate:week' => 'setmana',
	'logrotate:month' => 'mes',
	'logrotate:year' => 'any',
		
	'logrotate:logdeleted' => "Registre eliminat\n",
	'logrotate:lognotdeleted' => "Hi ha hagut una errada a l&acute;hora d&acute;eliminar el registre\n",
);

add_translation("ca", $catalan);
