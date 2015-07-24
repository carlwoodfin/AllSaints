    <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
   

    <div class="" id="bs-example-navbar-collapse-2">
    <?php /* Years Navigation */
      wp_nav_menu( array(
      'menu' => 'Years',
      'theme_location' => 'years-menu',
      'menu_class'      => 'nav nav-pills',
      'depth' => 2,
      'container' => false,
      //Process nav menu using our custom nav walker
      'walker' => new wp_bootstrap_navwalker())
      );
    ?>
      
    </div><!-- /.navbar-collapse -->
    </nav>
    </div>
    <hr>