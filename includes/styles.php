<?php
global $al_options;
$al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings');
if(isset($al_options['al_color_theme']))
{
if ($al_options['al_color_theme']=="Lila") {
define("THEME_DIR", get_template_directory_uri())	;  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  
  
// ENQUEUE STYLES  
      
function enqueue_styles() {  
      
    /** REGISTER css/screen.css **/  
	wp_register_style( 'bootstrap', THEME_DIR .'/css/bootstrap.css', array(), '2', 'all'  );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'bootstrap-responsive', THEME_DIR .'/css/bootstrap-responsive.css', array(), '3', 'all'  );
	wp_enqueue_style( 'bootstrap-responsive');
	wp_register_style( 'main-style', THEME_DIR . '/style.css', array(), '4', 'all' ); 
	wp_enqueue_style( 'main-style' );
	wp_register_style( 'media', THEME_DIR .'/css/media.css', array(), '5', 'all'  );
	wp_enqueue_style( 'media');
	wp_register_style( 'bxslider', THEME_DIR .'/css/bxslider.css', array(), '6', 'all'  );
	wp_enqueue_style( 'bxslider');
	wp_register_style( 'prettyphoto', THEME_DIR .'/css/prettyphoto.css', array(), '7', 'all'  );
	wp_enqueue_style( 'prettyphoto');
	wp_register_style( 'sequencejs-theme.modern-slide-in', THEME_DIR .'/css/sequencejs-theme.modern-slide-in.css', array(), '8', 'all'  );
	wp_enqueue_style( 'sequencejs-theme.modern-slide-in');
	wp_register_style( 'camera', THEME_DIR .'/css/camera.css', array(), '9', 'all'  );
	wp_enqueue_style( 'camera');
          
}  
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
}
else if ($al_options['al_color_theme']=="Green") {
define("THEME_DIR", get_template_directory_uri());  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  
  
// ENQUEUE STYLES  
      
function enqueue_styles() {  
      
    /** REGISTER css/screen.css **/  
	wp_register_style( 'bootstrap', THEME_DIR .'/css/green/bootstrap.css', array(), '2', 'all'  );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'bootstrap-responsive', THEME_DIR .'/css/green/bootstrap-responsive.css', array(), '3', 'all'  );
	wp_enqueue_style( 'bootstrap-responsive');
	wp_register_style( 'main-style', THEME_DIR . '/css/green/style.css', array(), '4', 'all' ); 
	wp_enqueue_style( 'main-style' );
	wp_register_style( 'media', THEME_DIR .'/css/green/media.css', array(), '5', 'all'  );
	wp_enqueue_style( 'media');
	wp_register_style( 'bxslider', THEME_DIR .'/css/green/bxslider.css', array(), '6', 'all'  );
	wp_enqueue_style( 'bxslider');
	wp_register_style( 'prettyphoto', THEME_DIR .'/css/green/prettyphoto.css', array(), '7', 'all'  );
	wp_enqueue_style( 'prettyphoto');
	wp_register_style( 'sequencejs-theme.modern-slide-in', THEME_DIR .'/css/green/sequencejs-theme.modern-slide-in.css', array(), '8', 'all'  );
	wp_enqueue_style( 'sequencejs-theme.modern-slide-in');
	wp_register_style( 'camera', THEME_DIR .'/css/green/camera.css', array(), '9', 'all'  );
	wp_enqueue_style( 'camera');
          
}  
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
}

else if ($al_options['al_color_theme']=="Black") {
define("THEME_DIR", get_template_directory_uri());  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  
  
// ENQUEUE STYLES  
      
function enqueue_styles() {  
      
    /** REGISTER css/screen.css **/  
	wp_register_style( 'bootstrap', THEME_DIR .'/css/black/bootstrap.css', array(), '2', 'all'  );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'bootstrap-responsive', THEME_DIR .'/css/black/bootstrap-responsive.css', array(), '3', 'all'  );
	wp_enqueue_style( 'bootstrap-responsive');
	wp_register_style( 'main-style', THEME_DIR . '/css/black/style.css', array(), '4', 'all' ); 
	wp_enqueue_style( 'main-style' );
	wp_register_style( 'media', THEME_DIR .'/css/black/media.css', array(), '5', 'all'  );
	wp_enqueue_style( 'media');
	wp_register_style( 'bxslider', THEME_DIR .'/css/black/bxslider.css', array(), '6', 'all'  );
	wp_enqueue_style( 'bxslider');
	wp_register_style( 'prettyphoto', THEME_DIR .'/css/black/prettyphoto.css', array(), '7', 'all'  );
	wp_enqueue_style( 'prettyphoto');
	wp_register_style( 'sequencejs-theme.modern-slide-in', THEME_DIR .'/css/black/sequencejs-theme.modern-slide-in.css', array(), '8', 'all'  );
	wp_enqueue_style( 'sequencejs-theme.modern-slide-in');
	wp_register_style( 'camera', THEME_DIR .'/css/black/camera.css', array(), '9', 'all'  );
	wp_enqueue_style( 'camera');
          
}  
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
}

else if ($al_options['al_color_theme']=="Red") {
define("THEME_DIR", get_template_directory_uri());  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  
  
// ENQUEUE STYLES  
      
function enqueue_styles() {  
      
    /** REGISTER css/screen.css **/  
	wp_register_style( 'bootstrap', THEME_DIR .'/css/red/bootstrap.css', array(), '2', 'all'  );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'bootstrap-responsive', THEME_DIR .'/css/red/bootstrap-responsive.css', array(), '3', 'all'  );
	wp_enqueue_style( 'bootstrap-responsive');
	wp_register_style( 'main-style', THEME_DIR . '/css/red/style.css', array(), '4', 'all' ); 
	wp_enqueue_style( 'main-style' );
	wp_register_style( 'media', THEME_DIR .'/css/red/media.css', array(), '5', 'all'  );
	wp_enqueue_style( 'media');
	wp_register_style( 'bxslider', THEME_DIR .'/css/red/bxslider.css', array(), '6', 'all'  );
	wp_enqueue_style( 'bxslider');
	wp_register_style( 'prettyphoto', THEME_DIR .'/css/red/prettyphoto.css', array(), '7', 'all'  );
	wp_enqueue_style( 'prettyphoto');
	wp_register_style( 'sequencejs-theme.modern-slide-in', THEME_DIR .'/css/red/sequencejs-theme.modern-slide-in.css', array(), '8', 'all'  );
	wp_enqueue_style( 'sequencejs-theme.modern-slide-in');
	wp_register_style( 'camera', THEME_DIR .'/css/red/camera.css', array(), '9', 'all'  );
	wp_enqueue_style( 'camera');
          
}  
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
}
else {
define("THEME_DIR", get_template_directory_uri())	;  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  
  
// ENQUEUE STYLES  
      
function enqueue_styles() {  
      
    /** REGISTER css/screen.css **/  
	wp_register_style( 'bootstrap', THEME_DIR .'/css/bootstrap.css', array(), '2', 'all'  );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'bootstrap-responsive', THEME_DIR .'/css/bootstrap-responsive.css', array(), '3', 'all'  );
	wp_enqueue_style( 'bootstrap-responsive');
	wp_register_style( 'main-style', THEME_DIR . '/style.css', array(), '4', 'all' ); 
	wp_enqueue_style( 'main-style' );
	wp_register_style( 'media', THEME_DIR .'/css/media.css', array(), '5', 'all'  );
	wp_enqueue_style( 'media');
	wp_register_style( 'bxslider', THEME_DIR .'/css/bxslider.css', array(), '6', 'all'  );
	wp_enqueue_style( 'bxslider');
	wp_register_style( 'prettyphoto', THEME_DIR .'/css/prettyphoto.css', array(), '7', 'all'  );
	wp_enqueue_style( 'prettyphoto');
	wp_register_style( 'sequencejs-theme.modern-slide-in', THEME_DIR .'/css/sequencejs-theme.modern-slide-in.css', array(), '8', 'all'  );
	wp_enqueue_style( 'sequencejs-theme.modern-slide-in');
	wp_register_style( 'camera', THEME_DIR .'/css/camera.css', array(), '9', 'all'  );
	wp_enqueue_style( 'camera');
          
}  
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
}
}
else {
define("THEME_DIR", get_template_directory_uri())	;  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  
  
// ENQUEUE STYLES  
      
function enqueue_styles() {  
      
    /** REGISTER css/screen.css **/  
	wp_register_style( 'bootstrap', THEME_DIR .'/css/bootstrap.css', array(), '2', 'all'  );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'bootstrap-responsive', THEME_DIR .'/css/bootstrap-responsive.css', array(), '3', 'all'  );
	wp_enqueue_style( 'bootstrap-responsive');
	wp_register_style( 'main-style', THEME_DIR . '/style.css', array(), '4', 'all' ); 
	wp_enqueue_style( 'main-style' );
	wp_register_style( 'media', THEME_DIR .'/css/media.css', array(), '5', 'all'  );
	wp_enqueue_style( 'media');
	wp_register_style( 'bxslider', THEME_DIR .'/css/bxslider.css', array(), '6', 'all'  );
	wp_enqueue_style( 'bxslider');
	wp_register_style( 'prettyphoto', THEME_DIR .'/css/prettyphoto.css', array(), '7', 'all'  );
	wp_enqueue_style( 'prettyphoto');
	wp_register_style( 'sequencejs-theme.modern-slide-in', THEME_DIR .'/css/sequencejs-theme.modern-slide-in.css', array(), '8', 'all'  );
	wp_enqueue_style( 'sequencejs-theme.modern-slide-in');
	wp_register_style( 'camera', THEME_DIR .'/css/camera.css', array(), '9', 'all'  );
	wp_enqueue_style( 'camera');
          
}  
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
}

// ENQUEUE GOOFLE FONT STYLES 

function mytheme_fonts() {
$protocol = is_ssl() ? 'https' : 'http';
wp_enqueue_style( 'mytheme-rougescript', "$protocol://fonts.googleapis.com/css?family=Rouge+Script" );
wp_enqueue_style( 'mytheme-opensans', "$protocol://fonts.googleapis.com/css?family=Open+Sans" );
wp_enqueue_style( 'mytheme-Oswald', "$protocol://fonts.googleapis.com/css?family=Oswald:400,300" );
}
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );

?>