<?php

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('diarjolite_excerpt_function')) {

	function diarjolite_excerpt_function() {

		global $post,$more;
	
		$more = 0;
		
		if ($pos=strpos($post->post_content, '<!--more-->')): 
	
			$output = '<p>'.strip_tags(get_the_content()).'<a class="more" href="'.get_permalink($post->ID).'" title="More"> [...] </a></p>';
	
		else:
	
			$output = '<p>'.get_the_excerpt().'<a class="more" href="'.get_permalink($post->ID).'" title="More"> [...] </a></p>';
	
		endif;
		
		echo $output;
	
	}
	
	add_action( 'diarjolite_excerpt','diarjolite_excerpt_function', 10, 2 );

}

?>