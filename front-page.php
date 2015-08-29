<?php

get_header();

get_template_part('includes/nav', 'header');
?>

<?php get_template_part('includes/content','slider'); ?>




<hr>

<?php get_template_part('includes/nav', 'buttons'); ?>

<hr>


<div class="row">
<div class="col-md-12">
<h5 class="year-work text-center">See some of our children's work. Pick a year!</h5>
</div>
</div>
<?php get_template_part( 'includes/nav', 'years' ); ?>


<div class="row">
<div class="col-sm-9">
</div>
  <div class="col-sm-3">

</div>
</div>

 <!-- Row ending -->

<?php get_footer(); ?>