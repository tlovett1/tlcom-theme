<?php get_header(); ?>

<div class="container">
	
    <div class="row">
       
        <div class="<?php echo diarjolite_template('span') . " " . diarjolite_template('sidebar'); ?>">
        	
            <div class="row">
        
                <article <?php post_class(); ?> >
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    
                        do_action('diarjolite_postformat');
            
                    ?>
                        
                    <div style="clear:both"></div>
                    
                </article>
        
                <?php comments_template(); ?>

			</div>
        
        </div>

		<?php get_sidebar(); ?>

        <?php endwhile; get_template_part('pagination'); endif;?>
           
    </div>
    
</div>

<?php get_footer(); ?>