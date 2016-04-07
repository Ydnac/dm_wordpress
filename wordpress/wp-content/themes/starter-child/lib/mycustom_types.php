<?php
// Register Custom Post Type

// Register Custom Post Type
function offres_emploi_type() {

	$labels = array(
		'name'                  => _x( 'offres_emploi', 'Post Type General Name', 'musique' ),
		'singular_name'         => _x( 'offre_emploi', 'Post Type Singular Name', 'musique' ),
		'menu_name'             => __( 'Offres emploi', 'musique' ),
		'name_admin_bar'        => __( 'Offres emploi', 'musique' ),
		'archives'              => __( 'Item Archives', 'musique' ),
		'parent_item_colon'     => __( 'Parent Offre emploi:', 'musique' ),
		'all_items'             => __( 'Toutes les Offres emploi', 'musique' ),
		'add_new_item'          => __( 'Ajouter une Offre', 'musique' ),
		'add_new'               => __( 'Ajouter une Offre', 'musique' ),
		'new_item'              => __( 'New Item', 'musique' ),
		'edit_item'             => __( 'Edit Offre emploi', 'musique' ),
		'update_item'           => __( 'Update Offre emploi', 'musique' ),
		'view_item'             => __( 'View Offre emploi', 'musique' ),
		'search_items'          => __( 'Search Offre emploi', 'musique' ),
		'not_found'             => __( 'Not Offre emploi found', 'musique' ),
		'not_found_in_trash'    => __( 'Not Offre emploi found in Trash', 'musique' ),
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
		'label'                 => __( 'offres_emploi', 'musique' ),
		'description'           => __( 'offres emploi du Label', 'musique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
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
	register_post_type( 'offres_emploi', $args );

}
add_action( 'init', 'offres_emploi_type', 0 );
