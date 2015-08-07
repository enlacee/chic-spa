<?php


function jquery_migrate() {
 wp_enqueue_script(
      'migrate', 
       get_template_directory_uri().'/js/jquery-migrate.js',
       array('jquery'), 
       '3', 
       true
);
}
add_action('wp_enqueue_scripts', 'jquery_migrate');

function jquery_sequence() {
 wp_enqueue_script(
      'sequence', 
       get_template_directory_uri().'/js/jquery.sequence.js',
       array('jquery'), 
       '4', 
       true
);
}
add_action('wp_enqueue_scripts', 'jquery_sequence');

function jquery_bxslider() {
 wp_enqueue_script(
      'bxslider', 
       get_template_directory_uri().'/js/jquery.bxslider.js',
       array('jquery'), 
       '5', 
       true
);
}
add_action('wp_enqueue_scripts', 'jquery_bxslider');

function bootstrap() {
 wp_enqueue_script(
      'bootstrap', 
       get_template_directory_uri().'/js/bootstrap.js',
       array('jquery'), 
       '6', 
       true
);
}
add_action('wp_enqueue_scripts', 'bootstrap');

function jquery_ui() {
 wp_enqueue_script(
      'jquery-ui', 
       get_template_directory_uri().'/js/jquery-ui.js',
       array('jquery'), 
       '7', 
       true
);
}
add_action('wp_enqueue_scripts', 'jquery_ui');


/*function camera() {
 wp_enqueue_script(
      'camera', 
       get_template_directory_uri().'/js/camera.js',
       array('jquery'), 
       '8', 
       true
);
}
add_action('wp_enqueue_scripts', 'camera');*/
function jquery_easing() {
 wp_enqueue_script(
      'easing', 
       get_template_directory_uri().'/js/jquery.easing.js',
       array('jquery'), 
       '8', 
       true
);
}
add_action('wp_enqueue_scripts', 'jquery_easing');

function quicksand1_js() {
 wp_enqueue_script(
      'quicksand11', 
       get_template_directory_uri().'/js/quicksand1.js',
       array('jquery'), 
       '9', 
       true
);
}
add_action('wp_enqueue_scripts', 'quicksand1_js');

function quicksand_js() {
 wp_enqueue_script(
      'quicksand12', 
       get_template_directory_uri().'/js/quicksand.js',
       array('jquery'), 
       '10', 
       true
);
}
add_action('wp_enqueue_scripts', 'quicksand_js');

function prettyphoto_js() {
 wp_enqueue_script(
      'prettyphoto', 
       get_template_directory_uri().'/js/prettyphoto.js',
       array('jquery'), 
       '11', 
       true
);
}
add_action('wp_enqueue_scripts', 'prettyphoto_js');

/*function custom_slide() {
 wp_enqueue_script(
      'slide', 
       get_template_directory_uri().'/js/custom_slide.js',
       array('jquery'), 
       '13', 
       true
);
}
add_action('wp_enqueue_scripts', 'custom_slide');*/

function custom_js() {
 wp_enqueue_script(
      'custom', 
       get_template_directory_uri().'/js/custom.js',
       array('jquery'), 
       '12', 
       true
);
}
add_action('wp_enqueue_scripts', 'custom_js');

function custom_another() {
 wp_enqueue_script(
      'another', 
       get_template_directory_uri().'/js/custom_another.js',
       array('jquery'), 
       '13', 
       true
);
}
add_action('wp_enqueue_scripts', 'custom_another');