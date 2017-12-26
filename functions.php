<?php
/**
 * include Custom Post Type
 */
require_once('library/cpt-books.php');

/**
 * register Sidebars
 */
    function mySidebars(){
        register_sidebar();
    }
    add_action('init','mySidebars'); //bei jeder Wordpress-Initianilisierung mySidebars aufrufen
/**
 * register menus
 */
    function myMenus(){
    	$args = array(
		    'hauptmenu'     => __('mein Hauptmenu'),
		    'fuss'          => __('meine Fusszeile')
	    );

        register_nav_menus($args);
    }
    add_action('init','myMenus'); // Menus registrieren

/**
 * Add custom Header img
 */
$args = array(
	'width'         => 980,
	'height'        => 219,
	'default-image' => get_template_directory_uri() . '/assets/img/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

/*
 * add post-images
 */
function klRdImages(){
	add_theme_support('post-thumbnails');
	add_image_size('kl-rd__postimage',185, 260, false);
}

add_action('init', 'klRdImages');

/*Add Styles*/
if (!is_admin()){
wp_enqueue_style('normalize', get_bloginfo('template_url').'/assets/css/normalize.css');
wp_enqueue_style('wp', get_bloginfo('template_url').'/assets/css/wp.css');
wp_enqueue_style('kl_rd_theme', get_bloginfo('template_url').'/assets/scss/kl_rd_theme.css');
wp_enqueue_script('kl_rd_func', get_bloginfo('template_url').'/assets/js/functions.js');
}
