<?php


/* Register Navigation Helper */
require_once('wp_bootstrap_navwalker.php');

/* Register Bootsrap + JQuery - Add any other needed scripts here */
function reg_scripts() {
	wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrapthemestyle', get_template_directory_uri() . '/bootstrap/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'stylesheetcss', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), true );
    
}
add_action('wp_enqueue_scripts', 'reg_scripts');

?>
<?php

/* Theme setup - Add dynamic primary navigation */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
?>
<?php 
// Adding thumbnail support
//add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}
?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Header',
		'id'   => 'header',
		'description'   => 'This is the widgetized header.',
		'class'			=> 'list-unstyled',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Footer',
		'id'   => 'footer',
		'description'   => 'This is the widgetized footer.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}

?>