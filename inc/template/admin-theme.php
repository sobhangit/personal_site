<h1>وب سایت شخصی سبحان کناری - صفحه تنظیمات</h1>
<?php settings_errors(); ?>

<?php

$firstName = get_option('first_name');
$lastName = get_option('last_name');

$fullname = $firstName . ' ' . $lastName;

$userDescription = get_option('description');

$picture = esc_attr(get_option('profile_picture'));

?>

<div class="author-preview">
	<div class="information">

		<div class="profile-image">
			<img src="<?php echo $picture; ?>">
		</div>

		<h2 class="fullname"><?php echo $fullname; ?></h2>
		<h3 class="description"><?php echo $userDescription; ?></h3>

	</div>
</div>

<form method="post" action="options.php" class="admin-author-form">
	<?php settings_fields('personalTheme-group-option'); ?>
	<?php do_settings_sections('sobhan_theme_setting'); ?>
	<?php submit_button( 'ذخیره تغییرات', 'primary', 'btnSubmit'); ?>
</form>
