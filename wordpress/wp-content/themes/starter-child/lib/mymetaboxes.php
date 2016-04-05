<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if (file_exists ( get_template_directory () . '/cmb2/init.php' )) {
	require_once get_template_directory () . '/cmb2/init.php';
} elseif (file_exists ( get_template_directory () . '/CMB2/init.php' )) {
	require_once get_template_directory () . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'centre_secteur_metabox' );
function centre_secteur_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_centre_secteur_';

	$cmb_centre_secteur = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Centre Informations', 'musique' ),
			'object_types'  => array( 'centre', )
	) );

	$cmb_centre_secteur->add_field( array(
			'name' => __( 'Secteur centre', 'musique' ),
			'id'   => $prefix . 'secteur_centre',
			'type' => 'taxonomy_select',
			'taxonomy' => 'centre_location'
	) );

	$cmb_centre_secteur->add_field( array(
		'name'         => __( 'Multiple Files', 'cmb2' ),
		'desc'         => __( 'Upload or add multiple images/attachments.', 'cmb2' ),
		'id'           => $prefix . 'file_list',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
}

add_action( 'cmb2_admin_init', 'sejour_information_metabox');
function sejour_information_metabox() {

	$prefix = '_sejour_information_';

	$cmb_sejour_information = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Info Metabox', 'cmb2' ),
		'object_types'  => array( 'sejour', ), // Post type
	) );

	$cmb_sejour_information->add_field( array(
		'name' => __( 'Prix du séjour', 'cmb2' ),
		'id'   => $prefix . 'textmoney',
		'type' => 'text_money',
		'before_field' => '€',
	) );
}
