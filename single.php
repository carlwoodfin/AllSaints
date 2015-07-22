<?php get_header(); ?>

<div class="row">
  <div class="col-md-9">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>

	  	<?php the_content(); ?>

	  	<hr>
<div class="col-md-5">		<?php comments_template(); ?>
</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="col-md-3">
	<?php get_sidebar(); ?>  	
  </div>
</div>

<?php get_footer(); ?>
