<?php
/**
* Template Name: Kontakt
*
* @package WordPress
* @subpackage dobar-majstor
* @since dobar-majstor 1.0
*/

get_header(); ?>
<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Kontakt</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">

				<div class="container">

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-location-arrow"></i>
								</div>
								<div class="icon-box-body">
									<h6>Address:</h6>
									Mitrovica test
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="icon-box-body">
									<h6>Phone:</h6>
									028 555 666<br>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="icon-box-body">
									<h6>Working Hours:</h6>
									Monday - Friday 9:00 - 21:00<br>
									Saturday - Sunday 10:00 - 16:00
								</div>
							</div>
						</div>
					</div>

					<div class="spacer-lg"></div>
					
					<div class="row">
						<div class="col-md-12">
							<h3>Kontaktirajte nas</h3>
							<?php echo do_shortcode('[contact-form-7 id="174" title="Kontakt strana"]'); ?>
						</div>
					</div>

				</div>

			</section>
			<!-- Page Content / End -->

<?php get_footer(); ?>