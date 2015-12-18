<?php 

function diarjolite_css_custom() { 

	echo '<style type="text/css">';

/* =================== BODY STYLE =================== */

	if ( (diarjolite_setting('diarjolite_full_image_background')) == "on" )
		
		echo "body.custombody {  -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}"; 

/* =================== END BODY STYLE =================== */

/* =================== BEGIN LOGO STYLE =================== */

	/* Logo Font Size */
	if (diarjolite_setting('diarjolite_logo_font_size')) 
		$logostyle .= "font-size:".esc_html(diarjolite_setting('diarjolite_logo_font_size')).";"; 
	
	if ($logostyle)
		echo '#logo a { '.$logostyle.' } ';

/* =================== END LOGO STYLE =================== */

/* =================== BEGIN NAV STYLE =================== */

	$navstyle = '';

	/* Nav  Font Size */
	if (diarjolite_setting('diarjolite_menu_font_size')) 
		$navstyle .= "font-size:".esc_html(diarjolite_setting('diarjolite_menu_font_size')).";"; 
	
	if ($navstyle)
		echo 'nav#mainmenu ul li a, nav#mainmenu ul ul li a { '.$navstyle.' } ';
		
/* =================== END NAV STYLE =================== */

/* =================== BEGIN CONTENT STYLE =================== */

	if (diarjolite_setting('diarjolite_content_font_size')) 
		echo ".post-article p, .post-article li, .post-article address, .post-article dd, .post-article blockquote, .post-article td, .post-article th, .textwidget, .toggle_container h5.element  { font-size:".esc_html(diarjolite_setting('diarjolite_content_font_size'))."}"; 
	

/* =================== END CONTENT STYLE =================== */

/* =================== START TITLE STYLE =================== */

	if (diarjolite_setting('diarjolite_h1_font_size')) 
		echo "h1 { font-size:".esc_html(diarjolite_setting('diarjolite_h1_font_size'))."; }"; 
	if (diarjolite_setting('diarjolite_h2_font_size')) 
		echo "h2 { font-size:".esc_html(diarjolite_setting('diarjolite_h2_font_size'))."; }"; 
	if (diarjolite_setting('diarjolite_h3_font_size')) 
		echo "h3 { font-size:".esc_html(diarjolite_setting('diarjolite_h3_font_size'))."; }"; 
	if (diarjolite_setting('diarjolite_h4_font_size')) 
		echo "h4 { font-size:".esc_html(diarjolite_setting('diarjolite_h4_font_size'))."; }"; 
	if (diarjolite_setting('diarjolite_h5_font_size')) 
		echo "h5 { font-size:".esc_html(diarjolite_setting('diarjolite_h5_font_size'))."; }"; 
	if (diarjolite_setting('diarjolite_h6_font_size')) 
		echo "h6 { font-size:".esc_html(diarjolite_setting('diarjolite_h6_font_size'))."; }"; 


/* =================== END TITLE STYLE =================== */

/* =================== END LINK STYLE =================== */

	if (diarjolite_setting('diarjolite_custom_css_code'))
		
		echo esc_html(diarjolite_setting('diarjolite_custom_css_code')); 

	echo '</style>';

}

add_action('wp_head', 'diarjolite_css_custom');

?>