<?php
/*
* Plugin Name: Photo Gallery Manager
* Plugin URI: #
* Description: A gallery management system using <a target="_blank" href="http://owlgraphic.com/owlcarousel/">Owl Carousel</a>
* Version: 1.0
* Author: John Lioneil P. Dionisio
*/

if( !function_exists( 'add_action' ) ) { echo "Hi there!  I'm just a plugin, not much I can do when called directly."; exit; }
require_once('globals.php');
require_once('controllers/PhotoController.php');

include "includes/enqueues.php";


$photoman = new PhotoController();

# Initialize
add_action('init', function() {
    global $photoman;
    $photoman->register();
});

add_action('add_meta_boxes_'.PhotoController::$cpt_name_singular, function() {
    global $photoman;
    $photoman->metaboxes();
});

add_action('save_post', function ($post_id) {
    global $photoman;
    $photoman->save($post_id);
});


# Shortcodes
# Display Employee
add_shortcode( PhotoController::$cpt_shortcode, function ( $atts ) {
    ob_start();
    global $photoman;
    echo $photoman->display($atts);
    return ob_get_clean();
} );
