<?php
# -------------------------------------------------------------------------------------- #
include_once('config.php'); // Set ROOT vars for PHP includes and "/webroot" reference
# -------------------------------------------------------------------------------------- #
# -------------------------------------------------------------------------------------- #


$SETTINGS = Array();
$SETTINGS['page'] = "welcome";
$SETTINGS['meta-title'] = "Studios | Igniting Sustainable Technology in Healthcare";
$SETTINGS['meta-description'] = "Firepoint provides a complete innovation pathway to realizing new ideas in healthcare. Our process serves our clients through the entire product cycle, from initial needs assessment through to full implementation, sustenance of gains, and subsequent iterative enhancements.";
$SETTINGS['meta-keywords'] = null;


$Config->load($SETTINGS);


//-- Header (metadata + opening <body>) ----------------------------------
include_once( APP_LEVEL . 'includes/layout/global-meta.php');
include_once( APP_LEVEL . 'includes/layout/global-header.php');


//-- Content -------------------------------------------------------------
?>
<main id="layout-wrapper" class="wrapper">
	<!-- IDEAS & SOLUTIONS INTRODUCTION -->
	<section class="container-fluid -- intro-section">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right | js-reveal-intro">
				<img src="<?php echo $ROOT; ?>/webroot/img/dot.png" class="hidden-sm-down -- firepoint" />
				<h2>Ideas & solutions<br class="hidden-sm-down" /> for next-level<br class="hidden-sm-down" /> healthcare</h2>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-7 | js-reveal-right">
				<p>Technology is rapidly transforming today’s healthcare industry. Platform consolidation. EHR analytics. Provider-patient interface. Regulatory compliance. The list seems to grow daily. Healthcare companies work hard to serve their patients first, while striving to keep pace with industry advances. And when they’re ready to explore a better approach, companies can struggle to move forward while managing the disruption. That’s where we come in.</p>
				<p>At Firepoint, we help our clients create and deliver their best healthcare solutions—efficiently, cost-effectively, and in compliance with HIPAA regulations. We are a small, approachable team of sensemakers, strategists, designers, and programmers, eager to work with clients at any stage of idea generation. So whether that means adjusting an existing platform or exploring the unfathomable, we are devoted to making your system work—or developing one that does.</p>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<!-- OUR TEAM -->
	<section class="container-fluid -- team-section">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 | js-reveal" id="home-team">
				<!-- spacer -->
				<span class="h2 hidden-sm-down">&nbsp;</span>
				<!-- [clone] same as below -->
				<h2 class="hidden-md-up">Our Leadership Team</h2>
				<div class="row -- team">
					<div class="col-4">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Tynan.jpg" alt="" class="rounded-circle">
						</figure>
					</div>
					<div class="col-4">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Rehan.jpg" alt="" class="rounded-circle">
						</figure>
					</div>
					<div class="col-4">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Mike-B.jpg" alt="" class="rounded-circle">
						</figure>
					</div>
					
				</div>
				<div class="row -- team">
					<div class="col-4">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Matt.jpg" alt="" class="rounded-circle">
						</figure>
					</div>
					<div class="col-4">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Leah.jpg" alt="" class="rounded-circle">
						</figure>
					</div>
					<div class="col-4">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Jackson.jpg" alt="" class="rounded-circle">
						</figure>
					</div>
					
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-7 | js-reveal-right">
				<!-- [clone] same as above -->
				<h2 class="hidden-sm-down">Our Executive Team</h2>
				<p>Our team of strategists and technologists brings decades of experience in all areas of user-centered design, programming, deployment and training—and we understand the complexities of HIPAA. We have built business intelligence and clinical/EDH analytics engines, public-facing technology platforms and cutting-edge claims-management systems. We are masters in building scalable, HIPAA–compliant software in a fast and lean approach—and we love doing it for the sake of bettering healthcare for everyone. We’re proud to be a small team that gets the job done.</p>
				<a class="section-link" href="team">view our executive team <i class="fas fa-angle-double-right"></i></a>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<!-- THREE PILLAR PROCESS -->
	<!-- Similar layout to the Introduction above -->
	<section class="container-fluid -- process-section">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right | js-reveal">
				<h2>Our 4 Step Process</h2>
				<!-- [clone] same as below -->
				<div class="hidden-sm-down">
					<p>We believe in real partnerships with our clients, and aim to work collaboratively during all phases of a project.</p>
					<a class="section-link" href="process">view our process <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-7 | js-reveal-right">
				<div class="row">
					<div class="col-sm-12">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/home/process.png" alt="">
						</figure>
					</div>
				</div>
				<!-- [clone] same as above -->
				<div class="hidden-md-up">
					<p>We believe in real partnerships with our clients, and aim to work collaboratively during all phases of a project.</p>
					<a class="section-link" href="process">view our process <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
			<div class="col-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<!-- OUR SERVICES -->
	<section class="container-fluid -- services-section">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right | js-reveal">
				<span class="h2 hidden-sm-down">&nbsp;</span>
				<h2 class="hidden-md-up">Our Services</h2>
				<div class="row">
					<div class="col">
						<figure>
							<img src="<?php echo $ROOT; ?>/webroot/img/home/services.png" alt="">
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-7 | js-reveal-right">
				<h2 class="hidden-sm-down">Our Services</h2>
				<p>We’re a lean team bent on innovation and authenticity. We’re into Design Thinking for creative problem solving and Agile Methodologies to keep our projects moving smoothly.</p>
				<a class="section-link" href="services">view our services <i class="fas fa-angle-double-right"></i></a>
			</div>
			<div class="col-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>
</main>
<?php


//-- Footer --------------------------------------------------------------
include_once( APP_LEVEL . 'includes/layout/global-footer.php');

?>
</body>
</html>