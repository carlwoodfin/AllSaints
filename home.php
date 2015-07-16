<?php

get_header();
 
function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'category-name' )) {
          $single_template = dirname( __FILE__ ) . '/single-template.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;
 
 
get_footer();
?>