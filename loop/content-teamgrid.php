<li id="team-<?php the_ID(); ?>" <?php post_class('item ' . ebor_the_isotope_terms() ); ?>>

	<?php 
		echo '<figure class="icon-overlay medium icn-link"><a href="'. get_permalink() .'">';
		if (has_post_thumbnail()){
		the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-circle')); 
	} else {
		echo "<img src='http://files.redheadmedia.co.uk/clients/trc/wp/wp-content/uploads/2014/06/dots-hold-staff.jpg' class='img-responsive img-circle' alt='TRC' />";
	}
		//was index thumbail type
		echo '</a></figure>';
	?>
	
	<div class="image-caption">
		<?php 
			//put staff name across two lines
			$staffName = get_the_title();
			$twolines = explode (" ", $staffName);
			?>
			<h3><a href="'<?php get_permalink() ?>"><?php echo $twolines[0] . "<br />" .  $twolines[1]; ?></a></h3>
			<?php
			
			//the_title('<h3><a href="'. get_permalink() .'">','</a></h3>'); 
			echo '<span class="meta">'. get_post_meta( $post->ID, '_ebor_the_job_title', true ) .'</span>';
		?>
	</div>
    
</li>