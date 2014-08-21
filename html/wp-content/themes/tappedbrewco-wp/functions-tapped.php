<?php

// Gallery CPT

add_action( 'init', 'register_cpt_gallery' );

function register_cpt_gallery() {

    $labels = array( 
        'name' => _x( 'Gallery', 'gallery' ),
        'singular_name' => _x( 'Gallery', 'gallery' ),
        'add_new' => _x( 'Add New', 'gallery' ),
        'add_new_item' => _x( 'Add New Gallery', 'gallery' ),
        'edit_item' => _x( 'Edit Gallery', 'gallery' ),
        'new_item' => _x( 'New Gallery', 'gallery' ),
        'view_item' => _x( 'View Galleries', 'gallery' ),
        'search_items' => _x( 'Search galleries', 'gallery' ),
        'not_found' => _x( 'No galleries found', 'gallery' ),
        'not_found_in_trash' => _x( 'No galleries found in Trash', 'gallery' ),
        'parent_item_colon' => _x( 'Parent Galleries:', 'gallery' ),
        'menu_name' => _x( 'Gallery', 'gallery' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'A section of galleries',
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 21,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        //'rewrite' => true,
        'rewrite' => array('slug' => 'gallery'),
        'capability_type' => 'post'
    );

    register_post_type( 'gallery', $args );

}

add_image_size( 'journal-standard', 600, 9999 );
add_image_size( 'brew-standard', 600, 9999 );

?>