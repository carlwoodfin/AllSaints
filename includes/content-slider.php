
<div class="row">
 <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
<div id="postCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

  </ol>

<?php 
	$loop = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => 1 )); 
		 while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="item active">
  				<?php the_post_thumbnail('slider-image');?>
			</div>
 
				<?php endwhile; ?>
			
				<?php wp_reset_postdata(); ?>

<?php 
	$loop = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => 3, 'offset' => 1 )); 
?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="item">
  <?php the_post_thumbnail('slider-image');?>

   </div>
				<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>	
					
				</div>

      </div>
      <a class="left carousel-control" href="#postCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#postCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    </div>