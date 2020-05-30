<?php
/**
* Template Name: Lista poslova
*
* @package WordPress
* @subpackage dobar-majstor
* @since dobar-majstor 1.0
*/


if (isset($_GET['lokacijaposlovi']))
{
	$lokacijaposlovi = $_GET['lokacijaposlovi'];
}
else {
	$lokacijaposlovi = "Sve lokacije";
}

if (isset($_GET['kategorija-poslova']))
{
	$kategorija = $_GET['kategorija-poslova'];
}
else { 
	$kategorija = "Sve kategorije";
}

//var_dump($lokacija);
//var_dump($kategorija);



get_header(); ?>
<!-- Main -->
<div class="main" role="main">

	<!-- Page Heading -->
	<section class="page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Lista dostupnih poslova</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Heading / End -->

	<!-- Page Content -->
	<section class="page-content">
		<div class="container">

			<div class="job_listings">
				<form action="<?php echo esc_url( get_page_link( 116 ) ); ?>" class="job_filters" method="get">

					<div class="search_jobs">
								<!-- <div class="search_keywords">
									<label for="search_keywords">Ključna reč</label>
									<input type="text" name="search_keywords" id="search_keywords" placeholder="All Professionals" class="form-control" value="" />
								</div>
							-->
							<div class="search_type">
								<label>Lokacija</label>
								<span class="select-style">
									<select class="form-control" name='lokacijaposlovi'>
										<?php 
										$terms = get_terms( array( 
											'taxonomy' => 'lokacijaposlovi',
											'hide_empty' => false
										) );

										foreach( $terms as $term ) { ?>
											<option class="option" value="<?php echo $term->name; ?>" <?php if ( $lokacijaposlovi == $term->name) { echo 'selected'; } ?>>
												<?php echo $term->name; ?> 
											</option>
										<?php }; ?>
									</select>
								</span>
							</div>

							<div class="search_type">
								<label>Kategorija</label>
								<span class="select-style">
									<select class="form-control" name='kategorija-poslova'>
										<?php 
										$terms = get_terms( array( 
											'taxonomy' => 'kategorija-poslova',
											'hide_empty' => false
										) );

										foreach( $terms as $term ) { ?>
											<option class="option" value="<?php echo $term->name; ?>" <?php if ( $kategorija == $term->name) { echo 'selected'; } ?>><?php echo $term->name; ?> </option>
										<?php }; ?>
									</select>
								</span>
							</div>

							<div class="search_submit">
								<label>Submit</label>
								<button class="btn btn-block btn-primary"><i class="fa fa-search"></i> Pretraži</button>
							</div>
						</div>
					</form>

					<ul class="job_listings">
						
						<?php 
						$paged=( get_query_var( 'paged')) ? get_query_var( 'paged') : 1; 
						$args=array( 'post_type'=> 'poslovi',
							'paged' => $paged,
							'posts_per_page' => 10,  
							'tax_query' => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'lokacijaposlovi',
									'field' => 'slug',
									'terms' => $lokacijaposlovi,
								),
								array(
									'taxonomy' => 'kategorija-poslova',
									'field' => 'slug',
									'terms' => $kategorija,
								),
							)
						); 
						$the_query = new WP_Query($args); ?>
						<?php 
						if ($the_query->have_posts()): 
							while ($the_query->have_posts()):
								$the_query->the_post();
			// $thumb = get_the_post_thumbnail_url($post->ID, 'fontpage-loop-size'); 
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
								$kategorije_poslova = wp_get_post_terms($post->ID, 'kategorija-poslova'); 
								$lokacija = wp_get_post_terms($post->ID, 'lokacijaposlovi'); 
			 //var_dump($terms);
								// $kategorija_posla = $kategorije_poslova[0]->name;
								 $lokacija_posla = $lokacija[1]->name;
								?>



								<li class="job_listing">
									<a href="<?php the_permalink(); ?>">
										<div class="job_img">
											<img src="<?php echo get_template_directory_uri(); ?>/images/hammer.png" alt="" class="company_logo">
										</div>
										<div class="position">
											<h3><?php the_title(); ?></h3>
											<!-- <div class="company">
												test
												<?php foreach ($kategorije_poslova as $kategorija) { ?>
													<strong>
														<?php echo $kategorija->name; ?>,
													</strong>
												<?php } ?>

											</div> -->
										</div>
										<div class="location">
											<i class="fa fa-location-arrow"></i> <?php echo $lokacija_posla; ?>
										</div>
										<div class="rating">
											<div class="reviews-num"><?php 	//echo kk_star_ratings(); ?></div>
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

							<?php endwhile; ?>

							<?php $total_pages=$the_query->max_num_pages; if ($total_pages > 1) 
							{   $current_page = max(1, get_query_var('paged')); 
							$paginateLinks = paginate_links(
								array( 'base' => get_pagenum_link(1) . '%_%', 
									'format' => '/page/%#%', 'current' => $current_page, 
									'total' => $total_pages, 
									'prev_text' => __('') , 
									'next_text' => __('') , 
								)
							); 
						} ?>

					<?php endif; 
					wp_reset_postdata();
					?>
				</ul>
			</div>

			<div class="spacer"></div>



		</div>
	</section>
	<!-- Page Content / End -->


	<?php get_footer(); ?>