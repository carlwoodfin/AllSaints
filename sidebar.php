<?php
/**
 * Sidebar template
 */

?>

<div id="sidebar">
   <ul>
      <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) :
      endif; ?>
   </ul>
</div>