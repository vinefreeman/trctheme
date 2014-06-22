<?php 
	$format = get_post_format(); 
	if( false === $format ) 
		$format = 'standard';
?>
      
<div class="row">

  <div class="col-sm-8">
  
    <?php get_template_part('postformats/format', $format); ?>
    
  </div><!-- /.col-sm-8 -->
  
  <div class="col-sm-4 lp30">
  
     <?php 
      if( get_post_meta( $post->ID, '_ebor_portfolio_post_meta', true ) !=='on' )
        get_template_part('loop/content','metaportfolio'); 
     ?>
    <div class="divide5"></div>
    
    <h2 class="portfoliotitle"><?php the_title(); ?></h2>
    <?php 
        // Added for portfolio sharing beneath meta - new loop file to add widget under meta
        get_template_part('loop/content','sharingprojects');
        echo "<p>&nbsp;</p>";
    ?>
 <?php

      the_content();
      echo "<a href='" . get_option('home') . "/our-work/' title='' class='btn btn-primary'>Back to our work</a>";
      wp_link_pages();
    ?>

  
    
  </div><!-- /.col-sm-4 --> 
  
</div><!-- /.row --> 