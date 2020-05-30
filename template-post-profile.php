<?php
/**
* Template Name: Post a Profile
*
* @package WordPress
* @subpackage dobar-majstor
* @since dobar-majstor 1.0
*/

$ime_prezime = $_GET['name_surname'];
$email_adresa = $_GET['email_adresa'];
$broj_telefona = $_GET['broj_telefona'];
$opis = $_GET['opis_posla'];
$forma_dodata = false;

$kategorija = $_GET['kategorija-poslova'];
$lokacija = $_GET['lokacija'];

//$profile_image = $_FILES['profile_image'];



$id = wp_insert_post(array(
	'post_title'=>$ime_prezime, 
	'post_name' =>$ime_prezime,
	'post_content' =>$opis,
	'post_type'=>'radnici',
	'post_status' => 'draft'
));

var_dump($id);

wp_set_object_terms( $id, $kategorija, 'kategorija-poslova' );
wp_set_object_terms( $id, $lokacija, 'lokacija' );

add_post_meta($id, 'broj_telefona', $broj_telefona, false);
add_post_meta($id, 'email_adresa', $email_adresa, false);

 //Postavljanje featured slike



get_header(); ?>
<!-- Main -->
<div class="main" role="main">

	<!-- Page Heading -->
	<section class="page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Dodaj radnika</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Heading / End -->

	<!-- Page Content -->
	<div class="page-content">
		<div class="container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- Profile Form -->
					<form action="<?php echo get_page_uri(25);?>" method="get" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">
						<fieldset class="fieldset-job_title">
							<label for="name_surname">Ime i prezime<span class="required">*</span></label>
							<div class="field">
								<input type="text" class="form-control" name="name_surname" id="name_surname" placeholder="npr. ”Ivan Ivanovic" value=""/>
							</div>
						</fieldset>	

						<fieldset>
							<label>Email adresa </label>
							<div class="field">
								<input type="email" class="form-control" name="email_adresa" id="account_email" placeholder="petarpetrovic@gmail.com" value="" />
							</div>
						</fieldset>
						<!-- Profile Information Fields -->
						<fieldset class="fieldset-job_title">
							<label for="broj_telefona">Broj telefona</label>
							<div class="field">
								<input type="text" class="form-control" name="broj_telefona" id="broj_telefona" placeholder="064... ..." value=""/>
							</div>
						</fieldset>

						<fieldset class="fieldset-job_location">
							<label for="job_location">Lokacija <span class="required">*</span></label>
							<div class="field">
								<div class="form-group col">
									<?php 
									$terms = get_terms( array( 
										'taxonomy' => 'lokacija',
										'hide_empty' => false
									) );
									$i = 0;    
									?> <div class="d-flex justify-content-start"> <?php                    
									foreach( $terms as $term ) { ?>
										<div class="">
											<input type="checkbox" id="extra-<?php echo $i; ?>"  name="lokacija[]" value="<?php echo $term->name; ?>" class="checkbox--class">
											<label for="extra-<?php echo $i; ?>" class="select-label color--black"><?php echo $term->name; ?> </label>
										</div>
										<?php
										$i++;
									};
									?>
								</div>
								<?php 
								?>
							</div>
						</div>
					</fieldset>

					<fieldset class="fieldset-job_location">
						<label for="job_location">Kategorija posla <span class="required">*</span></label>
						<div class="field">
							<div class="form-group col">
								<?php 
								$terms = get_terms( array( 
									'taxonomy' => 'kategorija-poslova',
									'hide_empty' => false
								) );
								$i = 0;    
								?> <div class="d-flex justify-content-start"> <?php                    
								foreach( $terms as $term ) { ?>
									<div class="">
										<input type="checkbox" id="extra-<?php echo $i; ?>"  name="kategorija-poslova[]" value="<?php echo $term->name; ?>" class="checkbox--class">
										<label for="extra-<?php echo $i; ?>" class="select-label color--black"><?php echo $term->name; ?> </label>
									</div>
									<?php
									$i++;
								};
								?>
							</div>
							<?php 
							?>
						</div>
					</div>
				</fieldset>



				<fieldset class="fieldset-company_logo">
					<label for="company_logo">Slika <small>(opciono)</small></label>
					<div class="field">
						<input type="file" class="form-control" name="profile_image" id="profile_image"  accept="image/x-png,image/jpg,image/jpeg" />

					</div>
				</fieldset>


				<fieldset class="fieldset-job_description">
					<label>Opis</label>
					<div class="field">
						<textarea name="opis_posla" cols="30" rows="8" class="form-control"></textarea>
					</div>
				</fieldset>


				<div class="spacer"></div>

				<p>
					<input type="submit" name="submit_worker" class="btn btn-primary" value="Dodaj radnika &rarr;" />
				</p>

			</form>
			<!-- Profile Form / End -->
		</div>
	</div>

</div>
</div>
<!-- Page Content / End -->

<?php get_footer(); ?>