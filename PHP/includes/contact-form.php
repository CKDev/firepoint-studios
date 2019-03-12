<?php
// Contact Form
$error = false;
$show_dialog = false;
if ( isset($Contact->ERRORS) && !empty($Contact->ERRORS) ) {
	$show_dialog = true;

	$error_fields = array_flip($Contact->ERRORS);
	
	$error['name_full'] = (in_array('name_full', $Contact->ERRORS)) ? true : null;
	$error['contact_from'] = (in_array('contact_from', $Contact->ERRORS)) ? true : null;
	$error['contact_phone'] = (in_array('contact_phone', $Contact->ERRORS)) ? true : null;
	$error['contact_company'] = (in_array('contact_company', $Contact->ERRORS)) ? true : null;

	echo '<div class="alert alert-danger" role="alert">';
  	echo '<b>There were errors with your submission; please check the form fields and resubmit.</b>';
	echo '</div>';
}
?>
<form class="form form-horizontal -- form-newsletter" method="post" id="contact-form" name="contact-form" novalidate="novalidate">
	<?php $nonce = Contact::nonce_generate( $_ENV['NONCE_SECRET'] ); ?>
	<input type="hidden" name="data[nonce]" value="<?php echo $nonce; ?>" />
	<div class="row">
		<div class="col-16 form-group" id="form-wrap-name-first">
			<label for="name_full" class="sr-only">Full Name</label>
			<input name="data[name_full]" type="text" id="name_full" class="form-control <?php echo ( isset($error) && (isset($error['name_full'])) ) ? 'is-invalid ' : null; ?>-- required" placeholder="Full Name" required tabindex="1" value="<?php echo (isset($_POST['data']['name_full'])) ? $_POST['data']['name_full']: null; ?>"/>
			<?php echo ( isset($error) && (isset($error['name_full'])) ) ? '<span class="invalid-feedback -- text-tan">Please provide a Full Name</span>' : null; ?>
		</div>
		<div class="col-16 form-group" id="form-wrap-email">
			<label for="contact" class="sr-only">Email</label>
			<input name="data[contact_from]" type="email" id="contact" class="form-control <?php echo ( isset($error) && (isset($error['contact_from'])) ) ? 'is-invalid ' : null; ?>-- required email" placeholder="Email" required tabindex="2" value="<?php echo (isset($_POST['data']['name_full'])) ? $_POST['data']['contact_from']: null; ?>"/>
			<?php echo ( isset($error) && (isset($error['contact_from'])) ) ? '<span class="invalid-feedback -- text-tan">Please provide a valid Email address</span>' : null; ?>
		</div>
		<div class="col-16 form-group" id="form-wrap-phone">
			<label for="phone" class="sr-only">Phone</label>
			<input name="data[contact_phone]" type="text" id="phone" class="form-control <?php echo ( isset($error) && (isset($error['contact_phone'])) ) ? 'is-invalid ' : null; ?>-- required" placeholder="Phone" required tabindex="3" value="<?php echo (isset($_POST['data']['name_full'])) ? $_POST['data']['contact_phone']: null; ?>"/>
			<?php echo ( isset($error) && (isset($error['contact_phone'])) ) ? '<span class="invalid-feedback -- text-tan">Please provide a Phone number</span>' : null; ?>
		</div>
		<div class="col-16 form-group" id="form-wrap-organization">
			<label for="company" class="sr-only">Company Name</label>
			<input name="data[contact_company]" type="text" id="company" class="form-control <?php echo ( isset($error) && (isset($error['contact_company'])) ) ? 'is-invalid ' : null; ?>-- required" placeholder="Company Name" required tabindex="4" value="<?php echo (isset($_POST['data']['name_full'])) ? $_POST['data']['contact_company']: null; ?>"/>
			<?php echo ( isset($error) && (isset($error['contact_company'])) ) ? '<span class="invalid-feedback -- text-tan">Please provide a Company</span>' : null; ?>
		</div>
		<div class="col-16 form-group" id="form-wrap-message">
			<label for="message" class="sr-only">Tell us about your project</label>
			<textarea name="data[message]" id="message" class="form-control" rows="3" placeholder="Tell us about your project" tabindex="6"><?php echo (isset($_POST['data']['name_full'])) ? $_POST['data']['message']: null; ?></textarea>
		</div>
		<div class="col-16 form-group - text-right" id="form-wrap-submit">
			<a class="section-link" id="contac-submit">submit <i class="fas fa-angle-double-right"></i></a>
		</div>
	</div>
</form>