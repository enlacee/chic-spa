<?php
function elegance_widgets_init() {




	// Footer Widget
	// Location: at the top of the footer, above the copyright
		register_sidebar(array(
		'name'					=> __('Blog Sidebar', 'lotus'),
		'id' 						=> 'footer_block_1',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="headlinesidebar">',
		'after_widget' => '</div>',	
		'before_title' => '<ul class="sidebarabout1"> <h4>',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name'					=> __('About Sidebar', 'lotus'),
		'id' 						=> 'footer_block_2',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="headlinesidebar">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout1"> <h4>',
		'after_title' => '</h4>',	
	));


	register_sidebar(array(
		'name'					=> __('Contact Sidebar', 'lotus'),
		'id' 						=> 'footer_block_3',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="headlinesidebar">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout1"> <h4>',
		'after_title' => '</h4>',	
	));
	register_sidebar(array(
		'name'					=> __('Contactform Sidebar', 'lotus'),
		'id' 						=> 'footer_block_4',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="headlinesidebar">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout1"> <h4>',
		'after_title' => '</h4>',	
	));	
	register_sidebar(array(
		'name'					=> __('Footer Block 1', 'lotus'),
		'id' 						=> 'footer_block_5',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="footerheadline">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout11"> <h4>',
		'after_title' => '</h4>',	
	));
	register_sidebar(array(
		'name'					=> __('Footer Block 2', 'lotus'),
		'id' 						=> 'footer_block_6',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="footerheadline">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout11"> <h4>',
		'after_title' => '</h4>',	
	));
		register_sidebar( array(
		'name' => __( 'Footer Block 3', 'lotus' ),
		'id' => 'footer_block_7',
		'description' => __( 'Located at the bottom of pages.', 'lotus' ),
		'before_widget' => '<div class="footerheadline">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout11"> <h4>',
		'after_title' => '</h4>',
	) );
		register_sidebar( array(
		'name' => __( 'Footer Block 4', 'lotus' ),
		'id' => 'footer_block_8',
		'description' => __( 'Located at the bottom of pages.', 'lotus' ),
		'before_widget' => '<div class="footerheadline">',
		'after_widget' => '</div>',
		'before_title' => '<ul class="sidebarabout11"> <h4>',
		'after_title' => '</h4>',
	) );	
	
	register_sidebar(array(
		'name'					=> __('Footer Social Sidebar', 'lotus'),
		'id' 						=> 'footer_block_9',
		'description'   => 'Located at the bottom of pages.',
		'before_widget' => '<div class="headlinesidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	
	));	
}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>