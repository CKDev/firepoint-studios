<?php
# -------------------------------------------------------------------------------------- #
include_once('config.php'); // Set ROOT vars for PHP includes and "/webroot" reference
# -------------------------------------------------------------------------------------- #
# -------------------------------------------------------------------------------------- #


$SETTINGS = Array();
$SETTINGS['page'] = "services";
$SETTINGS['meta-title'] = "Our Services";
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
				<h2>Our Services</h2>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-7">
				<h1 class="header-sans-serif">We’re a lean team bent on innovation and authenticity. We’re into Design Thinking for creative problem solving and Agile Methodologies to keep our projects moving smoothly.  We are proud to offer solutions in the following areas:</h1>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>

	<!-- PAGE CONTENT -->
	<section class="container-fluid -- page-content">
		<div class="row -- services">
			<div class="col-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/clinical-workflow.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Clinical Workflow and Process Improvement</h3>
						<p>When it comes to workflow design, we strive to understand your entire team’s experience so that we can maximize operational efficiency and reliability.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/financial-operations.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Financial Operations and Returns-on-Investment</h3>
						<p>Our teams create expert ramp-up and operational modeling for data-driven decision-making.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/networking.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Networking, Hardware and Cloud-based Infrastructures</h3>
						<p>We identify and engage optimal communication and data-storage solutions for every context.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/data-integration.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Data Integration and Analysis</h3>
						<p>We streamline inter-application data flows, and build the tools to monitor and manage system performance.</p>
					</div>
				</div>
			</article>
			

			<div class="col-1">&nbsp;<!--gutter--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/systems-interoperability.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>EHR and Systems Interoperability</h3>
						<p>We are API experts committed to enabling seamless data exchange between disparate systems and software.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/human-engineering.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Human Engineering</h3>
						<p>We are relentlessly focused on end-user experience, which ensures seamless interface between people and technology.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/software-development.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Web and Mobile Software Development</h3>
						<p>Through focused sprint cycles, we build working products rapidly and cost-efficiently, adding comprehensive features as we go.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/product-development.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Product Development</h3>
						<p>Our lean approach to product development intelligently prioritizes product features to meet funding and pilot timelines.</p>
					</div>
				</div>
			</article>


			<div class="col-1">&nbsp;<!--gutter--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/business-development.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Business Development</h3>
						<p>We’ve devoted decades to the healthcare industry, which enables us to spotlight prime market opportunities and create the strategies necessary to advance innovations across the entire healthcare industry.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/regulatory-compliance.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Legal and Regulatory Compliance</h3>
						<p>We understand the guardrails surrounding privacy, disabilities, and related regulations, and ensure all efforts are aligned with users’ interests and needs.</p>
					</div>
				</div>
			</article>
			<div class="col-1">&nbsp;<!--spacer--></div>
			<article class="col-12 offset-2 offset-sm-0 col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-12">
						<figure class="col-8 col-sm-16">
							<img src="<?php echo $ROOT; ?>/webroot/img/services/cybersecurity-risk-management.png" alt="..." class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-16 clear">
						<h3>Cybersecurity Risk Management</h3>
						<p>Our technological innovations are all developed using the highest security standards, and we partner with industry leaders to insure against and mitigate related risks.</p>
					</div>
				</div>
			</article>
		</div>
	</section>
</main>
<!-- / #layout-wrapper -->
<?php


//-- Footer --------------------------------------------------------------
include_once( APP_LEVEL . 'includes/layout/global-footer.php');

?>
</body>
</html>