<?php

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

$diarjolite_new_metaboxes = new diarjolite_metaboxes ('post', array (

array( "name" => "Navigation",  
       "type" => "navigation",  
       "item" => array( "setting" => __( "Setting","diarjolite")),   
       "start" => "<ul>", 
       "end" => "</ul>"),  

array( "type" => "begintab",
	   "tab" => "setting",
	   "element" =>

		array( "name" => __( "Setting","diarjolite"),
			   "type" => "title",
			  ),

		array( "name" => __( "Template","diarjolite"),
			   "desc" => __( "Select a template for this page","diarjolite"),
			   "id" => "diarjolite_template",
			   "type" => "select",
			   "options" => array(
				   "full" => __( "Full Width","diarjolite"),
				   "left-sidebar" =>  __( "Left Sidebar","diarjolite"),
				   "right-sidebar" => __( "Right Sidebar","diarjolite"),
			  ),
			  
			  "std" => "right-sidebar"
			  
		),
			
),

array( "type" => "endtab"),

array( "type" => "endtab")
)

);


?>