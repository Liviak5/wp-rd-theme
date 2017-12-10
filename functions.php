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

wp_enqueue_style('normalize', get_bloginfo('template_url').'/assets/css/normalize.css');
wp_enqueue_style('wp', get_bloginfo('template_url').'/assets/css/wp.css');
wp_enqueue_style('kl_rd_theme', get_bloginfo('template_url').'/assets/css/kl_rd_theme.css');
