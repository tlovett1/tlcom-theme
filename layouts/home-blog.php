<div class="container">
	
    <div class="row" id="blog" >

	<?php if ( diarjolite_template('sidebar') <> "full" ) : ?>
        
        <div class="<?php echo diarjolite_template('span') .' '. diarjolite_template('sidebar'); ?>"> 
       
        	<div class="row"> 
        
    <?php 
	
		endif; 
	
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div <?php post_class(); ?> >
    
				<?php do_action('diarjolite_postformat'); ?>
        
                <div style="clear:both"></div>
            
			</div>
		
		<?php endwhile; else:  ?>

            <div <?php post_class(); ?> >
        
                <article class="article category">
                        
                    <div class="post-article">
        
                        <h1><?php _e( 'Content not found',"diarjolite" ) ?></h1>           
                        
                        <p> <?php _e( 'No article found in this blog.','diarjolite'); ?> </p>
        
                        <h2> <?php _e( 'What can i do?',"diarjolite" ) ?> </h2>           
        
                        <p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>"> <?php _e( 'Back to the homepage','diarjolite'); ?> </a> </p>
                      
                        <p> <?php _e( 'Make a search, from the below form:','diarjolite'); ?> </p>
                        
                        <section class="contact-form">
                        
                            <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                 <input type="text" value="<?php _e( 'Search', 'diarjolite' ) ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php _e( 'Search', 'diarjolite' ) ?>';}" onfocus="if (this.value == '<?php _e( 'Search', 'diarjolite' ) ?>') {this.value = '';}" class="input-search"/>
                                 <input type="submit" id="searchsubmit" class="button-search" value="<?php _e( 'Search', 'diarjolite' ) ?>" />
                            </form>
                            
                            <div class="clear"></div>
                            
                        </section>
        
                    </div>
         
               </article>
        
            </div>
	
		<?php endif; ?>
        
	<?php if ( diarjolite_template('sidebar') <> "full" ) : ?>
        
        </div>
        
    </div>
        
    <?php endif; ?>

	<?php if ( diarjolite_template('span') == "col-md-8" ) :  ?>

        <section id="sidebar" class="post-container col-md-4">
            <div class="sidebar-box">
            
				<?php if ( is_active_sidebar('home-sidebar-area') ) { 
                
                    dynamic_sidebar('home-sidebar-area');
                
                } else { 
                    
                    the_widget( 'WP_Widget_Archives','',
                    array('before_widget' => '<div class="post-article">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
    
                    the_widget( 'WP_Widget_Calendar',
                    array("title"=> __('Calendar',"diarjolite")),
                    array('before_widget' => '<div class="post-article">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
    
                    the_widget( 'WP_Widget_Categories','',
                    array('before_widget' => '<div class="post-article">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
                
                 } 
                 
                 ?>
            
            </div>
        </section>
    
	<?php endif; ?>
           
    </div>
    
    <?php get_template_part('pagination'); ?>

</div>