<?php
/**
 * Walled garden login
 */

$title = elgg_get_site_entity()->name;
$welcome = elgg_echo('walled_garden:welcome');
$welcome .= ': ' . $title;

$menu = elgg_view_menu('walled_garden', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-general elgg-menu-hz',
));

$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));

echo <<<HTML
<div class="wrapper">
	<div class="header" style="margin-bottom:1em">
  	<h1>$welcome</h1>	         
	</div> 
  <div class="wrapright"> 	  
		<div class="right">
 			$login_box
		</div>
	</div>    
	<div class="wrapleft" >
		<div class="left">
		<iframe style="width:700px;height:500px;" scrolling="no" src="/static/login_slides.php" frameborder="0"></iframe>
		</div>
	  <div class="footer">
    	$menu
		</div>     
	</div>
HTML;
