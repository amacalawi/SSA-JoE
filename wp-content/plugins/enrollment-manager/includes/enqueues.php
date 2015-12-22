<?php

# Style
add_action( 'admin_enqueue_scripts', 'enrollms_styles_collection' );
function enrollms_styles_collection() {
    global $post_type;
    if( PhotoController::$cpt_name_singular === $post_type)
    {
        wp_register_style( 'enrollms-admin', EnrollMS_PLUGIN_CSS . 'enrollms-admin.css', false, '1.0.0' );
        wp_enqueue_style( 'enrollms-admin' );
        wp_enqueue_style( 'enrollms-jquery-ui', EnrollMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.css', false, '1.14' );
    }
}

# Script
add_action( 'admin_enqueue_scripts', 'enrollms_scripts_collection' );
function enrollms_scripts_collection() {
    global $post_type;
    if( PhotoController::$cpt_name_singular === $post_type)
    {
        wp_enqueue_media();
        wp_enqueue_script( 'enrollms-admin', EnrollMS_PLUGIN_JS . 'enrollms-admin.js', array('jquery'), '3.0.0', true );
        wp_enqueue_script( 'enrollms-jquery-ui', EnrollMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.js', array('jquery'), '1.14', true );
    }
}

add_action('wp_footer', function (){
    wp_enqueue_script( 'enrollms', EnrollMS_PLUGIN_JS . 'enroll.js', array('jquery'), '1.0.0', true );

    wp_localize_script( 'enrollms', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

});


 ?>