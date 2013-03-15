<?php 

require_once("./include/fgcontactform.php");
require_once("./include/simple-captcha.php");
$email = elgg_get_plugin_setting('email','xlp-contact');
$formproc = new FGContactForm();
$sim_captcha = new FGSimpleCaptcha('scaptcha');

$formproc->EnableCaptcha($sim_captcha);

//1. Add your email address here.
$formproc->AddRecipient($email);

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr and put it here
$formproc->SetFormRandomKey('iBuFNzOzwyRxBc5');

if(isset($_POST['submitted'])) {
   if($formproc->ProcessForm()) {
        $formproc->RedirectToURL("thank-you.php");
   }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>
<div class="elgg-main elgg-body">
<!-- Form Code Start -->

&nbsp;
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<h2>Contact us</h2>

<fieldset >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<fieldset id='antispam'>
<span class='short_explanation'>(Please answer the simple question below. This to prevent spam bots from submitting this form)</span>
<div class='container'>
    <label for='scaptcha' ><?php echo $sim_captcha->GetSimpleCaptcha(); ?></label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
</div>
</fieldset>

<div class='container'>
    <input type='submit' name='Submit' value="Submit" class="elgg-button elgg-button-submit" />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please answer the anti-spam question");





// ]]>
</script>
</div>
</body>
</html>

