<?php
if ( ! isset( $content_width ) )
	$content_width = 800; /* pixels */

if ( ! function_exists( 'photoTheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function photoTheme_setup() {

	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
	load_theme_textdomain( 'photography', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to &lt;head&gt;.
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for post thumbnails and featured images.
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add support for two custom navigation menus.
	 */
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'photography' ),
		'secondary' => __( 'Secondary Menu', 'photography' )
	) );

	register_sidebar();

	/**
	 * Enable support for the following post formats:
	 * aside, gallery, quote, image, and video
	 */
	add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // photoTheme_setup

add_action( 'after_setup_theme', 'photoTheme_setup' );

//Adding Styles, js and bootstraps.

function add_theme_scripts() {
    // wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/custom-style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri()  . '/assets/css/bootstrap.min.css', array(), false, 'all');    
    wp_enqueue_script( 'boostrap', get_template_directory_uri( ) . '/assets/js/bootstrap.min.js', array ( 'jquery'), false, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//Adding Custom Pos Types

// Register Custom Post Type
// Register Custom Post Type Service
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'photography' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'photography' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'photography' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'photography' ),
		'archives' => __( 'Service Archives', 'photography' ),
		'attributes' => __( 'Service Attributes', 'photography' ),
		'parent_item_colon' => __( 'Parent Service:', 'photography' ),
		'all_items' => __( 'All Services', 'photography' ),
		'add_new_item' => __( 'Add New Service', 'photography' ),
		'add_new' => __( 'Add New', 'photography' ),
		'new_item' => __( 'New Service', 'photography' ),
		'edit_item' => __( 'Edit Service', 'photography' ),
		'update_item' => __( 'Update Service', 'photography' ),
		'view_item' => __( 'View Service', 'photography' ),
		'view_items' => __( 'View Services', 'photography' ),
		'search_items' => __( 'Search Service', 'photography' ),
		'not_found' => __( 'Not found', 'photography' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'photography' ),
		'featured_image' => __( 'Featured Image', 'photography' ),
		'set_featured_image' => __( 'Set featured image', 'photography' ),
		'remove_featured_image' => __( 'Remove featured image', 'photography' ),
		'use_featured_image' => __( 'Use as featured image', 'photography' ),
		'insert_into_item' => __( 'Insert into Service', 'photography' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'photography' ),
		'items_list' => __( 'Services list', 'photography' ),
		'items_list_navigation' => __( 'Services list navigation', 'photography' ),
		'filter_items_list' => __( 'Filter Services list', 'photography' ),
	);
	$args = array(
		'label' => __( 'Service', 'photography' ),
		'description' => __( '', 'photography' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array('title', 'editor', 'excerpt', 'custom-logo', 'thumbnail', 'revisions', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'create_service_cpt', 0 );


//create widget for Footer section updated

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Footer One' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */

	register_sidebar(
		array(
			'id'            => 'secondary',
			'name'          => __( 'Footer Two' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

//Custom Logo

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function video_page() {
	if(is_page('video')){
    echo '<style>.mobmenur-container{display: none !important;}</style>'."\n";
	}
}
add_action('wp_head', 'video_page');
