<?php
if ( ! function_exists('sejour_type') ) {

	// Register Custom Post Type
	function sejour_type() {

		$labels = array(
				'name'                  => _x( 'Sejours', 'Post Type General Name', 'musique' ),
				'singular_name'         => _x( 'Sejour', 'Post Type Singular Name', 'musique' ),
				'menu_name'             => __( 'Sejours', 'musique' ),
				'name_admin_bar'        => __( 'Sejour', 'musique' ),
				'archives'              => __( 'Item Archives', 'musique' ),
				'parent_item_colon'     => __( 'Parent Sejour:', 'musique' ),
				'all_items'             => __( 'All Sejours', 'musique' ),
				'add_new_item'          => __( 'Add New Sejour', 'musique' ),
				'add_new'               => __( 'Add New', 'musique' ),
				'new_item'              => __( 'New Item', 'musique' ),
				'edit_item'             => __( 'Edit Sejour', 'musique' ),
				'update_item'           => __( 'Update Sejour', 'musique' ),
				'view_item'             => __( 'View Sejour', 'musique' ),
				'search_items'          => __( 'Search Sejour', 'musique' ),
				'not_found'             => __( 'Not Sejour found', 'musique' ),
				'not_found_in_trash'    => __( 'Not Sejour found in Trash', 'musique' ),
				'featured_image'        => __( 'Featured Image', 'musique' ),
				'set_featured_image'    => __( 'Set featured image', 'musique' ),
				'remove_featured_image' => __( 'Remove featured image', 'musique' ),
				'use_featured_image'    => __( 'Use as featured image', 'musique' ),
				'insert_into_item'      => __( 'Insert into item', 'musique' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'musique' ),
				'items_list'            => __( 'Items list', 'musique' ),
				'items_list_navigation' => __( 'Items list navigation', 'musique' ),
				'filter_items_list'     => __( 'Filter items list', 'musique' ),
		);
		$args = array(
				'label'                 => __( 'Sejour', 'musique' ),
				'description'           => __( 'Sejour du Label', 'musique' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'thumbnail', ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-businessman',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'post',
		);
		register_post_type( 'sejour', $args );

	}
	add_action( 'init', 'sejour_type', 0 );
}

// Register Custom Post Type
function centres_type() {

	$labels = array(
		'name'                  => _x( 'centres', 'Post Type General Name', 'musique' ),
		'singular_name'         => _x( 'centre', 'Post Type Singular Name', 'musique' ),
		'menu_name'             => __( 'centres', 'musique' ),
		'name_admin_bar'        => __( 'centre', 'musique' ),
		'archives'              => __( 'Item centres', 'musique' ),
		'parent_item_colon'     => __( 'Parent centre:', 'musique' ),
		'all_items'             => __( 'All centres', 'musique' ),
		'add_new_item'          => __( 'Add New centre', 'musique' ),
		'add_new'               => __( 'Add New', 'musique' ),
		'new_item'              => __( 'New Item', 'musique' ),
		'edit_item'             => __( 'Edit centre', 'musique' ),
		'update_item'           => __( 'Update centre', 'musique' ),
		'view_item'             => __( 'View centre', 'musique' ),
		'search_items'          => __( 'Search centre', 'musique' ),
		'not_found'             => __( 'Not centre found', 'musique' ),
		'not_found_in_trash'    => __( 'Not centre found in Trash', 'musique' ),
		'featured_image'        => __( 'Featured Image', 'musique' ),
		'set_featured_image'    => __( 'Set featured image', 'musique' ),
		'remove_featured_image' => __( 'Remove featured image', 'musique' ),
		'use_featured_image'    => __( 'Use as featured image', 'musique' ),
		'insert_into_item'      => __( 'Insert into item', 'musique' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'musique' ),
		'items_list'            => __( 'Items list', 'musique' ),
		'items_list_navigation' => __( 'Items list navigation', 'musique' ),
		'filter_items_list'     => __( 'Filter items list', 'musique' ),
	);
	$args = array(
		'label'                 => __( 'centre', 'musique' ),
		'description'           => __( 'Nos centres', 'musique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'centre', $args );

}
add_action( 'init', 'centres_type', 0 );
