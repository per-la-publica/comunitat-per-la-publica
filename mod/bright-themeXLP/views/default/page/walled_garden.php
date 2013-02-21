<?php header("Content-type: text/html; charset=UTF-8"); ?>
<?php
    $welcome = elgg_get_site_entity()->name;
		$description = 'Tots som comunitat. Participa!';
		$login_url = elgg_get_site_url();
		if (elgg_get_config('https_login')) {
			$login_url = str_replace("http:", "https:", $login_url);
		}

    $menu = elgg_view_menu('walled_garden', array(
	    'sort_by' => 'priority',
    	'class' => 'elgg-menu-general elgg-menu-hz',
    ));

	  // Mostrar els grups actuals amb nom:descripicó curta 
	  // $config = elgg_get_config('group'); --> Permet veure els camps de l'objecte.
		$groups = elgg_get_entities(array('type' => 'group', 'limit' => 0));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php echo elgg_view('page/elements/head', $vars); ?>
</head>
<body>
    <div class="elgg-page">
        <div class="elgg-page-messages">
            <?php echo elgg_view('page/elements/messages', array('object' => $vars['sysmessages'])); ?>
        </div>

        <div class="elgg-body-walledgarden">
            <div class="elgg-head header">
								<?php echo elgg_view_form('login', array('action' => "{$login_url}action/login")); ?>
								<div class="welcome">
	                <h1><?php echo $welcome; ?></h1>
  	              <h2><?php echo $description; ?></h2>
								</div>
            </div>

	          <div class="box">
		          	<h4>Grups recents a la Comunitat</h4>
								<dl>
					      <?php foreach($groups as $group) : ?>
									<?php if ($group['enabled'] == 'yes') : ?>
											<dt><?php echo $group['name']; ?></dt>
                      <dd><?php echo $group->briefdescription; ?></dd>
									<?php endif; ?>
								<?php endforeach; ?>
								</dl>
	          </div>
						<iframe src="/static/login_slides.php" scrolling="no"></iframe>
        		<div class="footer"><?php echo $menu; ?></div>
        </div>
    </div>
    <?php echo elgg_view('page/elements/foot'); ?>
</body>
</html>
