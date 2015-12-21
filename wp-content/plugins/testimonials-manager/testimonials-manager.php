<?php
/*
* Plugin Name: Testimonial Gallery Manager
* Plugin URI: #
* Description: A testimonial gallery management system using <a target="_blank" href="http://owlgraphic.com/owlcarousel/">Owl Carousel</a>
* Version: 1.0
* Author: John Lioneil P. Dionisio
*/

if( !function_exists( 'add_action' ) ) { echo "Hi there!  I'm just a plugin, not much I can do when called directly."; exit; }
require_once('globals.php');
require_once('controllers/TestimonialController.php');

include "includes/enqueues.php";


$testimonial = new TestimonialController();

# Initialize
add_action('init', function() {
    global $testimonial;
    $testimonial->register();
});

add_action('add_meta_boxes_'.TestimonialController::$cpt_name_singular, function() {
    global $testimonial;
    $testimonial->metaboxes();
});

add_action('save_post', function ($post_id) {
    global $testimonial;
    $testimonial->save($post_id);
});


# Shortcodes
# Display Employee
add_shortcode( TestimonialController::$cpt_shortcode, function ( $atts ) {
    ob_start();
    global $testimonial;
    echo $testimonial->display($atts);
    return ob_get_clean();
} );
