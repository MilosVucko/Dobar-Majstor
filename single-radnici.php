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
							<h1>Profil radnika: <?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="content col-md-8">

							<div class="box mb-30">
								<div class="job-profile-info">
									<div class="row">
										<div class="col-md-5">
											<figure class="alignnone">
												<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
												<img src="<?php echo $featured_img_url; ?>" alt="">
											</figure>
										</div>
										<?php 
										$kategorije_poslova = wp_get_post_terms($post->ID, 'kategorija-poslova'); 
										//$kategorija_posla = $kategorije_poslova[0]->name;
										
										?>
										<div class="col-md-7">
											<h2 class="name"><?php the_title(); ?></h2>
<!-- 											<i class="tagline">Please write a few words about your service</i>
 -->											<ul class="meta">
 												<?php foreach ($kategorije_poslova as $kategorija) { ?>
   												<li><?php echo $kategorija->name; ?></li>
   											<?php } ?>
											</ul>
											<?php 
											$lokacije = wp_get_post_terms($post->ID, 'lokacija'); 
											//$lokacija_posla = $lokacija[0]->name;
											?>
											<ul class="info">
												<?php foreach ($lokacije as $lokacija) { ?>
												<li><i class="fa fa-location-arrow"></i><?php echo $lokacija->name; ?></li>
											<?php } ?>
												<li><i class="fa fa-clock-o"></i> <?php the_field('radni_dani'); ?></li>
											</ul>
										</div>
									</div>

									<div class="spacer-lg"></div>
									
									<h4>Opis</h4>
									<p><?php the_content(); ?></p>
									
									
								</div>
							</div>

							<!-- Additional Info Tabs -->
							<div class="tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab1-1" data-toggle="tab">Ocene i komentari</a></li>
									<li><a href="#tab1-2" data-toggle="tab">Detaljnije</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1-1">
										<!-- Comments -->
										<div class="comments-wrapper">
											<h3>Ocene i komentari (<?php echo get_comments_number(); ?>)</h3>
				<?php 
				if ( comments_open() || get_comments_number() ) :
				comments_template();
							//	echo kk_star_ratings();

			endif;
				?>
										</div>
										<!-- Comments / End -->


									</div>
									<div class="tab-pane fade" id="tab1-2">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<h4>Veštine</h4>
												<?php 
												$vestine = wp_get_post_terms($post->ID, 'vestine'); 

												?>
												<div class="list list__arrow2">
													<ul>
														<?php foreach ($vestine as $vestina) { ?>
														<li><?php echo $vestina->name; ?></li> 
													<?php } ?>
														
													</ul>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<h4>Iskustvo</h4>
												<div class="list list__arrow2">
													<?php 
													$iskustva = wp_get_post_terms($post->ID, 'iskustva'); 
													?>
													<ul>
														<?php foreach ($iskustva as $iskustvo) { ?>
														<li><?php echo $iskustvo->name; ?> test</li> 
													<?php } ?>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Additional Info Tabs / End -->

						</div>

						<!-- Sidebar -->
						<aside class="sidebar col-md-4">
							<hr class="visible-sm visible-xs lg">
							

							<div class="box box__color-darken mb-30">
								<h4>Radno vreme</h4>
								<div class="table-responsive">
									<table class="table table-striped business-hours">
										<tbody>
											<tr>
												<td><i class="fa fa-clock-o"></i> Ponedeljak</td>
												<td><?php the_field('ponedeljak'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Utorak</td>
												<td><?php the_field('utorak'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Sreda</td>
												<td><?php the_field('sreda'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Četvrtak</td>
												<td><?php the_field('cetvrtak'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Petak</td>
												<td><?php the_field('petak'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Subota</td>
												<td><?php the_field('subota'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Nedelja</td>
												<td><?php the_field('nedelja'); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table (Bordered) / End -->

								<h4>Kontakt informacije</h4>
								<div class="table-responsive">
									<table class="table table-striped business-hours">
										<tbody>
											<tr>
												<td><i class="fa fa-clock-o"></i> Broj telefona</td>
												<td><?php the_field('broj_telefona'); ?></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Email</td>
												<td><?php the_field('email_adresa'); ?></td>
											</tr>
											
										</tbody>
									</table>
								</div>


							</div>

							
						</aside>
						<!-- Sidebar / End -->

					</div>
				</div>
			</section>
			<!-- Page Content / End -->
<?php endwhile; ?>
<?php get_footer(); ?>