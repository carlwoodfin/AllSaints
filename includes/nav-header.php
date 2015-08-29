<div class="row">
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     

    </div>

	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
    <?php /* Navigation */
      wp_nav_menu( array(
      'menu' => 'Nav',
      'theme_location' => 'navigation-menu',
      'depth' => 2,
      'container' => false,
      'menu_class' => 'nav navbar-nav',
      //Process nav menu using our custom nav walker
      'walker' => new wp_bootstrap_navwalker())
      );
    ?>
      
    </div><!-- /.navbar-collapse -->
</nav>
</div> <!-- Nav row ending -->