<?php get_header(); ?>

<div class="row">

  <div class="col-md-9">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3 class="yearwelcome"><?php the_title(); ?></h3>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>

	  	<?php the_content(); ?>

	  	<hr>
	  	
		

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
	<div class="row">
	<?php comments_template(); ?>
	</div>
	
	<div class="row">
	<?php get_sidebar('Header'); ?>  	
 	</div>

</div>
 </div>
<?php get_template_part('includes/content', 'footer'); ?>
