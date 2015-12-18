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
/* Header and fonts */
/*-----------------------------------------------------------------------------------*/ 

function diarjolite_header_content() {
	
	if ( ( is_page()) && (diarjolite_postmeta('diarjolite_slogan')) ) : ?>
	
		<section id="subheader">
		
			<div class="container">
			
				<div class="row">
				
					<div class="col-md-12">
					
						<p> <?php echo diarjolite_postmeta('diarjolite_slogan'); ?> </p>
                        
					</div>
					
				</div>
				
			</div>
			
		</section>
		
<?php 

	endif;

}

?>