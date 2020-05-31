<?php
/**
* Template Name: Dodaj featured sliku
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
					<form id="featured_upload" method="post" action="#" enctype="multipart/form-data">
    <input type="file" name="my_image_upload" id="my_image_upload"  multiple="false" />
    <input type="hidden" name="post_id" id="post_id" value="151" />
    <?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>
    <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Upload" />
</form>


<?php
 
// Check that the nonce is valid, and the user can edit this post.
if ( 
    isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] ) 
    && wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
    && current_user_can( 'edit_post', $_POST['post_id'] )
) {
    // The nonce was valid and the user has the capabilities, it is safe to continue.
 
    // These files need to be included as dependencies when on the front end.
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );
     
    // Let WordPress handle the upload.
    // Remember, 'my_image_upload' is the name of our file input in our form above.
    $attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );
     
    if ( is_wp_error( $attachment_id ) ) {
        // There was an error uploading the image.
    } else {
        // The image was uploaded successfully!
    }
 
} else {
 
    // The security check failed, maybe show the user an error.
}
?>

			<!-- Profile Form / End -->
		</div>
	</div>

</div>
</div>
<!-- Page Content / End -->


?>
<?php get_footer(); ?>