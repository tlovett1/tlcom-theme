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

/*-----------------------------------------------------------------------------------*/
/* Socials */
/*-----------------------------------------------------------------------------------*/ 

function diarjolite_socials_functions() {
	
	$socials = array ( 
		"fa fa-facebook" => "facebook" , 
		"fa fa-twitter" => "twitter" ,
		"fa fa-flickr" => "flickr" ,
		"fa fa-google-plus" => "google" ,
		"fa fa-linkedin" => "linkedin" ,
		"fa fa-pinterest" => "pinterest" ,
		"fa fa-tumblr" => "tumblr" ,
		"fa fa-youtube" => "youtube" ,
		"fa fa-skype" => "skype" ,
		"fa fa-instagram" => "instagram" ,
		"fa fa-github" => "github" ,
		"fa fa-xing" => "xing" ,
		"fa fa-whatsapp" => "whatsapp" ,
		"fa fa-envelope" => "email" ,
	);
	
	$i = 0;
	$html = "";
	
	foreach ( $socials as $social_icon => $social_name) { 
	
	
		if (diarjolite_setting('diarjolite_footer_'.$social_name.'_button')): 
			$i++;	
            $html.= '<a href="'.esc_url(diarjolite_setting('diarjolite_footer_'.$social_name.'_button')).'" target="_blank" class="social"> <i class="'.$social_icon.'" ></i> </a> ';
		endif;
		
	}
	
	if (diarjolite_setting('diarjolite_footer_rss_button') == "on"): 
		$i++;	
		$html.= '<a href="'. esc_url(get_bloginfo('rss2_url')). '" title="Rss" class="social rss"> <i class="fa fa-rss" ></i>  </a> ';
	endif; 
		
	if ( $i > 0 ) {
		
	?>

    <div class="socials">
			
		<?php echo $html; ?>
                        
	</div>

	<?php

	}
	
}

add_action( 'diarjolite_socials', 'diarjolite_socials_functions', 10, 2 );

?>