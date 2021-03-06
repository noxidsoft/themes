<?php

if ( ! function_exists( 'mayland_blocks_support' ) ) :
	function mayland_blocks_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'style.css',
			)
		);
	}
	add_action( 'after_setup_theme', 'mayland_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function mayland_blocks_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'mayland-blocks-styles', get_stylesheet_uri(), array( 'blank_canvas_blocks-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'mayland_blocks_scripts' );
