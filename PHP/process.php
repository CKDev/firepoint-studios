<?php
# -------------------------------------------------------------------------------------- #
include_once('config.php'); // Set ROOT vars for PHP includes and "/webroot" reference
# -------------------------------------------------------------------------------------- #
# -------------------------------------------------------------------------------------- #


$SETTINGS = Array();
$SETTINGS['page'] = "process";
$SETTINGS['meta-title'] = "Our Process";
$SETTINGS['meta-description'] = null;
$SETTINGS['meta-keywords'] = null;


$Config->load($SETTINGS);


//-- Header (metadata + opening <body>) ----------------------------------
include_once( APP_LEVEL . 'includes/layout/global-meta.php');
include_once( APP_LEVEL . 'includes/layout/global-header.php');


//-- Content -------------------------------------------------------------
?>
<main id="layout-wrapper" class="wrapper -- js-reveal-page">
	
	<!-- INTRO -->
	<section class="container-fluid -- introduction">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<h2>Our 4 Step Process</h2>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-7">
				<h1 class="header-sans-serif">We believe in real partnerships with our clients, and aim to work collaboratively during all phases of a project.</h1>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<!-- PAGE CONTENT -->
	<section class="container-fluid -- page-content">
		<article class="row -- process">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<div class="row">
					<div class="col-12 offset-2 col-md-6 offset-md-10">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/process/firepoint-bloomery.png" alt="..." class="img-fluid" />
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-12 offset-2 col-md-7 offset-md-0">
				<h3 class="text-orange -- content-step">step 1</h3>
				<h2 class="content-step">Firepoint Bloomery</h2>
				<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>
				<span class="hidden-sm-down -- content">
					<p><b>Let's talk about it.</b></p>
					<p>Our design conversation starts with the Firepoint Bloomery, a Design Thinking workshop which identifies opportunities to build new intellectual property within your organization, with discrete purposes including increasing revenue, reducing waste, improving outcomes and/or patient experience, and enhancing staff engagement.</p>
				</span>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<section class="container-fluid">
		<article class="row -- process">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<div class="row">
					<div class="col-12 offset-2 col-md-6 offset-md-10">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/process/co-design.png" alt="..." class="img-fluid" />
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-12 offset-2 col-md-7 offset-md-0">
				<h3 class="text-orange -- content-step">step 2</h3>
				<h2 class="content-step">Co-Design</h2>
				<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>
				<span class="hidden-sm-down -- content">
					<p><b>What’s your big idea?</b></p>
					<p>Our clients range from established healthcare providers in need of a creative reboot to motivated startups with an eye for innovation—and we strive for long-term collaboration with all of them.
					<br /><br />
					We begin our work together by assessing an organization’s current operations and tech capabilities to find out what works—and what doesn’t. Together we develop an understanding of the client’s operational contexts, their constraints and their aspirations. We create a plan from there, whether it’s adapting an existing platform or creating a custom technology solution.  
					<br /><br />
					By offering decades of experience in the healthcare arena, Firepoint is the spark that startups need. We partner with startups to take their ideas from merely intriguing to truly visionary—and we create the framework for that vision to succeed.</p>
				</span>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<section class="container-fluid">
		<article class="row -- process">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<div class="row">
					<div class="col-12 offset-2 col-md-6 offset-md-10">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/process/co-development.png" alt="..." class="img-fluid" />
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-12 offset-2 col-md-7 offset-md-0">
				<h3 class="text-orange -- content-step">step 3</h3>
				<h2 class="content-step">Co-Development</h2>
				<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>
				<span class="hidden-sm-down -- content">
					<p><b>Let’s break it down.</b></p>
					<p>Firepoint is poised to build your vision.  We break each project down into manageable chunks. We prioritize them, and deliver the pieces incrementally to keep the project moving forward and to allow for early adoption and timely feedback. Oh, and it makes our clients happy, too.</p>
				</span>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<section class="container-fluid">
		<article class="row -- process">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<div class="row">
					<div class="col-12 offset-2 col-md-6 offset-md-10">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/process/co-distribution.png" alt="..." class="img-fluid" />
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-12 offset-2 col-md-7 offset-md-0">
				<h3 class="text-orange -- content-step">step 4</h3>
				<h2 class="content-step">Co-Distribution</h2>
				<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>
				<span class="hidden-sm-down -- content">
					<p><b>Prepare for takeoff.</b></p>
					<p>Collaborating with Firepoint means we see our projects through all stages of implementation and integration—tweaking the product as needed, providing training and go-live support, engaging new subscribers, and tracking key performance indicators. We’re committed until our clients’ goals are fully met—and burn sustainably.</p>
				</span>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<section class="container-fluid -- hidden-sm-down">
		<article class="row">
			<div class="col-8 offset-4">
				<figure>
					<img src="<?php echo $ROOT; ?>/webroot/img/home/process.png" alt="...">
				</figure>
			</div>
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