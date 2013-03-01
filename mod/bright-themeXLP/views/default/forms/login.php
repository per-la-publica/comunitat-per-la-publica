<?php
/**
 * Elgg login form
 *
 * @package Elgg
 * @subpackage Core
 */
?>
<div style="width:150px">
  <label><?php echo elgg_echo('loginusername'); ?></label>
  <?php echo elgg_view('input/text', array('name' => 'username', 'class' => 'elgg-autofocus')); ?>
</div>

<div style="width:150px">
	<label><?php echo elgg_echo('password'); ?></label>
  <?php echo elgg_view('input/password', array('name' => 'password')); ?>
</div>

<div>
	<br>
	<?php echo elgg_view('input/submit', array('value' => elgg_echo('login'))); ?>
</div>

<?php echo elgg_view('login/extend', $vars); ?>

<div style="clear:left">
	<ul class="elgg-menu elgg-menu-general" style="clear:right;">
		<?php if (elgg_get_config('allow_registration')) : ?>
		<li style="">
			<a class="registration_link" href="<?php echo elgg_get_site_url(); ?>register">
				<span class="elgg-button elgg-button-submit"><?php echo elgg_echo('register'); ?></span>
			</a>
		</li>
		<li style="">
			<a class="forgot_link" href="<?php echo elgg_get_site_url(); ?>forgotpassword">
				<?php echo elgg_echo('user:password:lost'); ?>
			</a>
		</li>
		<?php endif; ?>
	</ul>
</div>
<?php 
	if (isset($vars['returntoreferer'])) {
		echo elgg_view('input/hidden', array('name' => 'returntoreferer', 'value' => 'true'));
	}
?>
