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

if ( file_exists(get_template_directory() . '/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'sejour_information_metabox');
function sejour_information_metabox() {

	$prefix = '_sejour_information_';

	$cmb_sejour_information = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Info Séjour', 'cmb2' ),
		'object_types'  => array( 'sejour', ), // Post type
	) );

	$cmb_sejour_information->add_field( array(
		'name' => __( 'Prix du séjour', 'cmb2' ),
		'id'   => $prefix . 'textmoney',
		'type' => 'text_money',
		'before_field' => '€',
	) );
}
