<?php

if (!function_exists('diarjolite_customize_panel_function')) {

	function diarjolite_customize_panel_function() {
		
		$theme_panel = array ( 

			/* FULL IMAGE BACKGROUND */ 

			array(
				
				"label" => __( "Full Image Background",'diarjolite'),
				"description" => __( "Do you want to set a full background image? (After the upload, check 'Fixed', from the Background Attachment section)",'diarjolite'),
				"id" => "diarjolite_full_image_background",
				"type" => "select",
				"section" => "background_image",
				"options" => array (
				   "off" => __( "No",'diarjolite'),
				   "on" => __( "Yes",'diarjolite'),
				),
				
				"std" => "off",
			
			),

			/* START GENERAL SECTION */ 

			array( 
				
				"title" => __( "General",'diarjolite'),
				"description" => __( "General",'diarjolite'),
				"type" => "panel",
				"id" => "general_panel",
				"priority" => "10",
				
			),

			array( 

				"title" => __( "Load system",'diarjolite'),
				"type" => "section",
				"id" => "loadsystem_section",
				"panel" => "general_panel",
				"priority" => "11",

			),

			array(
				
				"label" => __( "Choose a load system",'diarjolite'),
				"description" => __( "Select a load system, if you've some problems with the theme (for example a blank page).",'diarjolite'),
				"id" => "diarjolite_skins",
				"type" => "select",
				"section" => "loadsystem_section",
				"options" => array (
				   "mode_a" => __( "Mode a",'diarjolite'),
				   "mode_b" => __( "Mode b",'diarjolite'),
				),
				
				"std" => "mode_a",
			
			),

			/* SKINS */ 

			array( 

				"title" => __( "Color Scheme",'diarjolite'),
				"type" => "section",
				"panel" => "general_panel",
				"priority" => "12",
				"id" => "colorscheme_section",

			),

			array(
				
				"label" => __( "Predefined Color Schemes",'diarjolite'),
				"description" => __( "Choose your Color Scheme",'diarjolite'),
				"id" => "diarjolite_skin",
				"type" => "select",
				"section" => "colorscheme_section",
				"options" => array (
				   "turquoise" => __( "Turquoise","diarjolite"),
				   "orange" => __( "Orange","diarjolite"),
				   "blue" => __( "Blue","diarjolite"),
				   "red" => __( "Red","diarjolite"),
				   "purple" => __( "Purple","diarjolite"),
				   "yellow" => __( "Yellow","diarjolite"),
				   "green" => __( "Green","diarjolite"),
				   "light_turquoise" => __( "Light & Turquoise","diarjolite"),
				   "light_orange" => __( "Light & Orange","diarjolite"),
				   "light_blue" => __( "Light & Blue","diarjolite"),
				   "light_red" => __( "Light & Red","diarjolite"),
				   "light_purple" => __( "Light & Purple","diarjolite"),
				   "light_yellow" => __( "Light & Yellow","diarjolite"),
				   "light_green" => __( "Light & Green","diarjolite"),
				   "white_turquoise" => __( "White & Turquoise",'diarjolite'),
				   "white_orange" => __( "White & Orange",'diarjolite'),
				   "white_blue" => __( "White & Blue",'diarjolite'),
				   "white_red" => __( "White & Red",'diarjolite'),
				   "white_purple" => __( "White & Purple",'diarjolite'),
				   "white_yellow" => __( "White & Yellow",'diarjolite'),
				   "white_green" => __( "White & Green",'diarjolite'),
				),
				
				"std" => "turquoise",
			
			),

			/* STYLES */ 

			array( 

				"title" => __( "Styles",'diarjolite'),
				"type" => "section",
				"id" => "styles_section",
				"panel" => "general_panel",
				"priority" => "14",

			),

			array( 

				"label" => __( "Custom css",'diarjolite'),
				"description" => __( "Insert your custom css code.",'diarjolite'),
				"id" => "diarjolite_custom_css_code",
				"type" => "custom_css",
				"section" => "styles_section",
				"std" => "",

			),

			/* LAYOUTS SECTION */ 

			array( 

				"title" => __( "Layouts",'diarjolite'),
				"type" => "section",
				"id" => "layouts_section",
				"panel" => "general_panel",
				"priority" => "15",

			),

			array(
				
				"label" => __("Home Blog Layout",'diarjolite'),
				"description" => __("If you've set the latest articles, for the homepage, choose a layout.",'diarjolite'),
				"id" => "diarjolite_home",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => __( "Full Width",'diarjolite'),
				   "left-sidebar" => __( "Left Sidebar",'diarjolite'),
				   "right-sidebar" => __( "Right Sidebar",'diarjolite'),
				),
				
				"std" => "right-sidebar",
			
			),
	

			array(
				
				"label" => __("Category Layout",'diarjolite'),
				"description" => __("Select a layout for category pages.",'diarjolite'),
				"id" => "diarjolite_category_layout",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => __( "Full Width",'diarjolite'),
				   "left-sidebar" => __( "Left Sidebar",'diarjolite'),
				   "right-sidebar" => __( "Right Sidebar",'diarjolite'),
				),
				
				"std" => "right-sidebar",
			
			),
	

			array(
				
				"label" => __("Search Layout",'diarjolite'),
				"description" => __("Select a layout for the search page.",'diarjolite'),
				"id" => "diarjolite_search_layout",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => __( "Full Width",'diarjolite'),
				   "left-sidebar" => __( "Left Sidebar",'diarjolite'),
				   "right-sidebar" => __( "Right Sidebar",'diarjolite'),
				),
				
				"std" => "right-sidebar",
			
			),

			/* LOGIN AREA SECTION */ 

			array( 

				"title" => __( "Login Area",'diarjolite'),
				"type" => "section",
				"id" => "login_area_section",
				"panel" => "general_panel",
				"priority" => "17",

			),

			array( 

				"label" => __( "Custom Logo",'diarjolite'),
				"description" => __( "Upload your custom logo, for the admin area.( Max 320px as width )",'diarjolite'),
				"id" => "diarjolite_login_logo",
				"type" => "upload",
				"section" => "login_area_section",
				"std" => "",

			),


			array( 

				"label" => __( "Height",'diarjolite'),
				"description" => __( "Insert the height of your custom logo, without “px” (for example 550 and not 550px).",'diarjolite'),
				"id" => "diarjolite_login_logo_height",
				"type" => "text",
				"section" => "login_area_section",
				"std" => "550",

			),

			/* HEADER AREA SECTION */ 

			array( 

				"title" => __( "Header",'diarjolite'),
				"type" => "section",
				"id" => "header_section",
				"panel" => "general_panel",
				"priority" => "18",

			),

			array( 

				"label" => __( "Custom Logo",'diarjolite'),
				"description" => __( "Upload your custom logo",'diarjolite'),
				"id" => "diarjolite_custom_logo",
				"type" => "upload",
				"section" => "header_section",
				"std" => "",

			),

			/* FOOTER AREA SECTION */ 

			array( 

				"title" => __( "Footer",'diarjolite'),
				"type" => "section",
				"id" => "footer_section",
				"panel" => "general_panel",
				"priority" => "19",

			),

			array( 

				"label" => __( "Copyright Text",'diarjolite'),
				"description" => __( "Insert your copyright text.",'diarjolite'),
				"id" => "diarjolite_copyright_text",
				"type" => "textarea",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Facebook Url",'diarjolite'),
				"description" => __( "Insert Facebook Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_facebook_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Twitter Url",'diarjolite'),
				"description" => __( "Insert Twitter Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_twitter_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Flickr Url",'diarjolite'),
				"description" => __( "Insert Flickr Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_flickr_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Google Url",'diarjolite'),
				"description" => __( "Insert Google Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_google_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Linkedin Url",'diarjolite'),
				"description" => __( "Insert Linkedin Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_linkedin_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Pinterest Url",'diarjolite'),
				"description" => __( "Insert Pinterest Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_pinterest_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Tumblr Url",'diarjolite'),
				"description" => __( "Insert Tumblr Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_tumblr_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Youtube Url",'diarjolite'),
				"description" => __( "Insert Youtube Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_youtube_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Skype Url",'diarjolite'),
				"description" => __( "Insert Skype ID (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_skype_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Instagram Url",'diarjolite'),
				"description" => __( "Insert Instagram Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_instagram_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Github Url",'diarjolite'),
				"description" => __( "Insert Github Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_github_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Xing Url",'diarjolite'),
				"description" => __( "Insert Xing Url (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_xing_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "WhatsApp number",'diarjolite'),
				"description" => __( "Insert WhatsApp number (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_whatsapp_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Email Address",'diarjolite'),
				"description" => __( "Insert Email Address (empty if you want to hide the button)",'diarjolite'),
				"id" => "diarjolite_footer_email_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array(
				
				"label" => __( "Feed Rss Button",'diarjolite'),
				"description" => __( "Do you want to display the Feed Rss button?",'diarjolite'),
				"id" => "diarjolite_footer_rss_button",
				"type" => "select",
				"section" => "footer_section",
				"options" => array (
				   "off" => __( "No",'diarjolite'),
				   "on" => __( "Yes",'diarjolite'),
				),
				
				"std" => "off",
			
			),

			/* TYPOGRAPHY SECTION */ 

			array( 
				
				"title" => __( "Typography",'diarjolite'),
				"description" => __( "Typography",'diarjolite'),
				"type" => "panel",
				"id" => "typography_panel",
				"priority" => "11",
				
			),

			/* LOGO */ 

			array( 

				"title" => __( "Logo",'diarjolite'),
				"type" => "section",
				"id" => "logo_section",
				"panel" => "typography_panel",
				"priority" => "10",

			),

			array( 

				"label" => __( "Font size",'diarjolite'),
				"description" => __( "Insert a size, for logo font (For example, 60px) ",'diarjolite'),
				"id" => "diarjolite_logo_font_size",
				"type" => "text",
				"section" => "logo_section",
				"std" => "60px",

			),

			/* MENU */ 

			array( 

				"title" => __( "Menu",'diarjolite'),
				"type" => "section",
				"id" => "menu_section",
				"panel" => "typography_panel",
				"priority" => "11",

			),

			array( 

				"label" => __( "Font size",'diarjolite'),
				"description" => __( "Insert a size, for menu font (For example, 14px) ",'diarjolite'),
				"id" => "diarjolite_menu_font_size",
				"type" => "text",
				"section" => "menu_section",
				"std" => "14px",

			),

			/* CONTENT */ 

			array( 

				"title" => __( "Content",'diarjolite'),
				"type" => "section",
				"id" => "content_section",
				"panel" => "typography_panel",
				"priority" => "12",

			),

			array( 

				"label" => __( "Font size",'diarjolite'),
				"description" => __( "Insert a size, for content font (For example, 14px) ",'diarjolite'),
				"id" => "diarjolite_content_font_size",
				"type" => "text",
				"section" => "content_section",
				"std" => "14px",

			),


			/* HEADLINES */ 

			array( 

				"title" => __( "Headlines",'diarjolite'),
				"type" => "section",
				"id" => "headlines_section",
				"panel" => "typography_panel",
				"priority" => "13",

			),

			array( 

				"label" => __( "H1 headline",'diarjolite'),
				"description" => __( "Insert a size, for for H1 elements (For example, 24px) ",'diarjolite'),
				"id" => "diarjolite_h1_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "24px",

			),

			array( 

				"label" => __( "H2 headline",'diarjolite'),
				"description" => __( "Insert a size, for for H2 elements (For example, 22px) ",'diarjolite'),
				"id" => "diarjolite_h2_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "22px",

			),

			array( 

				"label" => __( "H3 headline",'diarjolite'),
				"description" => __( "Insert a size, for for H3 elements (For example, 20px) ",'diarjolite'),
				"id" => "diarjolite_h3_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "20px",

			),

			array( 

				"label" => __( "H4 headline",'diarjolite'),
				"description" => __( "Insert a size, for for H4 elements (For example, 18px) ",'diarjolite'),
				"id" => "diarjolite_h4_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "18px",

			),

			array( 

				"label" => __( "H5 headline",'diarjolite'),
				"description" => __( "Insert a size, for for H5 elements (For example, 16px) ",'diarjolite'),
				"id" => "diarjolite_h5_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "16px",

			),

			array( 

				"label" => __( "H6 headline",'diarjolite'),
				"description" => __( "Insert a size, for for H6 elements (For example, 14px) ",'diarjolite'),
				"id" => "diarjolite_h6_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "14px",

			),
		);
		
		new diarjolite_customize($theme_panel);
		
	} 
	
	add_action( 'diarjolite_customize_panel', 'diarjolite_customize_panel_function', 10, 2 );

}

do_action('diarjolite_customize_panel');

?>