<?php
/**
 * Kirki CSS issue fixer in editor.
 *
 * @package Switty
 */

// Kirki editor css fix.
if ( class_exists( 'Kirki' ) && 'customize.php' === $pagenow ) {
	add_action( 'admin_enqueue_scripts', 'switty_type_editor_fixer' );
}

/**
 * Callback admin_enqueue_scripts.
 */
function switty_type_editor_fixer() {
	global $switty_version;
	wp_enqueue_style( 'switty-type-editor-fix', get_template_directory_uri() . '/css/kirki-css-fix.css', array(), $switty_version, 'all' );
}
