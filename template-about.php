<?php
/**
* Template Name: O nama
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
							<h1>O Nama</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-5">
							<figure class="alignnone">
								<img src="<?php echo get_template_directory_uri(); ?>/images/samples/img1.jpg" alt="" class="img-circle">
							</figure>
						</div>
						<div class="col-md-6 col-md-offset-1">
							<h2>Ko smo mi?</h2>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin libero at elementum auctor. Sed at velit mi. Nunc rhoncus, diam in tincidunt condimentum, enim massa mollis justo, eu consectetur odio risus eget leo. Proin vel turpis quam. Nulla sollicitudin commodo lectus, vel rutrum lectus suscipit eu. Suspendisse a dui mollis, scelerisque tortor in, tincidunt justo. Donec at hendrerit sem, ac finibus turpis. Sed ut purus ac ipsum commodo tempor. In molestie leo magna, eu tempus diam consectetur vitae. Phasellus congue lorem a ornare tincidunt. Fusce facilisis sagittis ipsum, nec facilisis nisl vulputate ac. Morbi id vehicula ligula, vel congue ante. Mauris nisi quam, dictum quis dictum vitae, luctus sit amet libero. Morbi vitae imperdiet turpis.</p>

							<div class="list">
								<ul>
									<li>test</li>
									<li>test</li>
									<li>test</li>
									<li>test</li>
									<li>test</li>
									<li>test</li>
								</ul>
							</div>

							<div class="spacer-sm"></div>
							
<!-- 							<a href="#" class="btn btn-primary">Learn More</a>
 -->						</div>
					</div>



					<div class="spacer-xl"></div>

					<div class="row">
						<div class="col-md-6">
							<h2>Our Mission</h2>
							<p>Remodeling your home can be stressful. It’s hard to know where to turn in the case of an emergency repair.</p>

							<p>Commercial work needs to be completed professionally and in a timely manner with extra consideration of codes and regulations. We eliminate the need to flip through the yellow pages, we take away the stress and worry, and most importantly we get the job done right.</p>

							<p>We promise to provide you with outstanding service that you can trust for all of your repair needs.</p>

							<a href="#" class="btn btn-primary">Learn More</a>
						</div>
						<div class="col-md-6">
							<h2>Najčešća pitanja?</h2>
							<div class="panel-group panel-group__alt" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-1">
												Quality Service
											</a>
										</h4>
									</div>
									<div id="accordion-1" class="panel-collapse collapse in">
										<div class="panel-body">
											We're here to keep our customers with my low prices and good work (workmanship you can trust) We stand behind my work.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-2" class="collapsed">
												Trusted Professionals
											</a>
										</h4>
									</div>
									<div id="accordion-2" class="panel-collapse collapse">
										<div class="panel-body">
											We're the largest employer of home repair contractors in the world. Our dedication in hiring and retaining the very best home maintenance and repair technicians is why we are able to deliver a 99% customer satisfaction rating.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-3" class="collapsed">
												Experience and Skill
											</a>
										</h4>
									</div>
									<div id="accordion-3" class="panel-collapse collapse">
										<div class="panel-body">
											We've consistently hired experienced, reliable employees whose skills are further refined through technical and customer service training.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-4" class="collapsed">
												Honesty and Integrity
											</a>
										</h4>
									</div>
									<div id="accordion-4" class="panel-collapse collapse">
										<div class="panel-body">
											We are ready to be your long term partner for all of your needs. Contact us to day and see how we can help you!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="xlg">

				</div>
			</section>
			<!-- Page Content / End -->
			
<?php get_footer(); ?>