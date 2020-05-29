<?php
/**
* Template Name: Lista Radnika
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
							<h1>Lista stručnjaka</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="job_listings">
						<form class="job_filters">

							<div class="search_jobs">
								<div class="search_keywords">
									<label for="search_keywords">Ključna reč</label>
									<input type="text" name="search_keywords" id="search_keywords" placeholder="All Professionals" class="form-control" value="" />
								</div>

								<div class="search_location">
									<label for="search_location">Lokacija</label>
									<input type="text" name="search_location" id="search_location" placeholder="Any Location" class="form-control" value="" />
								</div>

								<div class="search_type">
									<label>Kategorija</label>
									<span class="select-style">
										<select class="form-control">
											<option>Sve usluge</option>
											<option>Monter klima uređaja</option>
											<option>Električar</option>
											<option>Vodoinstalater</option>
											<option>Moler</option>
											<option>Domar</option>
											<option>Automehaničar</option>
											<option>Fizički radnik</option>
											<option>Higijenski radnik</option>
										</select>
									</span>
								</div>

								<div class="search_submit">
									<label>Submit</label>
									<button class="btn btn-block btn-primary"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>

						<ul class="job_listings">
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person1.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Debbie Bidart</h3>
										<div class="company">
											<strong>Paint Removal from Exterior or Interior Surfaces</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> Melbourne, AU
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
										<div class="reviews-num">12 Reviews</div>
									</div>
									<ul class="meta">
										<li class="job-type">Painting</li>
										<li class="date">
											Posted 1 month ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person2.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Construction Inc.</h3>
										<div class="company">
											<strong>Strives to meet the consumers needs.</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> New York, US
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<ul class="meta">
										<li class="job-type">Bathroom Design</li>
										<li class="date">
											Posted 2 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing job_position_featured">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person3.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>C &amp; G Plastering</h3>
										<div class="company">
											<strong>Quality Jobs You Can Afford</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> London, UK
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="reviews-num">5 Reviews</div>
									</div>
									<ul class="meta">
										<li class="job-type">Plaster &amp; Drywall</li>
										<li class="date">
											Posted 2 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person4.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>White &amp; Sons</h3>
										<div class="company">
											<strong>Apply Concrete Floor Coating</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> Melbourne, AU
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="reviews-num">4 Reviews</div>
									</div>
									<ul class="meta">
										<li class="job-type">Painting</li>
										<li class="date">
											Posted 3 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person5.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Tim's Plastering</h3>
										<div class="company">
											<strong>We pride ourselves in excellent workmanship.</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> Houston, TX
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="reviews-num">1 Review</div>
									</div>
									<ul class="meta">
										<li class="job-type">Plaster &amp; Drywall</li>
										<li class="date">
											Posted 2 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person6.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Crystal Glass Ltd</h3>
										<div class="company">
											<strong>Bring the best customer service</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> New York, US
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<ul class="meta">
										<li class="job-type">Furniture Repair &amp; Refinish</li>
										<li class="date">
											Posted 3 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person1.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Tim Green Upholstery</h3>
										<div class="company">
											<strong>Quality Jobs You Can Afford</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> New York, US
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="reviews-num">6 Reviews</div>
									</div>
									<ul class="meta">
										<li class="job-type">Furniture Repair &amp; Refinish</li>
										<li class="date">
											Posted 4 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing job_position_featured">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person3.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>C &amp; G Plastering</h3>
										<div class="company">
											<strong>Quality Jobs You Can Afford</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> London, UK
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="reviews-num">5 Reviews</div>
									</div>
									<ul class="meta">
										<li class="job-type">Plaster &amp; Drywall</li>
										<li class="date">
											Posted 2 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person4.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>White &amp; Sons</h3>
										<div class="company">
											<strong>Apply Concrete Floor Coating</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> Melbourne, AU
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="reviews-num">4 Reviews</div>
									</div>
									<ul class="meta">
										<li class="job-type">Painting</li>
										<li class="date">
											Posted 3 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person5.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Tim's Plastering</h3>
										<div class="company">
											<strong>We pride ourselves in excellent workmanship.</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> Houston, TX
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="reviews-num">1 Review</div>
									</div>
									<ul class="meta">
										<li class="job-type">Plaster &amp; Drywall</li>
										<li class="date">
											Posted 2 months ago
										</li>
									</ul>
								</a>
							</li>
							<li class="job_listing">
								<a href="#">
									<div class="job_img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/samples/person6.jpg" alt="" class="company_logo">
									</div>
									<div class="position">
										<h3>Crystal Glass Ltd</h3>
										<div class="company">
											<strong>Bring the best customer service</strong>
										</div>
									</div>
									<div class="location">
										<i class="fa fa-location-arrow"></i> New York, US
									</div>
									<div class="rating">
										<div class="rating-stars">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<ul class="meta">
										<li class="job-type">Furniture Repair &amp; Refinish</li>
										<li class="date">
											Posted 3 months ago
										</li>
									</ul>
								</a>
							</li>
						</ul>
					</div>

					<div class="spacer"></div>

					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<a class="btn btn-default btn-block" href="#">Load more job listings</a>
						</div>
					</div>

				</div>
			</section>
			<!-- Page Content / End -->


<?php get_footer(); ?>