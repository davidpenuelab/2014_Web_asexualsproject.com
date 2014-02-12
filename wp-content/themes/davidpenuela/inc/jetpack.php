<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package davidpenuela
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function davidpenuela_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'davidpenuela_jetpack_setup' );
