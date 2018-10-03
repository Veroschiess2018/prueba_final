<?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();

wp_register_style('mitema.css', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');

wp_register_style('bootstrap-grid.css', get_theme_file_uri('css/bootstrap-grid.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-grid-min.css', get_theme_file_uri('css/bootstrap-grid-min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-grid-min.css.map', get_theme_file_uri('css/bootstrap-grid-min.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.css', get_theme_file_uri('css/bootstrap-reboot.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.css.map', get_theme_file_uri('css/bootstrap-reboot.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.min.css', get_theme_file_uri('css/bootstrap-reboot.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.min.css.map', get_theme_file_uri('css/bootstrap-reboot.min.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.css', get_theme_file_uri('css/bootstrap.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.css.map', get_theme_file_uri('css/bootstrap.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.min.css', get_theme_file_uri('css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.min.css.map', get_theme_file_uri('css/bootstrap.min.css.map'), null, $theme_data->get('Version'), 'screen');


wp_enqueue_style('mitema.css');
wp_enqueue_style('bootstrap-grid.css');
wp_enqueue_style('bootstrap-grid-min.css');
 wp_enqueue_style('bootstrap-grid-min.css.map');
 wp_enqueue_style('bootstrap-reboot.css');
 wp_enqueue_style('bootstrap-reboot.css.map');
 wp_enqueue_style('bootstrap-reboot.min.css.css');
 wp_enqueue_style('bootstrap-reboot.min.css.map');
wp_enqueue_style('bootstrap.css');
wp_enqueue_style('bootstrap.css.map');
wp_enqueue_style('bootstrap.min.css');
wp_enqueue_style('bootstrap.min.css.map');
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();


wp_deregister_script('jquery');
wp_deregister_script('jquery');


wp_register_script('jQuery3', get_parent_theme_file_uri('vendor/jQuery/jQuery.min.js'), array ('jQuery_migrate'), null, true);

wp_enqueue_script('jQuery');
wp_enqueue_script('');
 
}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');
 ?>
 <?php 

if ( function_exists( 'register_nav_menus')) {
	register_nav_menus( array ( 'superior' => 'Menú principal superior'));
}

if ( function_exists('add_theme_support')){
	add_theme_support( 'post-thumbnails');
}

?>
