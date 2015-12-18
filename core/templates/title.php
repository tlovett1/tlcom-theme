<?php 

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

function diarjolite_get_title() {
	
	global $post;
	
	$title = get_the_title();
	
	if (!empty($title)) {
	
		if ( (is_home()) || (is_category()) || (is_search()) || (is_tag()) ){ ?>
			
            <div class="post-article post-title">	
                <h3 class="title icon-title"> 
                	<a href="<?php echo get_permalink($post->ID); ?>"> <?php echo $title; ?> </a>
                	<span><?php echo diarjolite_posticon(); ?></span>
                </h3>
			</div>
	
		<?php } else if (is_singular('post')) { ?>
			
            <div class="post-article post-title">	
                <h1 class="title icon-title"> 
                	<?php echo $title; ?>
                	<span><?php echo diarjolite_posticon(); ?></span>
                </h1>
			</div>
            
		<?php } else if ( (is_page()) || ( is_attachment() ) ) { ?>
			
            <div class="post-article post-title">	
                <h1 class="title"> <?php echo $title; ?> </h1>
			</div>
            
		<?php }
		
	}
	
}

?>