<?php
	// Load Elgg engine
	include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
 
	// make sure only logged in users can see this page	
	gatekeeper();
 
	$title = elgg_echo("xlp-contact:thanks");
 
	$area1 = elgg_view_title($title);
	$area1 .= elgg_view("xlp-contact/thankyou");
 
  	$body = elgg_view('xlp-contact/thankyou', array('content' => $area1));
	echo  elgg_view_page($title, $body);
?>
