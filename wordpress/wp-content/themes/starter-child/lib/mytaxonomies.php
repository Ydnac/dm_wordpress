<?php
// Register Custom Taxonomy
// Register Custom Taxonomy
function type_emploi_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types emploi', 'Taxonomy General Name', 'musique' ),
		'singular_name'              => _x( 'Type emploi', 'Taxonomy Singular Name', 'musique' ),
		'menu_name'                  => __( 'Type emploi', 'musique' ),
		'all_items'                  => __( 'All Type emploi', 'musique' ),
		'parent_item'                => __( 'Parent Type emploi', 'musique' ),
		'parent_item_colon'          => __( 'Parent Type emploi:', 'musique' ),
		'new_item_name'              => __( 'New Type emploi Name', 'musique' ),
		'add_new_item'               => __( 'Add New Type emploi', 'musique' ),
		'edit_item'                  => __( 'Edit Type emploi', 'musique' ),
		'update_item'                => __( 'Update Type emploi', 'musique' ),
		'view_item'                  => __( 'View Item', 'musique' ),
		'separate_items_with_commas' => __( 'Separate Type emploi with commas', 'musique' ),
		'add_or_remove_items'        => __( 'Add or remove Type emploi', 'musique' ),
		'choose_from_most_used'      => __( 'Choose from the most used Type emploi', 'musique' ),
		'popular_items'              => __( 'Popular Type emploi', 'musique' ),
		'search_items'               => __( 'Search Type emploi', 'musique' ),
		'not_found'                  => __( 'Not Type emploi Found', 'musique' ),
		'no_terms'                   => __( 'No items', 'musique' ),
		'items_list'                 => __( 'Items list', 'musique' ),
		'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'type_emploi', array( 'offres_emploi' ), $args );

}
add_action( 'init', 'type_emploi_taxonomy', 0 );
