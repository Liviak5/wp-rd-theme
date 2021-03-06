<?php
/**
 * include Custom Post Type
 */
require_once( 'library/cpt-books.php' );
require_once( 'library/cpt-storytelling.php' );
require_once( 'library/class-foundationpress-comments.php' );

/**
 * register Sidebars
 */
function mySidebars() {
	register_sidebar();
}

add_action( 'init', 'mySidebars' ); //bei jeder Wordpress-Initianilisierung mySidebars aufrufen
/**
 * register menus
 */
function myMenus() {
	$args = array(
		'hauptmenu' => __( 'mein Hauptmenu' ),
		'fuss'      => __( 'meine Fusszeile' )
	);

	register_nav_menus( $args );
}

add_action( 'init', 'myMenus' ); // Menus registrieren

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

/**
 * Add custom Background Img
 */
$args = array(
	'default-image' => get_template_directory_uri() . '/assets/img/himmel_hell.jpg',
	'uploads'       => true
);
add_theme_support( 'custom-background', $args );

/*
 * add post-images
 */
function klRdImages() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'kl-rd__postimage', 185, 260, false );
}

add_action( 'init', 'klRdImages' );

/*Add Styles*/
if ( ! is_admin() ) {
	wp_enqueue_style( 'slickcss', get_bloginfo( 'template_url' ) . '/assets/css/slick.css' );
	wp_enqueue_style( 'slicktheme', get_bloginfo( 'template_url' ) . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'kl_rd_theme', get_bloginfo( 'template_url' ) . '/assets/css/kl_rd_theme.css' );
}

function slick_slider_js() {
	wp_enqueue_script( 'slick_js', get_bloginfo( 'template_url' ) . '/assets/js/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'slickinit', get_bloginfo( 'template_url' ) . '/assets/js/slick-init.js' );
}

add_action( 'wp_enqueue_scripts', 'slick_slider_js' );

function main_js() {
	wp_enqueue_script( 'facebook_js', get_bloginfo( 'template_url' ) . '/assets/js/facebook.js' );
	wp_enqueue_script( 'domready_js', get_bloginfo( 'template_url' ) . '/assets/js/domReady.js' );
	wp_enqueue_script( 'main_js', get_bloginfo( 'template_url' ) . '/assets/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'main_js' );