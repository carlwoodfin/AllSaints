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

/* Theme setup - Add dynamic primary navigation */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main Right Sidebar',
		'id'            => 'main-right-sidebar',
		'before_widget' => '<div class="sidebar-style">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>

