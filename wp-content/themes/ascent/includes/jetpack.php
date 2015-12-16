<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ascent
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */

if(!function_exists( 'ascent_jetpack_setup' )) {
    function ascent_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
	    'container' => 'content',
	    'footer'    => 'page',
	) );
    }
}
add_action( 'after_setup_theme', 'ascent_jetpack_setup' );
