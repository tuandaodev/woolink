<?php

function woolink_register_assets_common() {
	wp_register_style('woolink_css', WOOLINK_PLUGIN_URL . 'css/woolink.css' );
}
add_action( 'init', 'woolink_register_assets_common' );

function woolink_load_assets_common() {
    if (is_product()) {		
		wp_enqueue_style('woolink_css');
	}
}
add_action( 'wp_enqueue_scripts', 'woolink_load_assets_common' );


?>