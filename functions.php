<?php
/**
 * Dobar Majstor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dobar_Majstor
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dobar_majstor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dobar_majstor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Dobar Majstor, use a find and replace
		 * to change 'dobar-majstor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dobar-majstor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'dobar-majstor' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'dobar_majstor_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'dobar_majstor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dobar_majstor_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dobar_majstor_content_width', 640 );
}
add_action( 'after_setup_theme', 'dobar_majstor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dobar_majstor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dobar-majstor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dobar-majstor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dobar_majstor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dobar_majstor_scripts() {
	wp_enqueue_style( 'dobar-majstor-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dobar-majstor-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dobar-majstor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dobar_majstor_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Creating CPT radnici
function create_radnici_cpt() {

	$labels = array(
		'name'                  => _x( 'Radnici', 'Post Type General Name', 'tvoj_majstor' ),
		'singular_name'         => _x( 'Radnici', 'Post Type Singular Name', 'tvoj_majstor' ),
		'menu_name'             => __( 'Radnici', 'Admin Menu text', 'tvoj_majstor' ),
		'name_admin_bar'        => __( 'Radnici', 'Add New on Toolbar', 'tvoj_majstor' ),
		'archives'              => __( 'Radnici Archives', 'tvoj_majstor' ),
		'attributes'            => __( 'Radnici Attributes', 'tvoj_majstor' ),
		'parent_item_colon'     => __( 'Radnici Nekretnine:', 'tvoj_majstor' ),
		'all_items'             => __( 'Svi radnici', 'tvoj_majstor' ),
		'add_new_item'          => __( 'Dodaj novog radnika', 'tvoj_majstor' ),
		'add_new'               => __( 'Add New', 'tvoj_majstor' ),
		'new_item'              => __( 'New Radnici', 'tvoj_majstor' ),
		'edit_item'             => __( 'Edit Radnici', 'tvoj_majstor' ),
		'update_item'           => __( 'Update Radnici', 'tvoj_majstor' ),
		'view_item'             => __( 'View Radnici', 'tvoj_majstor' ),
		'view_items'            => __( 'View Radnici', 'tvoj_majstor' ),
		'search_items'          => __( 'Search Radnici', 'tvoj_majstor' ),
		'not_found'             => __( 'Not found', 'tvoj_majstor' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tvoj_majstor' ),
		'featured_image'        => __( 'Featured Image', 'tvoj_majstor' ),
		'set_featured_image'    => __( 'Set featured image', 'tvoj_majstor' ),
		'remove_featured_image' => __( 'Remove featured image', 'tvoj_majstor' ),
		'use_featured_image'    => __( 'Use as featured image', 'tvoj_majstor' ),
		'insert_into_item'      => __( 'Insert into Radnici', 'tvoj_majstor' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Radnici', 'tvoj_majstor' ),
		'items_list'            => __( 'Nekretnine list', 'tvoj_majstor' ),
		'items_list_navigation' => __( 'Nekretnine list navigation', 'tvoj_majstor' ),
		'filter_items_list'     => __( 'Filter Radnici list', 'tvoj_majstor' ),
	);
	$args = array(
		'label'                 => __( 'Radnici', 'tvoj_majstor' ),
		'description'           => __( 'Lista radnika', 'tvoj_majstor' ),
		'labels'                => $labels,
		'menu_icon'             => 'dashicons-admin-tools',
		'supports'              => array('title', 'editor', 'comments', 'thumbnail', 'revisions', 'author', 'post-formats', 'excerpt'),
		'taxonomies'            => array(),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'hierarchical'          => true,
		'exclude_from_search'   => false,
		'show_in_rest'          => true,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        
	);
	register_post_type( 'radnici', $args );

}
add_action( 'init', 'create_radnici_cpt', 0 );

//Custom taxonomy Location for CPT Radnici
function create_lokacija_tax() {

	$labels = array(
		'name'              => _x( 'Lokacije', 'taxonomy general name', 'tvoj_majstor' ),
		'singular_name'     => _x( 'Lokacija', 'taxonomy singular name', 'tvoj_majstor' ),
		'search_items'      => __( 'Search Lokacije', 'tvoj_majstor' ),
		'all_items'         => __( 'All Lokacije', 'tvoj_majstor' ),
		'parent_item'       => __( 'Parent Lokacija', 'tvoj_majstor' ),
		'parent_item_colon' => __( 'Parent Lokacija:', 'tvoj_majstor' ),
		'edit_item'         => __( 'Edit Lokacija', 'tvoj_majstor' ),
		'update_item'       => __( 'Update Lokacija', 'tvoj_majstor' ),
		'add_new_item'      => __( 'Add New Lokacija', 'tvoj_majstor' ),
		'new_item_name'     => __( 'New Lokacija Name', 'tvoj_majstor' ),
		'menu_name'         => __( 'Lokacija', 'tvoj_majstor' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'tvoj_majstor' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'lokacija', array('radnici'), $args );

}
add_action( 'init', 'create_lokacija_tax' );

//Adding custom taxonomy Job Category for CPT Radnici
function create_kategorija_poslova_tax() {

	$labels = array(
		'name'              => _x( 'Kategorije Poslova', 'taxonomy general name', 'tvoj_majstor' ),
		'singular_name'     => _x( 'Kategorija Poslova', 'taxonomy singular name', 'tvoj_majstor' ),
		'search_items'      => __( 'Search Kategorija poslova', 'tvoj_majstor' ),
		'all_items'         => __( 'All kategorije', 'tvoj_majstor' ),
		'parent_item'       => __( 'Parent kategorija poslova', 'tvoj_majstor' ),
		'parent_item_colon' => __( 'Parent kategorija poslova:', 'tvoj_majstor' ),
		'edit_item'         => __( 'Edit kategorija poslova', 'tvoj_majstor' ),
		'update_item'       => __( 'Update kategorija poslova', 'tvoj_majstor' ),
		'add_new_item'      => __( 'Add New kategorija poslova', 'tvoj_majstor' ),
		'new_item_name'     => __( 'New kategorija poslova', 'tvoj_majstor' ),
		'menu_name'         => __( 'Kategorije poslova', 'tvoj_majstor' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'tvoj_majstor' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'kategorija-poslova', array('radnici'), $args );

}
add_action( 'init', 'create_kategorija_poslova_tax' );

//Adding custom taxonomy Veštine for CPT Radnici
function create_vestine_tax() {

	$labels = array(
		'name'              => _x( 'Veštine', 'taxonomy general name', 'tvoj_majstor' ),
		'singular_name'     => _x( 'Veštine', 'taxonomy singular name', 'tvoj_majstor' ),
		'search_items'      => __( 'Search Veštine', 'tvoj_majstor' ),
		'all_items'         => __( 'All Veštine', 'tvoj_majstor' ),
		'parent_item'       => __( 'Parent Veštine', 'tvoj_majstor' ),
		'parent_item_colon' => __( 'Parent Veštine:', 'tvoj_majstor' ),
		'edit_item'         => __( 'Edit Veštine', 'tvoj_majstor' ),
		'update_item'       => __( 'Update Veštine', 'tvoj_majstor' ),
		'add_new_item'      => __( 'Add New Veštine', 'tvoj_majstor' ),
		'new_item_name'     => __( 'New Veštine', 'tvoj_majstor' ),
		'menu_name'         => __( 'Veštine', 'tvoj_majstor' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'tvoj_majstor' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'vestine', array('radnici'), $args );

}
add_action( 'init', 'create_vestine_tax' );


//Adding custom taxonomy Iskustva for CPT Radnici
function create_iskustva_tax() {

	$labels = array(
		'name'              => _x( 'Iskustva', 'taxonomy general name', 'tvoj_majstor' ),
		'singular_name'     => _x( 'Iskustva', 'taxonomy singular name', 'tvoj_majstor' ),
		'search_items'      => __( 'Search Iskustva', 'tvoj_majstor' ),
		'all_items'         => __( 'All Iskustva', 'tvoj_majstor' ),
		'parent_item'       => __( 'Parent Iskustva', 'tvoj_majstor' ),
		'parent_item_colon' => __( 'Parent Iskustva:', 'tvoj_majstor' ),
		'edit_item'         => __( 'Edit Iskustva', 'tvoj_majstor' ),
		'update_item'       => __( 'Update Iskustva', 'tvoj_majstor' ),
		'add_new_item'      => __( 'Add New Iskustva', 'tvoj_majstor' ),
		'new_item_name'     => __( 'New Iskustva', 'tvoj_majstor' ),
		'menu_name'         => __( 'Iskustva', 'tvoj_majstor' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'tvoj_majstor' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'iskustva', array('radnici'), $args );

}
add_action( 'init', 'create_iskustva_tax' );



//add_post_type_support( 'radnici', array( 'comments' ) );

            function give_permissions( $allcaps, $cap, $args ) {
                $allcaps['upload_files'] = true;
                return $allcaps;
            }
            add_filter( 'user_has_cap', 'give_permissions', 0, 3 );     