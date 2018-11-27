<?php 


	function theme_admin_scripts($page_name){

		//echo $page_name;

		//adding becuase we don't what enqueue this codes in another pages	
		if ('toplevel_page_sobhan_theme_setting' != $page_name) {
			return;
			//exit from function and don't run scripts in below
		}

		wp_register_style('admin-styles', get_template_directory_uri() . '/css/admin-style.css', array(), '1.0.0', 'all' );
		wp_enqueue_style('admin-styles' );

		wp_enqueue_media();

		wp_register_script('admin-scripts', get_template_directory_uri() . '/js/admin-scripts.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script('admin-scripts' );
	}

	add_action('admin_enqueue_scripts', 'theme_admin_scripts' );

?>