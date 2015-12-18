<?php get_header(); ?>

<!-- start content -->

<div class="container">
	
    <div class="row">
    
        <article class="post-container col-md-12">
          
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php diarjolite_get_title(); ?>

            	<div class="post-article attachment">

                    <p> 
                    
                        <?php if (wp_attachment_is_image($post->id)) {
                            $att_image = wp_get_attachment_image_src( $post->id, "blog");
                        ?>
                            <a data-rel="prettyPhoto"  href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
                            </a>
                            
                        <?php } else { ?>
                        
                            <a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                            </a>
        
        
                        <?php } ?>
                    
                    </p>
                
                </div>
        
            <div style="clear:both"></div>
    
		<?php endwhile; endif;?>

        </article>
        
	</div>
    
</div>

<?php get_footer(); ?>