<?php get_header(); 
get_template_part('includes/nav', 'header');
?>

<div class="row">
	<div class="col-md-9">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3 class="yearwelcome"><?php the_title(); ?></h3>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>

	  	<?php the_content(); ?>


			<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>


		
			<?php comments_template(); ?>
</div>
	<div class="col-md-3">
			<?php get_sidebar($post_type); ?>  	
 		</div>
</div>

<?php get_template_part('includes/content', 'footer'); ?>
