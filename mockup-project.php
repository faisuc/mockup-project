<?php
/*
Plugin Name: Mockup Project
Plugin URI: http://www.pluginuri.com
Description: Mockup Project
Version: 1.0
Author: Neil Carlo Sucuangco
Author URI: http://www.authoruri.com
*/

if ( ! defined( 'ABSPATH' ) )
{
	exit;
}


add_action('admin_menu', 'mockup_menu_pages');
function mockup_menu_pages(){
    add_menu_page('Pure Theme', 'Pure Theme', 'manage_options', 'mockup-menu', 'mp_mockup_menu_output' , '' , 59 );
    add_submenu_page('mockup-menu', 'Home Page Slider', 'Home Page Slider', 'manage_options', 'homepage-slider' , 'mp_homepage_slider' );
    add_submenu_page('mockup-menu', 'Home Page Content Sections', 'Home Page Content Sections', 'manage_options', 'homepage-content-sections' , 'mp_homepage_content_sections' );
    add_submenu_page('mockup-menu', 'Contact Form', 'Contact Form', 'manage_options', 'contact-form' , 'mp_contact_form' );
}

if ( is_admin() )
{
	if ( ! function_exists('mp_mockup_menu_output') )
	{
		function mp_mockup_menu_output()
		{
			require_once dirname( __FILE__ ) . '/admin/pure-theme.php';
		}
	}

	if ( ! function_exists('mp_homepage_slider') )
	{
		function mp_homepage_slider()
		{
			require_once dirname( __FILE__ ) . '/admin/homepage_slider.php';
		}
	}

	if ( ! function_exists('mp_homepage_content_sections') )
	{
		function mp_homepage_content_sections()
		{
			require_once dirname( __FILE__ ) . '/admin/homepage_content_sections.php';
		}
	}

	if ( ! function_exists('mp_contact_form') )
	{
		function mp_contact_form()
		{
			require_once dirname( __FILE__ ) . '/admin/contact_form.php';
		}
	}
}