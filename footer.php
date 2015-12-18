<div id="back-to-top"> <i class="fa fa-chevron-up"></i> </div>

<footer id="footer">
	
    <div class="container">

		<?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
        
			<section class="row widgets">
                    
				<?php dynamic_sidebar('bottom-sidebar-area') ?>
                    
            </section>
                
        <?php endif; ?>

        <div class="row" >
             
			<div class="col-md-12" >

                <div class="copyright">

                    <p>
                        
						&copy; Taylor Lovett 2015-2016
                    </p>

				</div>
                
                <?php do_action('diarjolite_socials'); ?>

                <div class="clear"></div>
                
			</div>
                
		</div>
        
	</div>
    
</footer>

<?php wp_footer() ?>  
 
</body>

</html>