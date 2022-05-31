<?php
function insert_jquery()
{
	wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts', 'insert_jquery', 1);



add_theme_support('post-thumbnails');


function custom_excerpt_length($length)
{
	return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


function akamax_register_nav_menu()
{
    register_nav_menus(array(
        'main-menu' => __('Main menu', 'text_domain')
    ));
}
add_action('after_setup_theme', 'akamax_register_nav_menu', 0);