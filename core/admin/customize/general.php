<?php

if (!function_exists('lookilite_admin_init')) {

	function lookilite_admin_init() {
		
		global $wp_version;

		$file_dir = get_template_directory_uri()."/core/admin/includes/";
	
		wp_enqueue_style ( 'lookilite_style', $file_dir.'css/theme.css' ); 
		wp_enqueue_script( 'lookilite_script', $file_dir.'js/theme.js',array('jquery'),'',TRUE ); 
		
		wp_enqueue_script( "jquery-ui-core", array('jquery'));
		wp_enqueue_script( "jquery-ui-tabs", array('jquery'));
	
	
	}
	
	add_action('admin_init', 'lookilite_admin_init');

}

?>