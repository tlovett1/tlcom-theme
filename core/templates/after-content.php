<?php 

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

function diarjolite_after_content_function() {

	if ((is_home()) || (is_category()) || (is_search()) || (is_tag()) || ( (is_page()) && (get_post_type() <> "page")) ):
		
		do_action('diarjolite_excerpt');
		 
	?>

        <div class="post-info">
            <div class="left"> <?php echo get_the_date('m.d.Y'); ?> </div>
            <div class="right"> <?php the_category(', '); ?> </div>
        </div>
            
        <div class="clear"></div>

	<?php else: 
		
		if (is_single()) {
	
	?>

    	<div class="line"> <span> <?php echo __( "On ","diarjolite") . get_the_date() . __( " by ","diarjolite") . get_the_author(); ?> </span> </div>

	<?php
	
		}
	
		the_content();

		echo '<div class="clear"></div>';

		if (get_post_type() == "post") { 
		
	?>
        <div class="post-info">
            <div class="left"> <?php the_category(', '); ?> </div>
            <div class="right"> <?php the_tags( 'Tags: ', ', ', '' ); ?>  </div>
        </div>
            
        <div class="clear"></div>

    <?php
		
		}
		
	endif; ?>

<?php

} 

add_action( 'diarjolite_after_content', 'diarjolite_after_content_function', 10, 2 );

?>