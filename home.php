<?php

get_header();
 
// Get the last 10 posts in the special_cat category.
<?php query_posts( 'cat=3&posts_per_page=1' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<!-- Do special_cat stuff... -->
<?php endwhile; ?>
 
get_footer();
?>