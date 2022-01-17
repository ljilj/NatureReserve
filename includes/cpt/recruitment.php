<?php
/**
 * Recruitment
 * CPT
 */

function NatureReserve_register_recruitment() {
    $singular = 'Recruitment'; // Book
	$plural = 'Recruitments';  // Books

    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'NatureReserve' ),
        'singular_name' 	  => __( $singular, 'NatureReserve' ),
        'add_new' 		      => _x( 'Add New', 'NatureReserve', 'NatureReserve' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'NatureReserve' ),
        'edit'		          => __( 'Edit', 'NatureReserve' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'NatureReserve' ),
        'new_item'	          => __( 'New ' . $singular, 'NatureReserve' ),
        'view' 			      => __( 'View ' . $singular, 'NatureReserve' ),
        'view_item' 		  => __( 'View ' . $singular, 'NatureReserve' ),
        'search_term'   	  => __( 'Search ' . $plural, 'NatureReserve' ),
        'parent' 		      => __( 'Parent ' . $singular, 'NatureReserve' ),
        'not_found'           => __( 'No ' . $plural .' found', 'NatureReserve' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'NatureReserve' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-megaphone',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'NatureReserve_register_recruitment' );

function NatureReserve_register_recruitment_taxonomy() {
    $singular = 'Category'; // Book category
	$plural = 'Categories'; // Book categories

    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name'              => _x( $plural, 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search ' . $plural ),
        'all_items'         => __( 'All ' . $plural ),
        'parent_item'       => __( 'Parent ' . $singular ),
        'parent_item_colon' => __( 'Parent:' . $singular ),
        'edit_item'         => __( 'Edit ' . $singular ),
        'update_item'       => __( 'Update ' . $singular ),
        'add_new_item'      => __( 'Add New ' . $singular ),
        'new_item_name'     => __( 'New ' . $singular ),
        'menu_name'         => __( $plural ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'show_admin_column' => true,
	);

    register_taxonomy( $slug, 'recruitment', $args );
}
add_action( 'init', 'NatureReserve_register_recruitment_taxonomy', 0 );