<?php get_header(); ?>

<?php while( have_posts() ) : 
	the_post();?>
<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="content col-md-12">

							<div class="box mb-30">
								<div class="job-profile-info">
									<div class="row">
										<div class="col-md-12">
											<h2 class="name"><?php the_title(); ?></h2>						
											<?php 
											$lokacije = wp_get_post_terms($post->ID, 'lokacijaposlovi'); 
											$lokacija_posla = $lokacije[0]->name;
											?>
											<ul class="info">
												<li><i class="fa fa-location-arrow"></i><?php echo $lokacija_posla; ?></li>
<!-- 												<li><i class="fa fa-clock-o"></i> <?php the_field('radni_dani'); ?></li>
 -->											</ul>
										</div>
									</div>

									<div class="spacer-lg"></div>
									
									<h4>Opis</h4>
									<p><?php the_content(); ?></p>
									
									<h4>Kontakt</h4>
									<p>Broj telefona: <?php the_field('broj_telefona'); ?></p>
									<p>Email adresa: <?php the_field('email_adresa'); ?></p>

									
								</div>
							</div>



						</div>

						
					</div>
				</div>
			</section>
			<!-- Page Content / End -->
<?php endwhile; ?>
<?php get_footer(); ?>