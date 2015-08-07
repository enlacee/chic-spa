<?php
global $al_options;
include(get_template_directory().'/includes/styles.php');
include(get_template_directory().'/includes/js.php');

function paralaxjs()
{

//wp_enqueue_script('boxslide', get_template_directory_uri().'/js/jquery.bxslider.js',array('jquery'));  
wp_enqueue_script('slide-custom-js', get_template_directory_uri().'/js/custom_slide.js',array('jquery'));  

}
function extrajs()
{

wp_enqueue_script('camera-js', get_template_directory_uri().'/js/camera.js',array('jquery'));  
wp_enqueue_script('custom-camera-js', get_template_directory_uri().'/js/custom_camera.js',array('jquery'));  

}


$al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings');

if ( ! isset( $content_width ) ) $content_width = 900;
$adminPath 	=  get_template_directory() . '/library/admin/';
$funcPath 	=  get_template_directory() . '/library/functions/';

$incPath 	=  get_template_directory() . '/library/includes/';

global $al_options;
$al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings');



include ($funcPath . 'options.php');



include ($adminPath . 'custom-fields.php');
include ($adminPath . 'scripts.php');
include ($adminPath . 'admin-panel/admin-panel.php');

// Redirect To Theme Options Page on Activation
if (is_admin() && isset($_GET['activated'])){
	wp_redirect(admin_url('admin.php?page=adminpanel'));
}


	$functions_path = get_template_directory() . '/functions/';
	$includes_path = get_template_directory() . '/includes/';
	
	//Loading jQuery and Scripts
	
	//Widget and Sidebar
	include $includes_path . 'sidebar-init.php';
	
	include (TEMPLATEPATH . '/includes/widgets/lotus-contactaddress-widget.php');
include (TEMPLATEPATH . '/includes/widgets/lotus-tab-widget.php');
include (TEMPLATEPATH . '/includes/widgets/lotus-businesshour-widget.php');
include (TEMPLATEPATH . '/includes/widgets/lotus-testimonial-widget.php');
include (TEMPLATEPATH . '/includes/widgets/Lotus-twiter-widget.php');
include (TEMPLATEPATH . '/includes/widgets/Lotus-socialicon-widget.php');
include (TEMPLATEPATH . '/includes/widgets/Lotus-category-widget.php');
include (TEMPLATEPATH . '/includes/widgets/lotus-tags-widget.php');
add_action("widgets_init", "load_lotus_widgets");

function load_lotus_widgets() {


	register_widget("Lotus_ContactAddressWidget");
	register_widget("Lotus_TabWidget");
	register_widget("Lotus_businesshourwidget");
	register_widget("Lotus_TestimonialWidget");
	register_widget("Lotus_TwiterWidget");
	register_widget("Lotus_socialwidget");
	register_widget("Lotus_CategoryWidget");
	register_widget("Lotus_TagsWidget");
}
	
	//Theme initialization
	include $includes_path . 'theme-init.php';
	
	//Additional function
	//include $includes_path . 'theme-function.php';
	
	
	
	register_nav_menus(array(
	 'primary'=>__( 'Navigation', 'Lotuswp' ), ));

	 if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
} 

 // Custom Post Type - Drink Menu

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );

add_theme_support( 'get_post-formats', array('image', 'link', 'quote', 'video', 'audio' ));
add_post_type_support( 'portfolio', 'get_post-formats' );


function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}


 include('pagination.php'); 
 


