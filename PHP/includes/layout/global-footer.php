<?php
/**
 * Header & Contact form include
 *
 * @package Firepoint.
 * @version 1.0
 */
?>
<footer id="layout-footer">

	<?php if( APP_PAGE !== 'contact' ) {
	$Contact = new Contact;
	?>
	<div class="container-fluid">
		<div class="container -- wrapper" style="position: relative">
			<div class="close-contact"> 
				<p class="text-orange"><i class="fas fa-times"></i></p>
			</div>
			<div class="row">
				<div class="col-0  - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
				<div class="col-7  - col-md-7 hidden-sm-down">&nbsp;</div>
				<div class="col-16 - col-md-7">
					<span href="#/contact" id="contact-toggle">
			        	<span class="h2 text-orange">Contact Us</span>
			        	<span class="p text-tan">Firepoint Studios<br />3513 Brighton Blvd<br />Denver, CO 80216</span>
			        	<span class="toggle-open"><i class="text-orange h3 -- fas fa-plus"></i></span>
			        	<span class="toggle-close"><i class="text-orange h3 -- fas fa-minus"></i></span>
			        </span>
				</div>
				<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			</div>
			<div class="row" id="contact-information">
				<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
				<div class="col-2">&nbsp;<!--gutter--></div>
				<div class="col-10">
		        	<p class="text-orange">We're looking forward to learning more about your project goals.<br />Innovation doesn't happen by itself, so let's take the first step together.</p>
		        	<?php require_once('includes/contact-form.php'); ?>
				</div>
				<div class="col-2">&nbsp;<!--gutter--></div>
				<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			</div>
		</div>
	</div>
	<?php } // END if page == contact ?>
</footer>
<div class="cursor-click">
	<div class="cursor-click-inner cursor-inner"></div>
</div>