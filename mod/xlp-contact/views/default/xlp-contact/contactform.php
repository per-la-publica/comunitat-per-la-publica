<?php 
require_once("./include/fgcontactform.php");
require_once("./include/simple-captcha.php");
$email = elgg_get_plugin_setting('email','xlp-contact');

$formproc = new FGContactForm();
$sim_captcha = new FGSimpleCaptcha('scaptcha');

$formproc->EnableCaptcha($sim_captcha);
$formproc->AddRecipient($email);
// For better security. Get a random tring from this link: http://tinyurl.com/randstr and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');

if(isset($_POST['submitted'])) {
	if($formproc->ProcessForm()) {
		$formproc->RedirectToURL("thankyou.php");
	}
}
?>
<form id="contactus" action="<?php echo $formproc->GetSelfScript(); ?>" method="post" accept-charset="UTF-8">
	<fieldset >
		<legend><?php echo elgg_echo('xlp-contact:contactus'); ?></legend>

		<input type="hidden" name="submitted" id="submitted" value="1" />
		<input type="hidden" name="<?php echo $formproc->GetFormIDInputName(); ?>" value="<?php echo $formproc->GetFormIDInputValue(); ?>" />
		<input type="text" class="spmhidip" name="<?php echo $formproc->GetSpamTrapInputName(); ?>" />

		<div><span class="error"><?php echo $formproc->GetErrorMessage(); ?></span></div>
		<div class="container">
			<label for="name"><?php echo elgg_echo("xlp-contact:name"); ?>*:</label><br/>
			<input type="text" name="name" id="name" value="<?php echo $formproc->SafeDisplay('name') ?>" maxlength="50" /><br/>
			<span id="contactus_name_errorloc" class="error"></span>
		</div>
		<div class="container">
			<label for="email"><?php echo elgg_echo("xlp-contact:email"); ?>*:</label><br/>
			<input type="text" name="email" id="email" value="<?php echo $formproc->SafeDisplay('email') ?>" maxlength="50" /><br/>
			<span id="contactus_email_errorloc" class="error"></span>
		</div>
		<div class="container">
			<label for="message" ><?php echo elgg_echo("xlp-contact:body"); ?>*:</label><br/>
			<span id="contactus_message_errorloc" class="error"></span>
			<textarea rows="10" cols="50" name="message" id="message"><?php echo $formproc->SafeDisplay("message") ?></textarea>
		</div>
		<fieldset id="antispam">
			<legend>Anti-spam question</legend>
			<span class="short_explanation">(Please answer the simple question below. This to prevent spam bots from submitting this form)</span>
			<div class="container">
				<label for="scaptcha"><?php echo $sim_captcha->GetSimpleCaptcha(); ?></label>
				<input type="text" name="scaptcha" id="scaptcha" maxlength="10" /><br/>
				<span id="contactus_scaptcha_errorloc" class="error"></span>
			</div>
		</fieldset>

		<div class="container">
			<input type="submit" name="Submit" value="Submit" />
		</div>

	</fieldset>

</form>
<script type="text/javascript">
    var frmvalidator = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","<?php echo elgg_echo('xlp-contact:namereq'); ?>");
    frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("email","email","Please provide a valid email address");
    frmvalidator.addValidation("message","req","Please provide your message");
    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
    frmvalidator.addValidation("scaptcha","req","Please answer the anti-spam question");
</script>
