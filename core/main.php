<?php

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @theme Sueva
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/*-----------------------------------------------------------------------------------*/
/* POST CLASS */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('diarjolite_post_class')) {

	function diarjolite_post_class($classes) {
	
		$classes[] = 'post-container col-md-12';
			
		return $classes;
		
	}
	
	add_filter('post_class', 'diarjolite_post_class');

}

/*-----------------------------------------------------------------------------------*/
/* BODY CLASS */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('diarjolite_body_class')) {
	
	function diarjolite_body_class($classes) {
	
		global $wp_customize;

		$classes[] = 'custombody';
	
		if ( isset( $wp_customize ) ) :

			$classes[] = 'customizer_active';
				
		endif;
		
		return $classes;
		
	}
	
	add_filter('body_class', 'diarjolite_body_class');

}

/*-----------------------------------------------------------------------------------*/
/* TAG TITLE */
/*-----------------------------------------------------------------------------------*/  

if ( ! function_exists( '_wp_render_title_tag' ) ) {

	function diarjolite_title( $title, $sep ) {
		
		global $paged, $page;
	
		if ( is_feed() )
			
			return $title;
	
		$title .= get_bloginfo( 'name' );
	
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'diarjolite' ), max( $paged, $page ) );
	
		return $title;
		
	}

	add_filter( 'wp_title', 'diarjolite_title', 10, 2 );

	function diarjolite_add_title() {
		
?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>ggg

<?php

	}

	add_action( 'wp_head', 'diarjolite_add_title' );

}

/*-----------------------------------------------------------------------------------*/
/* REQUIRE FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_require')) {

	function diarjolite_require($folder) {
	
		if (isset($folder)) : 
	
			if ( ( !diarjolite_setting('diarjolite_loadsystem') ) || ( diarjolite_setting('diarjolite_loadsystem') == "mode_a" ) ) {
		
				$folder = dirname(dirname(__FILE__)) . $folder ;  
				
				$files = scandir($folder);  
				  
				foreach ($files as $key => $name) {  
					if (!is_dir( $name )) { 
						require_once $folder . $name;
					} 
				}  
			
			} else if ( diarjolite_setting('diarjolite_loadsystem') == "mode_b" ) {
	
	
				$dh  = opendir(get_template_directory().$folder);
				
				while (false !== ($filename = readdir($dh))) {
				   
					if ( strlen($filename) > 2 ) {
					require_once get_template_directory()."/".$folder.$filename;
					}
				}
			}
		
		endif;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* SCRIPTS FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_enqueue_script')) {

	function diarjolite_enqueue_script($folder) {
	
		if (isset($folder)) : 
	
			if ( ( !diarjolite_setting('diarjolite_loadsystem') ) || ( diarjolite_setting('diarjolite_loadsystem') == "mode_a" ) ) {
			
				$dir = dirname(dirname(__FILE__)) . $folder ;  
				
				$files = scandir($dir);  
				  
				foreach ($files as $key => $name) {  
					if (!is_dir( $name )) { 
						
						wp_enqueue_script( 'diarjolite_'. str_replace('.js','',$name), get_template_directory_uri() . $folder . "/" . $name , array('jquery'), FALSE, TRUE ); 
						
					} 
				}  
			
			} else if ( diarjolite_setting('diarjolite_loadsystem') == "mode_b" ) {
	
				$dh  = opendir(get_template_directory().$folder);
				
				while (false !== ($filename = readdir($dh))) {
				   
					if ( strlen($filename) > 2 ) {
							wp_enqueue_script( 'diarjolite_'. str_replace('.js','',$filename), get_template_directory_uri() . $folder . "/" . $filename , array('jquery'), FALSE, TRUE ); 
					}
				}
		
			}
			
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* STYLES FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_enqueue_style')) {

	function diarjolite_enqueue_style($folder) {
	
		if (isset($folder)) : 
	
			if ( ( !diarjolite_setting('diarjolite_loadsystem') ) || ( diarjolite_setting('diarjolite_loadsystem') == "mode_a" ) ) {
			
				$dir = dirname(dirname(__FILE__)) . $folder ;  
				
				$files = scandir($dir);  
				  
				foreach ($files as $key => $name) {  
					
					if (!is_dir( $name )) { 
						
						wp_enqueue_style( 'diarjolite_'. str_replace('.css','',$name), get_template_directory_uri() . $folder . "/" . $name ); 
						
					} 
				}  
			
			
			} else if ( diarjolite_setting('diarjolite_loadsystem') == "mode_b" ) {
	
			
				$dh  = opendir(get_template_directory().$folder);
				
				while (false !== ($filename = readdir($dh))) {
				   
					if ( strlen($filename) > 2 ) {
							wp_enqueue_style( 'diarjolite_'. str_replace('.css','',$filename), get_template_directory_uri() . $folder . "/" . $filename ); 
					}
				}
			
	
			}
		
		endif;
	
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* REQUEST FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_setting')) {
	
	function diarjolite_setting($id) {
		
		$diarjolite_setting = get_theme_mod($id);
			
		if(isset($diarjolite_setting))
			
			return $diarjolite_setting;
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* POST META */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_postmeta')) {

	function diarjolite_postmeta($id) {
	
		global $post;
		
		if (!is_404()) {
			$val = get_post_meta( $post->ID , $id, TRUE);
			if(isset($val))
			return $val;
		} else {
			return null;
		}
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* POST ICON */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_posticon')) {

	function diarjolite_posticon() {
	
		$icons = array ("video" => "fa fa-film" , "gallery" => "fa fa-camera" , "audio" => "fa fa-music" , "aside" => "fa fa-file-text-o" , "link" => "fa fa-link" , "quote" => "fa fa-quote-left" );
	
		if (get_post_format()) { 
			$icon = '<i class="'.$icons[get_post_format()].'"></i>'; 
		} else {
			$icon = '<i class="fa fa-pencil-square-o"></i>'; 
		}
	
		return $icon;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* Content template */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_template')) {

	function diarjolite_template($id) {
	
		$template = array ("full" => "col-md-12" , "left-sidebar" => "col-md-8" , "right-sidebar" => "col-md-8" );
	
		$span = $template["right-sidebar"];
		$sidebar =  "right-sidebar";
	
		if  ( ( (is_category()) || (is_tag()) || (is_tax()) || (is_month() ) ) && (diarjolite_setting('diarjolite_category_layout')) ) {
			
			$span = $template[diarjolite_setting('diarjolite_category_layout')];
			$sidebar =  diarjolite_setting('diarjolite_category_layout');
				
		} else if ( (is_home()) && (diarjolite_setting('diarjolite_home')) ) {
			
			$span = $template[diarjolite_setting('diarjolite_home')];
			$sidebar =  diarjolite_setting('diarjolite_home');
			
		} else if ( (is_search()) && (diarjolite_setting('diarjolite_search_layout')) ) {
			
			$span = $template[diarjolite_setting('diarjolite_search_layout')];
			$sidebar =  diarjolite_setting('diarjolite_search_layout');
			
		} else if ( ( (is_single()) || (is_page()) ) && (diarjolite_postmeta('diarjolite_template')) ) {
			
			$span = $template[diarjolite_postmeta('diarjolite_template')];
			$sidebar =  diarjolite_postmeta('diarjolite_template');
				
		}
	
		return ${$id};
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* GET PAGED */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_paged')) {

	function diarjolite_paged() {
		
		if ( get_query_var('paged') ) {
		
			$paged = get_query_var('paged');
		
		} elseif ( get_query_var('page') ) {
		
			$paged = get_query_var('page');
		
		} else {
		
			$paged = 1;
		
		}
		
		return $paged;
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* PRETTYPHOTO */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('diarjolite_prettyPhoto')) {

	function diarjolite_prettyPhoto( $html, $id, $size, $permalink, $icon, $text ) {
		
		if ( ! $permalink )
		
			return str_replace( '<a', '<a data-rel="prettyPhoto" ', $html );
		
		else
		
			return $html;
		
		}
	
	add_filter( 'wp_get_attachment_link', 'diarjolite_prettyPhoto', 10, 6);
	
}

/*-----------------------------------------------------------------------------------*/
/* Excerpt more */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('diarjolite_hide_excerpt_more')) {
	
	function diarjolite_hide_excerpt_more() {
	
		return '';
	
	}
	
	add_filter('the_content_more_link', 'diarjolite_hide_excerpt_more');
	add_filter('excerpt_more', 'diarjolite_hide_excerpt_more');

}

/*-----------------------------------------------------------------------------------*/
/* REMOVE CATEGORY LIST REL */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('diarjolite_remove_category_list_rel')) {
	
	function diarjolite_remove_category_list_rel($output) {
	
		$output = str_replace('rel="category"', '', $output);
		return $output;
	
	}
	
	add_filter('wp_list_categories', 'diarjolite_remove_category_list_rel');
	add_filter('the_category', 'diarjolite_remove_category_list_rel');
	
}

/*-----------------------------------------------------------------------------------*/
/* REMOVE THUMBNAIL DIMENSION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_remove_thumbnail_dimensions')) {

	function diarjolite_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
		
		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
		return $html;
	
	}
	
	add_filter( 'post_thumbnail_html', 'diarjolite_remove_thumbnail_dimensions', 10, 3 );
	
}

/*-----------------------------------------------------------------------------------*/
/* REMOVE CSS GALLERY */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_my_gallery_style')) {
	
	function diarjolite_my_gallery_style() {
		
		return "<div class='gallery'>";
	
	}
	
	add_filter( 'gallery_style', 'diarjolite_my_gallery_style', 99 );

}

/*-----------------------------------------------------------------------------------*/
/* GET ARCHIVE TITLE */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_get_archive_title')) {

	function diarjolite_get_archive_title() {
		
		if ( get_the_archive_title()  && ( get_the_archive_title() <> 'Archives' ) ) :
		
			return get_the_archive_title();
		
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* LOGIN AREA */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'diarjolite_custom_login_logo' ) ) {
 
	function diarjolite_custom_login_logo() { 
	
		if ( diarjolite_setting('diarjolite_login_logo') ) : ?>
	
			<style type="text/css">

				body.login div#login h1 a {
					background-image: url('<?php echo esc_url(diarjolite_setting('diarjolite_login_logo')); ?>');
					-webkit-background-size: inherit;
					background-size: inherit ;
					width:100%;
					height:<?php echo diarjolite_setting('diarjolite_login_logo_height'); ?>px;
				}
				
			</style>
		
	<?php 
	
		endif;
	
	}
	
	add_action( 'login_enqueue_scripts', 'diarjolite_custom_login_logo' );

}

/*-----------------------------------------------------------------------------------*/
/* STYLES AND SCRIPTS */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('diarjolite_scripts_styles')) {

	function diarjolite_scripts_styles() {
	
		diarjolite_enqueue_style('/inc/css');

		if ( ( diarjolite_setting('diarjolite_skin') ) && ( diarjolite_setting('diarjolite_skin') <> "turquoise" ) ):
	
			wp_enqueue_style( 'diarjolite-' . diarjolite_setting('diarjolite_skin') , get_template_directory_uri() . '/inc/skins/' . diarjolite_setting('diarjolite_skin') . '.css' ); 
		
		endif;

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	
		wp_enqueue_script( "jquery-ui-core", array('jquery'));
		wp_enqueue_script( "jquery-ui-tabs", array('jquery'));

		wp_enqueue_style( 'diarjolite-style', get_stylesheet_uri(),array() );

		diarjolite_enqueue_script('/inc/js');
		
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Delius+Swash+Caps|Fjalla+One|Roboto+Slab:400,300,100,700' );
		
	}
	
	add_action( 'wp_enqueue_scripts', 'diarjolite_scripts_styles' );
	
}

/*-----------------------------------------------------------------------------------*/
/* THEME SETUP */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('diarjolite_setup')) {

	function diarjolite_setup() {
	
		add_theme_support( 'post-formats', array( 'aside','gallery','quote','video','audio','link' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'title-tag' );

		add_image_size( 'blog', 940,629, TRUE ); 
		
		add_image_size( 'large', 449,304, TRUE ); 
		add_image_size( 'medium', 290,220, TRUE ); 
		add_image_size( 'small', 211,150, TRUE ); 
	
		register_nav_menu( 'main-menu', 'Main menu' );

		load_theme_textdomain("diarjolite", get_template_directory() . '/languages');

		add_theme_support( 'custom-background', array(
			'default-color' => 'f3f3f3'
		) );
	
		if ( ! isset( $content_width ) )
			$content_width = 940;

		diarjolite_require('/core/classes/');
		diarjolite_require('/core/admin/customize/');
		diarjolite_require('/core/templates/');
		diarjolite_require('/core/functions/');
		diarjolite_require('/core/metaboxes/');

	}
	
	add_action( 'after_setup_theme', 'diarjolite_setup' );

}

?>