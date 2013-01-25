<?php
/**
 * Elgg spotlight plugin
 *
 */

elgg_register_event_handler('init','system','spotlight_init');

/**
 * Initialize spotlight plugin
 */
function spotlight_init() {
	elgg_extend_view('page/elements/footer', 'page/elements/spotlight');
	elgg_extend_view('css/elgg', 'spotlight/css');
}
