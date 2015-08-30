<?php get_header(); 
get_template_part('includes/nav', 'header');
?>

<div class="row">
<div class="col-md-9">


<h3 class="yearwelcome">Welcome to <?php single_cat_title(); ?></h3>
<?php


$args = array( 'posts_per_page' => 10, 'post_type' => 'year-1' );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>



  <div class="row">

  <div class="col-md-2">
    <?php the_post_thumbnail('category-image', array('class' => 'img-thumbnail img-circle')); ?>
  </div>
  <div class"col-md-5">
		<h4 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  		</div>
		<p><?php the_excerpt(); ?></p>
		
 </div>


<?php endforeach; 
wp_reset_postdata();?>



</div>
 <div class="col-md-3">
<?php get_sidebar(); ?>
 </div>
 </div>

<?php get_template_part('includes/content', 'footer'); ?>