<?php get_header(); ?>
<div class="row">
<div class="col-md-9">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
<div class="col-md-3">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>