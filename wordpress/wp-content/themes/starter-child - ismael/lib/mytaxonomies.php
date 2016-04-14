<?php
// Register Custom Taxonomy
function brochure_type_taxonomy() {

	$labels = array(
		'name'                       => _x( 'brochure types', 'Taxonomy General Name', 'musique' ),
		'singular_name'              => _x( 'brochure type', 'Taxonomy Singular Name', 'musique' ),
		'menu_name'                  => __( 'brochure type', 'musique' ),
		'all_items'                  => __( 'All brochure types', 'musique' ),
		'parent_item'                => __( 'Parent brochure types', 'musique' ),
		'parent_item_colon'          => __( 'Parent brochure types:', 'musique' ),
		'new_item_name'              => __( 'New brochure type Name', 'musique' ),
		'add_new_item'               => __( 'Add brochure type Style', 'musique' ),
		'edit_item'                  => __( 'Edit brochure type', 'musique' ),
		'update_item'                => __( 'Update brochure type', 'musique' ),
		'view_item'                  => __( 'View Item', 'musique' ),
		'separate_items_with_commas' => __( 'Separate brochure type with commas', 'musique' ),
		'add_or_remove_items'        => __( 'Add or remove brochure type', 'musique' ),
		'choose_from_most_used'      => __( 'Choose from the most used brochure type', 'musique' ),
		'popular_items'              => __( 'Popular brochure type', 'musique' ),
		'search_items'               => __( 'Search brochure type', 'musique' ),
		'not_found'                  => __( 'Not brochure type Found', 'musique' ),
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
	register_taxonomy( 'brochure_type', array( 'brochure' ), $args );

}
add_action( 'init', 'brochure_type_taxonomy', 0 );
