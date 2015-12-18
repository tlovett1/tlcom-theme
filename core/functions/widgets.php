<?php

if (!function_exists('diarjolite_loadwidgets')) {

	function diarjolite_loadwidgets() {

		register_sidebar(array(
		
			'name' => __('Sidebar','diarjolite'),
			'id'   => 'side-sidebar-area',
			'description' => __('This sidebar will be shown after the content.','diarjolite'),
			'before_widget' => '<div class="post-article">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(

			'name' => __('Home Sidebar','diarjolite'),
			'id'   => 'home-sidebar-area',
			'description' => __('This sidebar will be shown in the homepage.','diarjolite'),
			'before_widget' => '<div class="post-article">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(

			'name' => __('Category Sidebar','diarjolite'),
			'id'   => 'category-sidebar-area',
			'description' => __('This sidebar will be shown at the side of content.','diarjolite'),
			'before_widget' => '<div class="post-article">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(

			'name' => __('Bottom Sidebar','diarjolite'),
			'id'   => 'bottom-sidebar-area',
			'description' => __('This sidebar will be shown at the bottom of page.','diarjolite'),
			'before_widget' => '<div class="col-md-4 widget-box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

	}

	add_action( 'widgets_init', 'diarjolite_loadwidgets' );

}

?>