<?php get_header(); 
get_template_part('includes/nav', 'header');
?>

<div class="col-md-12">
<?php

if ( is_post_type_archive() ) { ?>
    <h3 class="yearwelcome"><?php post_type_archive_title(); ?></h3>
    <?php
}

$post_type = get_query_var( 'post_type' );
 

$args = array( 'posts_per_page' => 10, 'post_type' => $post_type );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); 

?>




 <div class="row">
  <div class="well">
  <div class="media">
  <div class="media-left media-middle">

  <div class="col-sm-2">
    <?php the_post_thumbnail('category-image', array('class' => 'media-object img-circle')); ?>
  </div>
  </div>
  <div class="media-body">
  <div class="media-heading">
    <div class"col-sm-5">
        <h4 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
        </div>
        <p><?php the_excerpt(); ?></p>
        </div>
      

        
        
</div>
</div>
</div>


<?php endforeach; 
wp_reset_postdata();?>


<?php get_template_part('includes/content', 'footer'); ?>