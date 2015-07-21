<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
  
  
<div class="container">
<div id="wrap">
	<div class="header row">
		
  			<div class="col-md-4">
  			
 				  	<img src="<?php echo bloginfo('template_directory'); ?>/ass-logo.jpg" class="img-responsive" />
			</div>

				<div class="col-md-3 col-md-offset-5 headeraddress hidden-xs hidden-sm">
				<address>
					<p class="text-right"><img src="http://www.allsaints.stockport.sch.uk/wp-content/themes/All_sents/images/fb.png" />
					<img src="http://www.allsaints.stockport.sch.uk/wp-content/themes/All_sents/images/tw.png" />
					<br>Church Street, Heaton Norris<br>
					Stockport, Cheshire, SK4 1ND<br>
					<strong>Tel: 0161 285 7373</strong></p>
				</address>
				</div>
	
		
	</div> <!-- Header row ending -->
  
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
  
    <?php /* Primary navigation */
      wp_nav_menu( array(
      'menu' => 'top_menu',
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