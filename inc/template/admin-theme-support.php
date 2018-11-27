<h1>وب سایت شخصی سبحان کناری - فرمت ها</h1>
<?php settings_errors(); ?>

<?php

//$picture = esc_attr(get_option('profile_picture'));

?>


<form method="post"  action="options.php" class="admin-author-form">
	<?php 
		settings_fields('sobhan-post-formats');
		do_settings_sections('sobhan_theme_support');
	 ?>
	<?php submit_button(); ?>

</form>
