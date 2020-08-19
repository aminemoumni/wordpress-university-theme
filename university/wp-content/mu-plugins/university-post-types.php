<?php 


function university_post_types(){
	////////////////////////////////// Event post type
    register_post_type('event', array(
    	'capability_type' => 'event',
    	'map_meta_cap' => true,
    	'supports' => array('title', 'editor', 'excerpt'),
    	'has_archive' => true,
    	'rewrite' => array(
    		'slug' => 'events'
    	),
        'public' => true,
        'labels' => array(
            'name' => 'Evenements',
            'add_new_item' => 'Ajouter un nouvel evenement',
            'edit_item' => 'Modifier l\'evenement',
            'all_items' => 'Toutes les evenements',
            'singular_name' => 'Evenement'
        ),
        'menu_icon' => 'dashicons-calendar-alt',

    ));


    ////////////////////////////////// Program post type
    register_post_type('program', array(
    	'supports' => array('title'),
    	'has_archive' => true,
    	'rewrite' => array(
    		'slug' => 'programs'
    	),
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Ajouter un nouvel program',
            'edit_item' => 'Modifier le program',
            'all_items' => 'Toutes les programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards',

    ));


    ////////////////////////////////// Professor post type
    register_post_type('professor', array(
    	'show_in_rest' => true,
    	'supports' => array('title', 'editor', 'thumbnail'),
    	'rewrite' => array(
    		'slug' => 'professors'
    	),
        'public' => true,
        'labels' => array(
            'name' => 'Professor',
            'add_new_item' => 'Ajouter un nouvel professor',
            'edit_item' => 'Modifier le professor',
            'all_items' => 'Toutes les professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',

    ));

    ////////////////////////////////// Event campus type
    register_post_type('campus', array(
    	'supports' => array('title', 'editor', 'excerpt'),
    	'has_archive' => true,
    	'rewrite' => array(
    		'slug' => 'campuses'
    	),
        'public' => true,
        'labels' => array(
            'name' => 'Campuses',
            'add_new_item' => 'Ajouter un nouvel campus',
            'edit_item' => 'Modifier le campus',
            'all_items' => 'Toutes les campuses',
            'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-location-alt',

    ));

     ////////////////////////////////// Notes post type
    register_post_type('note', array(
    	'show_in_rest' => true,
    	'supports' => array('title', 'editor'),
    	'rewrite' => array(
    		'slug' => 'notes'
    	),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Notes',
            'add_new_item' => 'Ajouter un nouvel note',
            'edit_item' => 'Modifier le note',
            'all_items' => 'Toutes les notes',
            'singular_name' => 'Note'
        ),
        'menu_icon' => 'dashicons-welcome-write-blog',

    ));
}

add_action('init', 'university_post_types');