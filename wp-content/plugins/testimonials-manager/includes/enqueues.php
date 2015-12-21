<?php

# Style
add_action( 'admin_enqueue_scripts', 'tms_styles_collection' );
function tms_styles_collection() {
    global $post_type;
    if( PhotoController::$cpt_name_singular === $post_type)
    {
        wp_register_style( 'tms-admin', PMS_PLUGIN_CSS . 'tms-admin.css', false, '1.0.0' );
        wp_enqueue_style( 'tms-admin' );
        wp_enqueue_style( 'tms-jquery-ui', PMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.css', false, '1.14' );
    }
}

# Script
add_action( 'admin_enqueue_scripts', 'tms_scripts_collection' );
function tms_scripts_collection() {
    global $post_type;
    if( PhotoController::$cpt_name_singular === $post_type)
    {
        wp_enqueue_media();
        wp_enqueue_script( 'tms-admin', PMS_PLUGIN_JS . 'tms-admin.js', array('jquery'), '3.0.0', true );
        wp_enqueue_script( 'tms-jquery-ui', PMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.js', array('jquery'), '1.14', true );
    }
}
 ?>