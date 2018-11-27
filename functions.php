<?php 


//load Styles 

function theme_styles(){
	wp_enqueue_style('font-awesome_css', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style('bootstrap-rtl.min_css', get_template_directory_uri() . '/css/bootstrap-rtl.min.css' );
	wp_enqueue_style('bootstrap-rtl-hack_css', get_template_directory_uri() . '/css/bootstrap-rtl-hack.css' );
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts','theme_styles' );



//load scripts 

function theme_scripts(){

	wp_deregister_script('jquery' );
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', '','',true );
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap-rtl_js', get_template_directory_uri() . '/js/bootstrap-rtl.js', array('jquery'), false, true);
	wp_enqueue_script('scrollreveal.min_js', get_template_directory_uri() . '/js/scrollreveal.min.js', array('jquery'), false, true);
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery','bootstrap-rtl_js'), false, true);
	
}

add_action('wp_enqueue_scripts','theme_scripts' );



//Support & Create Menus

add_theme_support( 'menus' );

//Add Featured Image 

add_theme_support('post-thumbnails');

//add_theme_support('html5','search-form' );


function register_menus(){

	register_nav_menus(
		array(
			'primary' => __('منو اصلی')
		)
	 );

}

add_action('init','register_menus');


function register_widgets($name, $id, $description){

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( $name ),
			'id'            => $id,
			'description'   => $description,
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		);
	
		register_sidebar( $args );
	

}

register_widgets('Contact Us Widgets', 'contact-us-widgets', 'فرم تماس با ما');
register_widgets('Subscribers Widgets', 'subscribers-widgets', 'فرم تماس با ما');
register_widgets('Top Search Widgets', 'search-widgets', 'فرم تماس با ما');



function register_footer_widgets($name, $id, $description){

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( $name ),
			'id'            => $id,
			'description'   => $description,
			'class'         => 'widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3><hr>'
		);
	
		register_sidebar( $args );
	

}
register_footer_widgets('left footer Widgets', 'left-footer-widgets', 'فرم تماس با ما');
register_footer_widgets('center footer Widgets', 'center-footer-widgets', 'فرم تماس با ما');
register_footer_widgets('right footer Widgets', 'right-footer-widgets', 'فرم تماس با ما');


function register_blog_widgets($name, $id, $description){

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( $name ),
			'id'            => $id,
			'description'   => $description,
			'class'         => 'widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		);
	
		register_sidebar( $args );
	

}

//blog sidebar
register_blog_widgets('Blog Sidebar', 'blog-sidebar-widgets', 'فرم تماس با ما');



require get_template_directory() . '/inc/admin-functions.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/post-types.php';



?>