<?php


	   /**
		* Displays a navigation menu
		* @param array $args Arguments
		*/
		$args = array(
			'menu' => 'primary',
			'menu_class' => 'nav navbar-nav navbar-right',
			'container' => false
			
		);
	
		wp_nav_menu( $args );


?>