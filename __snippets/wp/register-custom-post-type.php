<?php

function NatureReserve_register_post_type() {
    $singular = 'Custom post type name'; // Book
	$plural = 'Custom post type names';  // Books

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
        'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'NatureReserve_register_post_type' );