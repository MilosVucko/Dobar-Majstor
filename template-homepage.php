<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage dobar-majstor
* @since dobar-majstor 1.0
*/

get_header(); ?>

	<!-- Main -->
		<div class="main" role="main">

			<!-- Slider -->
			<section class="slider-holder">
				<div class="flexslider carousel">
					<ul class="slides">
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/samples/slide1.jpg" alt="" />
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/samples/slide2.jpg" alt="" />
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/samples/slide3.jpg" alt="" />
						</li>
					</ul>

					<div class="search-box">
						<div class="container">
							<div class="search-box-inner">
								<h1>Pronađi pouzdane lokalne stručnjake</h1>
								<form action="<?php echo esc_url( get_page_link( 33 ) ); ?>" class="job_filters" method="get">

									<div class="row">
										<div class="col-md-5">
											<div class="select-style">
											<div class="form-group">
													<select class="form-control" name='lokacija'>
										<?php 
										$terms = get_terms( array( 
											'taxonomy' => 'lokacija',
											'hide_empty' => false
										) );

										foreach( $terms as $term ) { ?>
											<option class="option" value="<?php echo $term->name; ?>"><?php echo $term->name; ?> </option>
									<?php 	}; ?>
									</select>
											</div>
										</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<div class="select-style">
													<select class="form-control" name='kategorija-poslova'>
										<?php 
										$terms = get_terms( array( 
											'taxonomy' => 'kategorija-poslova',
											'hide_empty' => false
										) );

										foreach( $terms as $term ) {
											echo "<option  class='option' value='" . $term->name . "'>" . $term->name . "</option>";
										};
										?>
									</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Slider / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<!-- Listings -->
					<div class="title-bordered">
						<h2>Novi majstori</h2>
					</div>
					<div class="job_listings">
						<ul class="job_listings">
							<?php 
						$args=array( 'post_type'=> 'radnici',
							'posts_per_page' => 3,  
						); 
						$the_query = new WP_Query($args); ?>
						<?php 
						if ($the_query->have_posts()): 
							while ($the_query->have_posts()):
								$the_query->the_post();
			// $thumb = get_the_post_thumbnail_url($post->ID, 'fontpage-loop-size'); 
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
								$kategorije_poslova = wp_get_post_terms($post->ID, 'kategorija-poslova'); 
								$lokacija = wp_get_post_terms($post->ID, 'lokacija'); 
			 //var_dump($terms);
								// $kategorija_posla = $kategorije_poslova[0]->name;
								$lokacija_posla = $lokacija[1]->name;
								?>


							<li class="job_listing">
									<a href="<?php the_permalink(); ?>">
										<div class="job_img">
											<img src="<?php echo $featured_img_url; ?>" alt="" class="company_logo">
										</div>
										<div class="position">
											<h3><?php the_title(); ?></h3>
											<div class="company">
											<?php foreach ($kategorije_poslova as $kategorija) { ?>
												<strong>
													<?php echo $kategorija->name; ?>,
												</strong>
												   	<?php } ?>

											</div>
										</div>
										<div class="location">
											<i class="fa fa-location-arrow"></i> <?php echo $lokacija_posla; ?>
										</div>
										<div class="rating">
											<div class="reviews-num"><?php 	echo do_shortcode('[wpdrating]'); ?></div>
										</div>
										<ul class="meta">
											<?php 
											$i = 0;
											foreach ($kategorije_poslova as $kategorija) { ?>

												<li class="job-type broj-<?php echo $i; ?>"><?php echo $kategorija->name; ?></li>
												   	<?php 
												   	$i++;
												   } ?>
											
											<li class="date">
												Dodat <?php echo get_the_date(); ?>
											</li>
										</ul>
									</a>
								</li>
						<?php endwhile; 
					endif; ?>
						
									</ul>
								</a>
							</li>
						
									</ul>
								</a>
							</li>
						</ul>
					</div>

					<div class="spacer"></div>

					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<a class="btn btn-default btn-block" href="<?php echo get_page_uri(33);?>">Prikaži više</a>
						</div>
					</div>

					<!-- Listings / End -->

					<div class="spacer-xxl"></div>



					<!-- Services -->
					<div class="title-bordered">
						<h2>Pronađi majstora <small></small></h2>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-bug"></i>
								</div>
								<div class="icon-box-body">
									<h5>Monter klima uređaja</h5>
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-cog"></i>
								</div>
								<div class="icon-box-body">
									<h5>Električar</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-recycle"></i>
								</div>
								<div class="icon-box-body">
									<h5>Vodoinstalater</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-suitcase"></i>
								</div>
								<div class="icon-box-body">
									<h5>Moler</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-lightbulb-o"></i>
								</div>
								<div class="icon-box-body">
									<h5>Domar</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-cube"></i>
								</div>
								<div class="icon-box-body">
									<h5>Automehaničar</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-tree"></i>
								</div>
								<div class="icon-box-body">
									<h5>Keramičar</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="icon-box-body">
									<h5>Fizički radnik</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="entypo tools"></i>
								</div>
								<div class="icon-box-body">
									<h5>Čistač/Čistačica</h5>
																		<p>Lorem ipsum dolor sit amet.</p>

								</div>
							</div>
						</div>
					</div>
					<!-- Services / End -->


					<div class="spacer"></div>

					<!-- Testimonials -->
					<div class="title-bordered">
						<h2>Iskustva korisnika<small>šta klijenti stvarno kažu</small></h2>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="testimonial">
								<blockquote>
									<p>If you're faced with home improvement or repair tasks, and don't have the time, I would give Handyman my highest recommendation.</p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/user1-sm.jpg" alt="">
									</figure>
									<h6>Michael Smith</h6>
									<span class="bq-author-info">Copywriter</span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="testimonial">
								<blockquote>
									<p>They worked hard and offered to help me set up my furniture once it was in my new home.</p>
									<p>Very pleased!</p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/user3-sm.jpg" alt="">
									</figure>
									<h6>Bradley Cooper</h6>
									<span class="bq-author-info">Teacher</span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="testimonial">
								<blockquote>
									<p>The movers were friendly, helpful, polite, professional and efficient. They did a great job! I would highly recommend them! Thank you!</p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/user2-sm.jpg" alt="">
									</figure>
									<h6>Hanna Pinkman</h6>
									<span class="bq-author-info">Radiologist</span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="testimonial">
								<blockquote>
									<p>I am very happy with their work. they did a great job. They were very helpful with other aspects of the work i had in mind. They were very clean, and very quick.</p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/user4-sm.jpg" alt="">
									</figure>
									<h6>Erick Fox</h6>
									<span class="bq-author-info">Botanist</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Testimonials / End -->

				</div>
			</section>
			<!-- Page Content / End -->

<?php get_footer(); ?>