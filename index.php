      <?php get_header(); ?>
  

      <div class="col-md-10 col-md-offset-1 hidden-xs hidden-sm">

<div id="postCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
<?php

$the_query = new WP_Query( 'cat=3' );
if ( $the_query->have_posts() ) :
$i = 0;
while ( $the_query->have_posts() ) : $the_query->the_post();
$i++;
if ( $i == 1 ) {
  	echo '<div class="item active">';
}
          	echo '<div class="col-md-6">';
  	wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
  	echo '<h2>'.get_the_title().'</h2>';
          	echo '</div>';
if ( $i % 2 == 0 && $i != 4 ) { echo '</div><div class="item">'; }
endwhile;
          	echo '</div>';
wp_reset_postdata();
endif;
?>
      </div>
      <a class="left carousel-control" href="#postCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#postCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

</div>

	<div class="row col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>


      <?php get_footer(); ?>