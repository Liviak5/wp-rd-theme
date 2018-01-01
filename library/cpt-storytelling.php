<?php
/**
 * Custom Post Type "StoryTbcs" registrieren
 */

function klAddStoryTbcs() {
	/**
	 * minimale Labels
	 */
	$labels = array(
		'name'                  =>  'StoryTbcs',
		'singular_name'         =>  'StoryTbc',
		'add_new'               =>  'StoryTbc hinzufügen',
		'add_new_item'          =>  'StoryTbc hinzufügen',
		'edit_item'             =>  'StoryTbc editieren',
		'new_item'              =>  'StoryTbc hinzufügen',
		'all_items'             =>  'alle StoryTbcs',
		'view_items'            =>  'StoryTbcs anzeigen',
		'search_items'          =>  'StoryTbcs durchsuchen',
		'not_found'             =>  'kein StoryTbc gefunden',
		'not_found_in_trash'    =>  'kein StoryTbc im Papierkorb gefunden',
	);

	$args = array(
		'name'                  =>  'StoryTbcs',
		'labels'                =>  $labels,
		'description'           =>  'Storys verwalten',
		'public'                =>  true,                                   //für Volltextsuche im Frontend
		'menu_position'         =>  5,
		'rewrite'               =>  array('slug' => 'storytbcs'),
		'supports'              =>  array('title', 'thumbnail', 'editor'),
		'has_archive'           =>  true,
		'menu_icon'             =>  'dashicons-edit',
	);

	register_post_type('kl_storytbcs', $args);

	$args = array(

		'label'                 =>  'Story',
		'rewrite'               =>  array('slug' => 'storys'),
		'hierarchical'          =>  true
	);

	register_taxonomy('kl_storys', 'kl_storytbcs', $args);
	register_taxonomy_for_object_type('kl_storys', 'kl_storytbcs');
}

add_action('init', 'klAddStoryTbcs');