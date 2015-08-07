<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 155, 137, true ); // Normal post thumbnails
		add_image_size( 'post-thumbnail-xl', 311, 221, true ); // Portfolio Extra Large Thumbnail
		add_image_size( 'slider-post-thumbnail', 1400, 880, true ); // Slider Thumbnail
		add_image_size( 'portfolio-post-thumbnail', 116, 82, true ); // Portfolio Thumbnail
		add_image_size( 'portfolio-post-thumbnail-small', 161, 114, true ); // Portfolio Small Thumbnail
		add_image_size( 'portfolio-post-thumbnail-large', 251, 178, true ); // Portfolio Large Thumbnail
		add_image_size( 'portfolio-post-thumbnail-xl', 311, 221, true ); // Portfolio Extra Large Thumbnail
		add_image_size( 'small-post-thumbnail', 71, 71, true ); // Small Thumbnail
		//add_image_size( 'testi-thumbnail', 120, 120, true ); // Testimonial Thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  //'header_menu' => 'Header Menu',
	  		  //'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
}
endif;
/* Slide */
function my_post_type_slide() {
	register_post_type( 'slide',
                array( 
				'label' => 'Slide', 
				'singular_label' => __('Slides Item', 'theme_Lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/sliders.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
}

add_action('init', 'my_post_type_slide');

/* Slide */
function my_post_type_specialslide() {
	register_post_type( 'specialslide',
                array( 
				'label' => 'Special Slide', 
				'singular_label' => __('Slides Item', 'theme_Lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/sliders.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
}

add_action('init', 'my_post_type_specialslide');

/* Camera Slide */
function my_post_type_cameraslide() {
	register_post_type( 'cameraslide',
                array( 
				'label' => 'Camera Slide', 
				'singular_label' => __('Camera Slide Item', 'theme_Lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_slides.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
}

add_action('init', 'my_post_type_cameraslide');

/* Spahome */
function my_post_type_spahome() {
	register_post_type( 'spahome',
                array( 
				'label' => 'Home Spa', 
				'singular_label' => __('Spahome Item', 'theme_Lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/home.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
}

add_action('init', 'my_post_type_spahome');

/* Spahome */
function my_post_type_spawellness() {
	register_post_type( 'spawellness',
                array( 
				'label' => 'Home Wellness', 
				'singular_label' => __('Spahome Item', 'theme_Lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_home.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
}

add_action('init', 'my_post_type_spawellness');

/* spahometab */
function my_post_type_spahometab() {
	register_post_type( 'spahometab',
                array( 
				'label' => 'Hometab', 
				'singular_label' => 'spahometab Item', 'theme_Lotus',
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/home.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
}

add_action('init', 'my_post_type_spahometab');

/* spaabout */
function my_post_type_spaabout() {
	register_post_type( 'spaabout',
                array( 
				'label' => 'Spa About', 
				'singular_label' => 'Spaabout Item', 'theme_Lotus',
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_portfolio.png',
				'rewrite' => array(
					'slug' => 'spaabout-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
	register_taxonomy('spaabout_category', 'spaabout', array('hierarchical' => true, 'label' => 'Spaabout Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
}

add_action('init', 'my_post_type_spaabout');


/* service-special */
function my_post_type_servicespecial() {
	register_post_type( 'servicespecial',
                array( 
				'label' => 'Service-Special', 
				'singular_label' => __('ServiceSpecial Item', 'theme_Lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/blog.png',
				'rewrite' => array(
					'slug' => 'spaabout-view',
					'with_front' => true,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
	register_taxonomy('servicespecial_category', 'servicespecial', array('hierarchical' => true, 'label' => 'ServiceSpecial Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
}

add_action('init', 'my_post_type_servicespecial');

/* Portfolio */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
                array( 
				'label' => 'Portfolio', 
				'singular_label' => __('Porfolio Item', 'theme_lotus'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/portfolio.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
	register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
}

add_action('init', 'my_post_type_portfolio');
