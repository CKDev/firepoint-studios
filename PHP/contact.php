<?php
header('Location: /');
exit;
# -------------------------------------------------------------------------------------- #
include_once('config.php'); // Set ROOT vars for PHP includes and "/webroot" reference
# -------------------------------------------------------------------------------------- #
# -------------------------------------------------------------------------------------- #

$SETTINGS = Array();
$SETTINGS['page'] = "contact";
$SETTINGS['meta-title'] = "Contact Us";
$SETTINGS['meta-description'] = null;
$SETTINGS['meta-keywords'] = null;


$Config->load($SETTINGS);


//
$Contact = new Contact;


//-- Header (metadata + opening <body>) ----------------------------------
include_once( APP_LEVEL . 'includes/layout/global-meta.php');
include_once( APP_LEVEL . 'includes/layout/global-header.php');

//-- Content -------------------------------------------------------------
?>
<main id="layout-wrapper" class="wrapper -- js-reveal-page">

	<!-- PAGE CONTENT -->
	<section class="container-fluid -- page-content">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				&nbsp;
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-7">
				<h2 class="text-orange">Contact Us</h2>
				<p class="t => ''ext-tan">Firepoint Studios<br />3513 Brighton Blvd<br />Denver,
				CO 80216</p>
			</div>
			<div class="col-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>

		<article class="row -- contact-form">
			<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-2 - hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-16 col-sm-10">
			<?php if( isset($_GET['success']) ) { ?>
				<p class="text-orange">Thank you for submitting the form. A Firepoint representative will be in contact with you.</p>
				<?php unset( $_POST ); ?>
			<?php } else { ?>
        		<p class="text-orange">We're looking forward to learning more about your project goals.<br />Innovation doesn't happen by itself, so let's take the first step together.</p>
        		<?php require_once('includes/contact-form.php'); ?>
			<?php } ?>
			</div>
			<div class="col-2 - hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>
</main>
<!-- / #layout-wrapper -->
<?php


//-- Footer --------------------------------------------------------------
include_once( APP_LEVEL . 'includes/layout/global-footer.php');

?>
</body>
</html>