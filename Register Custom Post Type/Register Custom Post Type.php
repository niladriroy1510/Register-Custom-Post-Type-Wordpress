<?php

//Start Custom Post Register Manufacturer

// Register Custom Post Type
function my_custom_post_Manufacturer() {
    $labels = array(
        'name'               => _x( 'Manufacturer', 'onum' ),
        'singular_name'      => _x( 'Manufacturer', 'onum' ),
        'add_new'            => _x( 'Add New', 'onum' ),
        'add_new_item'       => __( 'Add New Manufacturer' ),
        'edit_item'          => __( 'Edit Manufacturer' ),
        'new_item'           => __( 'New Manufacturer' ),
        'all_items'          => __( 'All Manufacturer' ),
        'view_item'          => __( 'View Manufacturer' ),
        'search_items'       => __( 'Search Manufacturer' ),
        'not_found'          => __( 'No Manufacturer found' ),
        'not_found_in_trash' => __( 'No Manufacturer found in the Trash' ),
        'menu_name'          => 'Manufacturer',
    );
    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our Manufacturer and Manufacturer specific data',
        'public'            => true,
		'supports'          => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'revisions' ),
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'manufacturer'),
        'publicly_queryable' => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true, // To use Gutenberg editor.
        'query_var'         => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'taxonomies'        => array('category_manufacturer') // Use the correct taxonomy name here
    );
    register_post_type( 'manufacturer', $args );
}
add_action( 'init', 'my_custom_post_Manufacturer' );





// Register Custom Taxonomy
function my_taxonomies_manufacturer() {
    $labels = array(
        'name'              => _x( 'Manufacturer Categories', 'onum' ),
        'singular_name'     => _x( 'Manufacturer Category', 'onum' ),
        'search_items'      => __( 'Search Manufacturer Categories' ),
        'all_items'         => __( 'All Manufacturer Categories' ),
        'parent_item'       => __( 'Parent Manufacturer Category' ),
        'parent_item_colon' => __( 'Parent Manufacturer Category:' ),
        'edit_item'         => __( 'Edit Manufacturer Category' ),
        'update_item'       => __( 'Update Manufacturer Category' ),
        'add_new_item'      => __( 'Add New Manufacturer Category' ),
        'new_item_name'     => __( 'New Manufacturer Category' ),
        'menu_name'         => __( 'Manufacturer Categories' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
		'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'manufacturer-category' ), // Use the correct rewrite slug
    );
    register_taxonomy( 'category_manufacturer', array('manufacturer'), $args );
}
add_action( 'init', 'my_taxonomies_manufacturer', 0 );



//End Custom Post Register Manufacturer

