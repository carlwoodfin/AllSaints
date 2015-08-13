<?php get_header(); ?>

<div class="row">
<div class="col-md-8">


<h3><?php single_cat_title('Welcome to '); ?></h3>
<?php


$args = array( 'posts_per_page' => 10, 'category' => $cat );



$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>



  <div class="row well">

  <div class="col-md-2">
    <?php the_post_thumbnail('category-image', array('class' => 'img-thumbnail img-circle')); ?>
  </div>
  <div class"col-md-5">
		<h4 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  		</div>
		<p><?php the_content(); ?></p>
		
 </div>


<?php endforeach; 
wp_reset_postdata();?>



</div>
 <div class="col-md-4">
<?php get_sidebar(); ?>
 </div>
 </div>

<?php get_footer(); ?>