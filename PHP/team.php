<?php
# -------------------------------------------------------------------------------------- #
include_once('config.php'); // Set ROOT vars for PHP includes and "/webroot" reference
# -------------------------------------------------------------------------------------- #
# -------------------------------------------------------------------------------------- #


$SETTINGS = Array();
$SETTINGS['page'] = "team";
$SETTINGS['meta-title'] = "Our Team";
$SETTINGS['meta-description'] = "Our Team";
$SETTINGS['meta-keywords'] = "Our Team";


$Config->load($SETTINGS);


//-- Header (metadata + opening <body>) ----------------------------------
include_once( APP_LEVEL . 'includes/layout/global-meta.php');
include_once( APP_LEVEL . 'includes/layout/global-header.php');


//-- Content -------------------------------------------------------------
?>
<main id="layout-wrapper" class="wrapper"><!-- ' js-reveal-page' -->
	<div class="js-reveal-page"><!-- can't apply the reveal to the wrapper, because it destroys the modal -->
	<!-- INTRO -->
	<section class="container-fluid -- introduction">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<h2>Our Executive Team</h2>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-7">
				<h1 class="header-sans-serif">Our executive team assembles wide-ranging expertise into one powerful organization.</h1>
				<p>Our team of strategists and technologists brings decades of experience in all areas of user-centered design, programming, deployment and training—and we understand the complexities of HIPAA. We have built business intelligence and clinical/EDH analytics engines, public-facing technology platforms and cutting-edge claims-management systems. We are masters in building scalable, HIPAA–compliant software in a fast and lean approach—and we love doing it for the sake of bettering healthcare for everyone.</p>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>


	<!-- PAGE CONTENT -->
	<section class="container-fluid -- page-content">
		<article class="row -- team-article">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-4">
				<div class="row -- profile"><!-- the modal script for this page, will clone the profile-figure.html() and profile-text.html(), and append those clones to related modal containers -->
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Tynan.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Tynan Szvetecz</h3>
						<p class="profile-role">President & Chief Technology Officer</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p class="profile-bio">Tynan is a lifelong technologist, entrepreneur, and trusted advisor. His leadership in healthcare technology has been anchored since 2003 in the enterprise innovation studio he founded, CKD Technology Partners, which builds lean mobile and web-based software in Digital Health. 
							<span class="modal-only">
								Under Tynan’s leadership, CKD Technology Partners won multiple awards and has supported innovative new healthcare platforms for Allscripts, DaVita, the University of Texas Medical Branch, Envision Healthcare, and US Oncology.
								<br /><br />Tynan is also an advisor to national startups looking to interface with larger healthcare systems either as customers or partners. He advises startups through Techstars in LA, Boomtown and Innosphere in Colorado, and serves as a delegate for the Aspen Institute in its efforts to build startup cultures and innovation hubs in developing countries.
								<br /><br />Through it all Tynan aims to bring innovation in quality of care, cost-containment, and quality of life to the clients and partners he works with. He is a passionate believer in teams and culture, and works side by side with his teams to promote prosperity, employee autonomy, creative thinking, risk-taking, and the power of open communication.
							</span></p>
							<p class="read-more"><a href="#modal" class="modal_link"><i class="text-orange -- fas fa-plus"></i> <span>Read the full bio</span></a></p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Rehan.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Rehan Hasan</h3>
						<p class="profile-role">Chief Business Officer</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up -- content-toggle-x"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p class="profile-bio">Rehan is a serial entrepreneur, venture capitalist, and strategic advisor. Rehan has successfully founded and launched multiple companies, including Kenzie Academy, vocational computer science and coding school focusing on the midwest, Galvanize, and its code school component, gSchool, which is one of the country’s largest and most dynamic coworking space and platforms for entrepreneurship and education.
							<span class="modal-only">
								<br />
								<br />As a venture capitalist, Rehan was a Principal with Galvanize Venture Fund, which focuses on early stage technology companies and serves as Founding Advisor to Unreasonable Capital.  In addition, Rehan’s work in innovation spans projects including the Girl Effect Accelerator with the Nike Foundation, co-founder of InCubate, one of the first US-Cuban incubator in Havana, and Go Code Colorado, which is a public/private partnership platform for entrepreneurship around public data and building community across Colorado.  Rehan is also a corporate attorney with an LLM in taxation from New York University.
								<br /><br />Rehan is motivated by creative problem solving and executing bold plans, while ensuring leaders and stakeholders are aligned around implementation priorities, risk tolerance, and legal strategies.
							</span></p>
							<p class="read-more"><a href="#modal" class="modal_link"><i class="text-orange -- fas fa-plus"></i> <span>Read the full bio</span></a></p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Matt.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Matt Szvetecz, MD, MsHQSM, FACP, CPE</h3>
						<p class="profile-role">Chief Medical Officer</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up -- content-toggle-x"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p class="profile-bio">Dr. Szvetecz is an experienced physician leader, with focused expertise in improving organizational care-delivery systems and related technologies. Since 2003, Dr. Szvetecz has been instrumental in multiple successes relative to improving healthcare systems. 
							<span class="modal-only">
								<br />
								 He stabilized and grew an ailing hospitalist service and established heart failure treatment protocols.  He led documentation improvement initiatives, and acted as the clinical lead for enterprise-wide ambulatory EHR implementations.
								<br /><br />
								Dr. Szvetecz has guided teams in creating diabetes and coronary disease pathways and associated health-IT build.  He led a multiyear, industry-leading effort to better manage the use of opioids in patients with chronic pain.  He has also led the development of clinical quality management governance and infrastructures, guided the creation of system-level quality dashboards, and served as the clinical operations lead for governmental value-based initiatives. 
								<br /><br />As Chief Medical Officer for Firepoint and the Firepoint Venture Studio, Dr. Szvetecz is dedicated to finding agile solutions to complex healthcare and business challenges.
							</span></p>
							<p class="read-more"><a href="#modal" class="modal_link"><i class="text-orange -- fas fa-plus"></i> <span>Read the full bio</span></a></p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			
		</article>

		<article class="row -- team-article">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
							<figure class="profile-figure">
								<img src="<?php echo $ROOT; ?>/webroot/img/team/Leah.jpg" alt="..." class="rounded-circle">
							</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Leah Brash</h3>
						<p class="profile-role">Chief Operating Officer</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p class="profile-bio">Colorado native Leah Brash is business leader with over 20 years of experience in healthcare and finance. Serving in a variety of roles—CPA, CFO, CIO (Chief Innovation Officer) —Leah has helped companies of all sizes succeed through strategic financial management, operations optimization, strategic planning, and collaboration.
							<span class="modal-only">
								<br /><br />								
								After leaving the corporate world—as CFO, and then CIO of Medical Group Management Association (MGMA)—Leah went entrepreneurial. First, as a Principal with FireStone CFO, Leah provided outsourced CFO services to startups from general financial oversight to help raising capital with financial modeling. Second, as Chief Development Officer with Prime Health, a startup focused on coalescing the digital health ecosystem in Colorado, where she helped to build the business using the “lean” approach focused on customer discovery and product iteration.
								<br /><br />
								As Chief Operating Officer for Firepoint Studios, Leah maintains her dedication to improving healthcare and driving innovation.
								<br /><br />
							</span></p>
							<p class="read-more"><a href="#modal" class="modal_link"><i class="text-orange -- fas fa-plus"></i> <span>Read the full bio</span></a></p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Jackson.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Jackson Stevens</h3>
						<p class="profile-role">Product & Strategy</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up -- content-toggle-x"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p class="profile-bio">Jackson is a thought leader in the digital health community. As part of the Denver-based enterpriser innovation studio CKD Technology Partners, Jackson regularly consults with digital health entrepreneurs and healthcare professionals. 
								<span class="modal-only">He has lead successful product launches focused in telemedicine, immunotherapy, patient engagement, and more. Jackson has also worked to develop a local strategy around the FHIR standard, working toward accelerating interoperability in Colorado.</span></p>
							<p class="read-more"><a href="#modal" class="modal_link"><i class="text-orange -- fas fa-plus"></i> <span>Read the full bio</span></a></p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>			
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Nick.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Nicholas Angotti</h3>
						<p class="profile-role">Security Director</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up -- content-toggle-x"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p>Nick brings a wealth of large enterprise security and IT systems experience, consulting for and working with numerous multinational organizations as well as local, state, and federal agencies to evaluate, prepare and implement security processes and procedures. Nick’s background includes working as a Qualified Security Assessor (QSA) for many Fortune 50 companies, as well as expertise in information security, Windows and Linux system design and implementation, telecommunications, compliance and governance.  With previous systems engineering, security, and compliance experience for large enterprise healthcare and financial services companies.  Nick is currently a certified HITRUST Assessor.</p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			
		</article>

		<article class="row -- team-article">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
							<figure class="profile-figure">
								<img src="<?php echo $ROOT; ?>/webroot/img/team/Jen.jpg" alt="..." class="rounded-circle">
							</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Jennifer Chang</h3>
						<p class="profile-role">Chief Product Officer</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p>Jen believes that technology can be a powerful tool for social change and patient empowerment. With her experience in the corporate, non-profit, and policy making sectors, she brings an interdisciplinary approach to her work. Trained as a lawyer and a librarian, she has an eye for detail, strong problem solving skills, and a spirit of service. Whereas many people fear change, Jen thrives on it and strives to shepherd her clients through the process of creating something new and impactful.</p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Tannen.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Tannen Helmers</h3>
						<p class="profile-role">User Experience Director</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up -- content-toggle-x"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p>With more than 10 years’ professional experience and a master’s in Human-Computer Interaction (HCI), Tannen is a vibrant and visionary professional known for delivering breakthrough solutions to advance the user experience for customers of diverse enterprises. As UX Director at Firepoint Studios, Tannen leads the design-think strategy of the organization, and has engineered a dynamic process to get critical insights quickly and iterate through low and high fidelity prototypes to bring platforms to life. </p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>			
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
							<figure class="profile-figure">
								<img src="<?php echo $ROOT; ?>/webroot/img/team/Alex-B.jpg" alt="..." class="rounded-circle">
							</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Alex Brinkman</h3>
						<p class="profile-role">VP of Engineering</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p>Alex Brinkman has been working on enterprise ERP and healthcare systems for more than a decade. As a lead engineer at PERA, his architecture supported benefit facilitation across the state of Colorado. He moved on to build custom architectures for the University of Texas Medical Branch. His focus is on team empowerment, bold problem solving, and getting the job done step by step.</p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			
			
		</article>

		<article class="row -- team-article">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-4">
				<div class="row -- profile">
					<div class="col-12 offset-2 col-md-12">
						<figure class="profile-figure">
							<img src="<?php echo $ROOT; ?>/webroot/img/team/Mike-B.jpg" alt="..." class="rounded-circle">
						</figure>
					</div>
					<div class="col-12 offset-2 col-md-16 clear -- profile-text">
						<h3 class="profile-name">Mike Biselli</h3>
						<p class="profile-role">Chairman of the Board</p>
						<!--<span class="hidden-md-up -- content-toggle"><i class="text-orange h3 -- fas fa-plus"></i></span>-->
						<span class="hidden-md-up -- content-toggle-x"><a href="#modal" class="modal_link"><i class="text-orange h3 -- fas fa-plus"></i></span></a><!-- removed the content toggle -->
						<span class="hidden-sm-down -- content">
							<p class="profile-bio">In partnership with governmental, academic, non-profit, and commercial organizations, Mike Biselli and his team have created Catalyst HTI, a 180,000 square foot, first-of-its-kind industry integrator, in Denver’s River North District (RiNo) that houses 50+ health-tech startups and Fortune 20s alike in the race to fix American healthcare. 
							<span class="modal-only">
								<br /><br />
								While a Board Member of Prime Health and a Senior Advisor to 10.10.10, Mike Biselli witnessed firsthand the tremendous power that a determined community of clinicians, executives, technologists, entrepreneurs, academics and investors could wield, and realized just how much more could be accomplished if that power were harnessed. 
								<br /><br />
								Realizing just how much more could be accomplished if that power were harnessed, Mike developed the industry integrator concept, a completely new feature of the innovation economy that allows the healthcare industry to be integrated at the point of innovation by physically housing an entire healthcare innovation ecosystem in a single location. 
								<br /><br />
								In addition to his realized vision for Catalyst HTI, Mike is also the Chairman of the Board at Firepoint Studios, where him and his team work to partner with healthcare organizations to identify and engineer innovative processes and solutions to some of the industry’s toughest problems. 
							
							
								<br /><br />"We're not going to re-imagine healthcare just through the largest and most powerful organizations that have dominated the space for the past fifty years. And it won’t happen with startups alone. We have to do it together. Because if we don’t, we are trending towards a five trillion dollar problem that can bring our country to its knees.
								<br /><br />If you are passionate about reimagining healthcare, you have a seat at our table."
								<br />– Mike Biselli, TEDx RiNo
							</span></p>
							<p class="read-more"><a href="#modal" class="modal_link"><i class="text-orange -- fas fa-plus"></i> <span>Read the full bio</span></a></p>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>			
		</article>
	</section>

	<section class="container-fluid -- introduction">
		<article class="row">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-6 -- text-md-right">
				<h2>Our Technology Team</h2>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--spacer--></div>
			<div class="col-md-7">
				<h1 class="header-sans-serif">Our technology team is second to none, and brings with it a lean battery of cross-functional health technology experience.</h1>
				<p></p>
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</article>
	</section>
	
	<section class="container-fluid -- introduction">
		<figure class="row -- hidden-sm-down">
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
			<div class="col-md-14">
				
			</div>
			<div class="col-md-1 hidden-sm-down">&nbsp;<!--gutter--></div>
		</figure>
	</section>	
	
	</div>
	
	<!-- MODAL -->
	<div id="modal" class="animated-modal">
		<div class="container -- wrapper">
			<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
			<div class="animated-modal-close close-modal"> 
				<p class="text-orange -- cursor"><i class="fas fa-times"></i></p>
			</div>
			<div class="clearfix"></div>
			<!-- MOAL CONTENT -->
			<div class="animated-modal-content -- row">
				<div class="col-12 offset-2 col-sm-4 offset-sm-2">
					<figure class="profile-figure">
						
					</figure>
				</div>
				<div class="col-12 offset-2 col-sm-8 offset-sm-1 -- profile-text">
					
				</div>
			</div>
		</div>
	</div>
</main>
<!-- / #layout-wrapper -->
<?php


//-- Footer --------------------------------------------------------------
include_once( APP_LEVEL . 'includes/layout/global-footer.php');

?>
</body>
</html>