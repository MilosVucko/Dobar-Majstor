<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dobar_Majstor
 */

?>


			<!-- Footer -->
			<footer class="footer" id="footer">
				<div class="footer-widgets">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Contacts Info -->
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Kontakt</h3>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-map-marker"></i>
												<div class="info-item">
													Lorem ipsum dolor sit amet
												</div>
											</li>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													028000000<br>
												</div>
											</li>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:info@dan-fisher.com">support@tvojmajstor.com</a>
												</span>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												<div class="info-item">
													Monday - Friday 9:00 - 21:00
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Contacts Info -->
							</div>
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Latest Posts -->
								<div class="latest-posts-widget widget widget__footer">
									<h3 class="widget-title">Najnovije dodati poslovi</h3>
									<div class="widget-content">
										<ul class="latest-posts-list">
											<?php 
						$args=array( 'post_type'=> 'poslovi',
							'posts_per_page' => 3 ); 
						$footer_query = new WP_Query($args); ?>
						<?php 
						if ($footer_query->have_posts()): 
							while ($footer_query->have_posts()):
								$footer_query->the_post();
			// $thumb = get_the_post_thumbnail_url($post->ID, 'fontpage-loop-size'); 
								// $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
								// $kategorije_poslova = wp_get_post_terms($post->ID, 'kategorija-poslova'); 
								// $lokacija = wp_get_post_terms($post->ID, 'lokacijaposlovi'); 
			 //var_dump($terms);
								// $kategorija_posla = $kategorije_poslova[0]->name;
								 // $lokacija_posla = $lokacija[1]->name;
								?>

								<li>
												<figure class="thumbnail"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/worker-1.png" alt=""></a></figure>
												<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
												<span class="date"><?php echo get_the_date(); ?></span>
											</li>

							<?php endwhile; endif; wp_reset_postdata(); ?>

										</ul>
									</div>
								</div>
								<!-- /Widget :: Latest Posts -->
							</div>

							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Contacts Info -->
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Viber QR kod</h3>
									<div class="widget-content">
										<img src="<?php echo get_template_directory_uri();?>/images/viber-bot-qr-code.png" />
									</div>
								</div>
								<!-- /Widget :: Contacts Info -->
							</div>

							<div class="clearfix visible-sm"></div>

						
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								Copyright &copy; 2020  <a href="<?php echo get_home_url(); ?>">TvojMajstor</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer / End -->
			
		</div>
		<!-- Main / End -->
	</div>
	
	
	
	
	
	<!-- Javascript Files
	================================================== -->
 	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-1.11.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.flexnav.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.hoverIntent.minified.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.flickrfeed.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.fitvids.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.appear.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.stellar.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.countTo.js"></script>



 	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>  

	<script>
		jQuery(function($){
			$('body').addClass('loading');
		});
		
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "fade",
				controlNav: true,
				directionNav: false,
				prevText: "",
				nextText: "",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
		});
	</script>

<?php wp_footer(); ?>	
</body>
</html>
