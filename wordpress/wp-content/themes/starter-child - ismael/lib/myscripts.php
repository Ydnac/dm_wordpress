<?php
function mystarter_scripts() {
	wp_enqueue_style( 'starter-style', get_template_directory_uri() . '/css/mystarter.css' );
}
add_action ( 'wp_enqueue_scripts', 'mystarter_scripts' );
