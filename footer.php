
</div><!-- The container ending -->
<footer>
	<div class="container">
	<!-- <nav class="footer "> -->
	<div class="row">
  <hr>
<nav class="navbar navbar-footer navbar-bottom">
    <!-- Brand and toggle get grouped for better mobile display -->
    

	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
    <?php /* Primary navigation */
      wp_nav_menu( array(
      'menu' => 'Extra',
      'theme_location' => 'extra-menu',
      'depth' => 2,
      'container' => false,
      'menu_class' => 'nav nav-pills nav-justified footer-nav',
      //Process nav menu using our custom nav walker
      'walker' => new wp_bootstrap_navwalker())
      );
    ?>
      
    </div><!-- /.navbar-collapse -->

			
	</nav>
  <div class="footer bottom">
	<p class="text-center">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>.</p>
	</div>
  </div>
  </div>
</footer>
	

    
	<?php wp_footer(); ?>
  </body>
</html>