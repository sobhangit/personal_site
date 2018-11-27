<?php

//add new post format to theme if is existe
$option = get_option('post_formats');
$postFormats = array('aside','image','video','quote','link','gallery','status','audio','chat');
$args = array();
foreach($postFormats as $format){
	$args[] = (@$option[$format] ? $format : '');
}

if(!empty($option)){
	add_theme_support('post-formats', $args );
}

$header = get_option('custom_header');
if (@$header) {
	add_theme_support('custom-header');
}

?>