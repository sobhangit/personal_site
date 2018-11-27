<?php

	function add_admin_menu(){
		add_menu_page( 'Sobhan Personal Website', 'وب سایت سبحان', 'manage_options', 'sobhan_theme_setting', 'add_admin_page_to_menu' , get_template_directory_uri() . '/images/logo.png', 81 );
		add_submenu_page( 'sobhan_theme_setting', 'وب سایت سبحان', 'عمومی', 'manage_options', 'sobhan_theme_setting', 'add_admin_page_to_menu' );
		add_submenu_page( 'sobhan_theme_setting', 'پشتیبانی از امکانات', 'پشتیبانی امکانات', 'manage_options','sobhan_theme_support', 'add_theme_support_page'  );
		add_submenu_page( 'sobhan_theme_setting', 'تنظیمات استایل', 'استایل سفارشی', 'manage_options', 'sobhan_theme_css_setting', 'add_to_admin_page' );

		//Active Custom setting
		add_action('admin_init','personalThme_Custome_setting' );
	}

	add_action('admin_menu', 'add_admin_menu' );

	function add_admin_page_to_menu() {
		require_once get_template_directory() . '/inc/template/admin-theme.php';
	}

	function add_theme_support_page(){
		require_once get_template_directory() . '/inc/template/admin-theme-support.php';
	}

	function add_to_admin_page() {

	}


	function personalThme_Custome_setting(){
		register_setting( 'personalTheme-group-option', 'profile_picture' );
		register_setting( 'personalTheme-group-option', 'first_name' );
		register_setting( 'personalTheme-group-option', 'last_name' );
		register_setting( 'personalTheme-group-option', 'description' );
		register_setting( 'personalTheme-group-option', 'company_name' );
		register_setting( 'personalTheme-group-option', 'googlePlus_id' );
		register_setting( 'personalTheme-group-option', 'twitter_id', 'twitter_username_sanitization' );
		register_setting( 'personalTheme-group-option', 'linkedin_id' );
		register_setting( 'personalTheme-group-option', 'telegram_id' );

		add_settings_section( 'author-general-setting', 'تنظیمات نویسنده', 'add_to_author_setting', 'sobhan_theme_setting' );

		add_settings_field( 'profile-picture', 'تصویر پروفایل', 'add_profile_picture', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'author-name', 'نام و نام خانوادگی', 'add_author_name', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'description', 'توضیحات', 'add_description', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'company-name', 'شرکت', 'add_company_name', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'googlePlus-id', 'گوگل پلاس', 'add_googlePlus_id', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'twitter-id', 'توییتر', 'add_twitter_id', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'linkedin-id', 'لینکداین', 'add_linkedin_id', 'sobhan_theme_setting', 'author-general-setting' );
		add_settings_field( 'telegram-id', 'تلگرام', 'add_telegram_id', 'sobhan_theme_setting', 'author-general-setting' );


		//post formats

		register_setting( 'sobhan-post-formats', 'post_formats' );
		register_setting( 'sobhan-post-formats', 'custom_header' );
		add_settings_section( 'post-format-section', 'انواع پست فرمت ها', 'post_format_section_callback', 'sobhan_theme_support' );
		add_settings_field( 'post-format-fields', 'پست فرمت ها', 'add_post_format_fields', 'sobhan_theme_support', 'post-format-section');
		add_settings_field( 'custome-header', 'شخصی سازی هدر', 'add_custom_header', 'sobhan_theme_support', 'post-format-section' );

	}

	//post format page

	function post_format_section_callback(){
		echo "می توانید فرمت ها را به صورت دلخواه فعال یا غیرفعال کنید.";
	}

	function add_post_format_fields(){
		$options = get_option('post_formats');
		$postFormats = array('aside','image','video','quote','link','gallery','status','audio','chat');
		$output = '';

		foreach($postFormats as $format) {
			$checked = ( @$options[$format]  ? 'checked' : ''); 
			$output .='<label><input id='.$format.' type="checkbox" name="post_formats['. $format .']" '.$checked.' />'. $format .'</label><br>';
		}

		

		//var_dump($options);

		echo $output;


	}

	function add_custom_header(){
		$header = get_option('custom_header');
		$checked = ( @$header ? 'checked' : ''); 
		echo "<input type='checkbox' ".$checked." name='custom_header'>";
	}

	function twitter_username_sanitization($input){
		$output = sanitize_text_field($input);
		$output = str_replace('@', '', $output);
		return $output;
	}

	function add_to_author_setting(){
		echo "در اینجا می توانید اطلاعات کلی نویسنده را شخصی سازی کنید";
	}

	function add_profile_picture(){
		$picture = esc_attr(get_option('profile_picture'));

		if(@$picture){
			echo "<input type='button' class='button button-secondary' value='تغییر عکس پروفایل' id='upload-button'><input type='hidden' name='profile_picture' value='".$picture."' id='profile-pic'><input type='button' class='button button-secondary' value='پاک کردن' id='remove-button' ";
		}else{
			echo "<input type='button' class='button button-secondary' value='بارگزاری عکس پروفایل' id='upload-button'><input type='hidden' name='profile_picture' value='".$picture."' id='profile-pic'><p class='description'>عکسی که برای پروفایل انتخاب می کنید باید طول و عرض یکسان داشته باشد.</p>";
		}

		
	}

	function add_author_name(){
		$firstName = get_option('first_name');
		$lastName = get_option('last_name');

		echo "<input type='text' value='". $firstName ."' name='first_name' placeholder='نام خود را اینجا وارد کنید'>";
		echo "<input type='text' value='". $lastName ."' name='last_name' placeholder='نام خانوادگی خود را اینجا وارد کنید'>";
	}

	function add_description(){
		$userDescription = get_option('description');
		echo "<input value='". $userDescription ."' name='description' placeholder='توضیحات'><p class='description'>توضیحاتی در مورد خود بنویسید این توضیحات می تواند مفید باشد</p>";
	}

	function add_company_name(){
		$companyName = get_option('company_name');
		echo "<input value='". $companyName ."' name='company_name' placeholder='نام شرکت خود را وارد کنید'>";
	}

	function add_googlePlus_id(){
		$googlePlusID = esc_attr(get_option('googlePlus_id'));
		echo "<input value='". $googlePlusID ."' name='googlePlus_id' placeholder='آیدی گوگل پلاس خود را وارد کنید'>";
	}

	function add_twitter_id(){
		$twitterID = esc_attr(get_option('twitter_id'));
		echo "<input value='". $twitterID ."' name='twitter_id' placeholder='آیدی توییتر خود را وارد کنید'><p class='description'>ایدی توییتر خود را بدون علامت @ وارد کنید</p>";
	}

	function add_linkedin_id(){
		$linkedinID = esc_attr(get_option('linkedin_id'));
		echo "<input value='". $linkedinID ."' name='linkedin_id' placeholder='آیدی لینکداین خود را وارد کنید'>";
	}

	function add_telegram_id(){
		$telegramID = esc_attr(get_option('telegram_id'));
		echo "<input value='". $telegramID ."' name='telegram_id' placeholder='آیدی تلگرام خود را وارد کنید'>";
	}






?>