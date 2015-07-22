<nav class="navbar navbar-years">
    <!-- Brand and toggle get grouped for better mobile display -->
    

	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
    <?php /* Years Navigation */
      wp_nav_menu( array(
      'menu' => 'Years',
      'theme_location' => 'years-menu',
      'depth' => 2,
      'container' => false,
      'menu_class' => 'nav nav-pills nav-justified years-nav',
      //Process nav menu using our custom nav walker
      'walker' => new wp_bootstrap_navwalker())
      );
    ?>
      
    </div><!-- /.navbar-collapse -->

			
	</nav>