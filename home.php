<?php

get_header();

?>

<?php
 
// Get the last 10 posts in the special_cat category.
 query_posts( 'cat=4&posts_per_page=1' );

 while ( have_posts() ) : the_post();
?>
	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 <?php endwhile; ?>

<?php 
get_footer();
?>