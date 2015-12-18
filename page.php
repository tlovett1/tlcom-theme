<?php 

	/**
	 * Wp in Progress
	 * 
	 * @author WPinProgress
	 *
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */

	get_header(); 
	diarjolite_header_content();

?> 

<div class="container content">
	
    <div class="row">
       
        <div class="<?php echo diarjolite_template('span') . " " . diarjolite_template('sidebar'); ?>">
        	
            <div class="row">
        
                <article <?php post_class(); ?> >
                
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
                    <?php do_action('diarjolite_postformat'); ?> 
        
					<?php wp_link_pages(array('before' => '<div class="wip-pagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>') ); ?>

                    <?php endwhile; endif;?>
            
                </article>
        
                <?php comments_template(); ?>

			</div>
        
        </div>

		<?php get_sidebar(); ?>

    </div>
    
</div>

<?php get_footer(); ?>