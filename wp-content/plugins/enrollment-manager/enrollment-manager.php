<?php
/*
* Plugin Name: Enrollment Manager
* Plugin URI: #
* Description: An enrollment management system
* Version: 1.0
* Author: John Lioneil P. Dionisio
*/

if( !function_exists( 'add_action' ) ) { echo "Hi there!  I'm just a plugin, not much I can do when called directly."; exit; }
require_once('globals.php');
require_once('controllers/EnrollController.php');

include "includes/enqueues.php";


$enroller = new EnrollController();

# Initialize
add_action('init', function() {
    global $enroller;
    $enroller->register();
});

add_action('add_meta_boxes_'.EnrollController::$cpt_name_singular, function() {
    global $enroller;
    $enroller->metaboxes();
});

add_action('save_post', function ($post_id) {
    global $enroller;
    $enroller->save($post_id);
});


# Shortcodes
# Display Employee
add_shortcode( EnrollController::$cpt_shortcode, function ( $atts ) {
    ob_start();
    global $enroller;
    echo $enroller->display($atts);
    return ob_get_clean();
} );



// THE AJAX ADD ACTIONS
add_action( 'wp_ajax_the_ajax_hook', 'the_action_function' );
add_action( 'wp_ajax_nopriv_the_ajax_hook', 'the_action_function' ); // need this to serve non logged in users
// THE FUNCTION
function the_action_function(){
    /* this area is very simple but being serverside it affords the possibility of retreiving data from the server and passing it back to the javascript function */
    ob_start();

    echo do_shortcode('[enroll]');

    // echo ob_get_clean();// this is passed back to the javascript function
    die();// wordpress may print out a spurious zero without this – can be particularly bad if using json
}
