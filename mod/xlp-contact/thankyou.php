<?php
	// Load Elgg engine
	include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
 
	// make sure only logged in users can see this page	
	gatekeeper();

	elgg_register_css('contact', elgg_get_site_url().'mod/xlp-contact/contact.css');
	elgg_load_css('contact');

	$title = elgg_echo("xlp-contact:thanks"); 
	$body  = elgg_view("xlp-contact/thankyou");

	echo elgg_view_page($title, $body);
?>
