<?php

get_header();

get_template_part('includes/nav', 'header');
?>

<?php get_template_part('includes/content','slider'); ?>




<hr>
<div class="row">
<div class="col-md-3 col-xs-12">
<?php get_sidebar('left'); ?>
</div>


<div class="col-md-6 col-xs-12">
<?php get_template_part('includes/nav', 'buttons'); ?>

<h5 class="year-work text-center">See some of our children's work. Pick a year!</h5>
<?php get_template_part( 'includes/nav', 'years' ); ?>
</div>



  <div class="col-md-3 col-xs-12">
<?php get_sidebar('right'); ?>
</div>

</div>


<hr>
<div class="row">

  	<div class="col-md-12">
  	<h4 class="text-center text-white">All Saints is committed to safeguarding all our children</h4>
	</div>
  	<div class="media pull-right">
  	<img src="<?php echo bloginfo('template_directory'); ?>/images/activemark.jpg" class="footer-images" />
  	<img src="<?php echo bloginfo('template_directory'); ?>/images/asr.jpg" class="footer-images" />
  	<img src="<?php echo bloginfo('template_directory'); ?>/images/es.jpg" class="footer-images" />
  	<img src="<?php echo bloginfo('template_directory'); ?>/images/hst.jpg" class="footer-images" />
  	<img src="<?php echo bloginfo('template_directory'); ?>/images/saa.jpg" class="footer-images" />
  	</div>
</div>




 <!-- Row ending -->

<?php get_template_part('includes/content', 'footer'); ?>