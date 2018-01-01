<?php
/**
 * Custom Post Type "Buchseiten" registrieren
 */

function klAddBookpages() {
	/**
	 * minimale Labels
	 */
	$labels = array(
		'name'                  =>  'Bücher',
		'singular_name'         =>  'Buchseite',
		'add_new'               =>  'Buchseite hinzufügen',
		'add_new_item'          =>  'Buchseite hinzufügen',
		'edit_item'             =>  'Buchseite editieren',
		'new_item'              =>  'Buchseite hinzufügen',
		'all_items'             =>  'alle Bücher',
		'view_items'            =>  'Bücher anzeigen',
		'search_items'          =>  'Bücher durchsuchen',
		'not_found'             =>  'keine Buchseite gefunden',
		'not_found_in_trash'    =>  'keine Buchseite im Papierkorb gefunden',
	);

	$args = array(
		'name'                  =>  'Bücher',
		'labels'                =>  $labels,
		'description'           =>  'eigenes Portfolio verwalten',
		'public'                =>  true,                                   //für Volltextsuche im Frontend
		'menu_position'         =>  5,
		'rewrite'               =>  array('slug' => 'bookpages'),
		'supports'              =>  array('title', 'thumbnail', 'editor'),
		'has_archive'           =>  true,
		'menu_icon'             =>  'dashicons-book-alt',
	);

	register_post_type('kl_bookpages', $args);

	$args = array(

		'label'                 =>  'Genre',
		'rewrite'               =>  array('slug' => 'genres'),
		'hierarchical'          =>  true
	);

	register_taxonomy('kl_genres', 'kl_bookpages', $args);
	register_taxonomy_for_object_type('kl_genres', 'kl_bookpages');
}

add_action('init', 'klAddBookpages');