<?php

add_action( 'init', 'add_custom_post_type' );

add_filter('manage_sobhan-contact-form_posts_columns','change_contact_columns_name' );
add_action('manage_sobhan-contact-form_posts_custom_column','change_contact_columns_result' , 10 , 2 );

function add_custom_post_type(){

		$labels = array(
			'name'                => 'پیام',
			'singular_name'       => 'پیام',
			'menu_name'           => 'پیام ها',
			'name_admin_bar'      => 'پیام'
		);
	
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 26,
			'menu_icon'           => 'dashicons-email-alt',
			'show_in_nav_menus'   => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title', 'editor', 'author'
				)
		);
	
		register_post_type( 'sobhan-contact-form', $args );
	
}

function change_contact_columns_name($columns){

	unset($columns['wp-statistics']);

	$newColumns = array();
	$newColumns['title']   = 'نام و نام خانوادگی';
	$newColumns['message'] = 'پیام';
	$newColumns['email']   = 'ایمیل';
	$newColumns['date']    = 'تاریخ';

	return $newColumns;

}

function change_contact_columns_result($column , $post_id){

	switch ($column) {
		case 'message':
			echo get_the_excerpt();
			break;

		case 'email':
			echo "this is email.";
			break;
	}

}


?>