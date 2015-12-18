<div class="clear"></div>

<?php 

global $wp_query,$post;
$big = 999999999; 

if ( (is_category()) || (is_search()) || (is_tax()) || (is_tag()) || (is_month()) ) { 

    $paginate_links = paginate_links( array(
	
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'prev_text'    => '&laquo;',
		'next_text'    => '&raquo;',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'add_args' => false,

	));

} else if (is_home() ) { 

	$total = $wp_query->max_num_pages ; 
    $paginate_links = paginate_links( array(
		
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'prev_text'    => '&laquo;',
		'next_text'    => '&raquo;',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $total,
		'add_args' => false,

	));

} else if (is_page() ) { 

	$args = array('post_type' => 'post', 'paged' => diarjolite_paged(), 'posts_per_page' => get_option('posts_per_page'));
	$query = new WP_Query( $args );
	
    $paginate_links = paginate_links( array(
	
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'prev_text'    => '&laquo;',
		'next_text'    => '&raquo;',
		'current' => diarjolite_paged(),
		'total' => $query->max_num_pages ,
		'add_args' => false,

	));

}

if (!empty($paginate_links)) {echo '<div class="wp-pagenavi">' . $paginate_links . '</div>'; }

?>