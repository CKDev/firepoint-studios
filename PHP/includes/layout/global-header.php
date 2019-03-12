<?php
/**
 * Header & Primary Navigation
 * Contains site branding and navigation elements; the header will affix to the top on smaller viewports
 *
 * @package Firepoint.
 * @version 1.0
 */
?>
<header id="layout-header" class="wrapper">
	<div class="container-fluid">
		<nav id="layout-navigation" class="row">
			<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-16 col-md-14 - align-items-center -- navigation-bar">
				<div id="navbar-brand"><!-- class="order-1" -->
					<a href="/" title="<?php echo APP_SITE_NAME; ?>"><img 
							src="<?php echo $ROOT; ?>/webroot/img/firepoint.png" class="img-fluid -- logo" 
							/><img 
							src="<?php echo $ROOT; ?>/webroot/img/firepoint-inverse.png" class="img-fluid -- logo-inverse" 
							/></a>
				</div>
				<div id="navigation-trigger"><!-- class="order-2" -->
					<div class="hidden-md-up" id="navbar-toggle">
						<input type="checkbox" id="navbar-toggle-checkbox" />
						<label for="navbar-toggle-checkbox" id="navbar-toggle-switch">
							<div class="bar diagonal part-1"></div>
							<div class="bar horizontal"></div>
							<div class="bar diagonal part-2"></div>
						</label>
					</div>
					<img src="<?php echo $ROOT; ?>/webroot/img/dot.png" class="firepoint" />
					<div class="nav-circle"><!-- this is on an under-layer --></div>
				</div>
				<div id="navigation-links"><!-- class="order-3" -->
			        <nav class="nav">
						<a class="nav-link -- page-team" href="team">Team</a>
						<a class="nav-link -- page-process" href="process">Process</a>
						<a class="nav-link -- page-services" href="services">Services</a>
						<a class="nav-link -- page-contact" href="contact">Contact</a>
					</nav>
					<div class="nav-mask" id="navigation-mask">
						<img src="<?php echo $ROOT; ?>/webroot/img/cursor.png" class="swipe" style="height: 8px; width: 8px; float: right; margin-top: 3px;" />
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-0 - col-sm-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</nav>
	</div>
</header>