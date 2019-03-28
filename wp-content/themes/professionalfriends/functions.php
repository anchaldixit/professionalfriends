<?php

function theme_name_scripts(){
	$v=5.0;

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), $v);
	wp_enqueue_style( 'style1', get_template_directory_uri() . '/css/main.css',array(), $v);
	wp_enqueue_script('jquery');
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/ui.js', array('jquery'), $v);
}
add_action("init","theme_name_scripts");
	function owt_theme_menus(){
		register_nav_menus(array(
		"header"=>"header Menu",
		"footer"=> "footer Menu"
		));
	}
	add_action("init","owt_theme_menus");
 ?>
