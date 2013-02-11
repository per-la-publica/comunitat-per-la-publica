<?php header("Content-type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo elgg_view('page/elements/head', $vars); ?>
</head>
<body>
	<div class="elgg-page elgg-page-walledgarden">
		<div class="elgg-page-messages">
			<?php echo elgg_view('page/elements/messages', array('object' => $vars['sysmessages'])); ?>
		</div>
		<div class="elgg-body-walledgarden">

		<?php
			$title = elgg_get_site_entity()->name;
			$welcome = elgg_echo('walled_garden:welcome');
			$welcome .= ': ' . $title;

			$menu = elgg_view_menu('walled_garden', array(
			'sort_by' => 'priority',
			'class' => 'elgg-menu-general elgg-menu-hz',
			));

			$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));
		?>

		<div class="wrapper">
			<div class="header" style="margin-bottom:1em"><h1><?php echo $welcome; ?></h1>	</div> 
			<div class="wrapright"> 	  
				<div class="right"><?php echo $login_box; ?>	</div>
			</div>    
			<div class="wrapleft" >
				<div class="left"><iframe style="width:700px;height:500px;" scrolling="no" src="/static/login_slides.php" frameborder="0"></iframe></div>
				<div class="footer"><?php echo $menu; ?>	</div>
			</div>
		</div>
	</div>
	<?php echo elgg_view('page/elements/foot'); ?>
</body>
</html>















