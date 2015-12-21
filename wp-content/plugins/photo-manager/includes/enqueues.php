<?php

# Style
add_action( 'admin_enqueue_scripts', 'pms_styles_collection' );
function pms_styles_collection() {
    global $post_type;
    if( PhotoController::$cpt_name_singular === $post_type)
    {
        wp_register_style( 'pms-admin', PMS_PLUGIN_CSS . 'pms-admin.css', false, '1.0.0' );
        wp_enqueue_style( 'pms-admin' );
        wp_enqueue_style( 'pms-jquery-ui', PMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.css', false, '1.14' );
    }
}

# Script
add_action( 'admin_enqueue_scripts', 'pms_scripts_collection' );
function pms_scripts_collection() {
    global $post_type;
    if( PhotoController::$cpt_name_singular === $post_type)
    {
        wp_enqueue_media();
        wp_enqueue_script( 'pms-admin', PMS_PLUGIN_JS . 'pms-admin.js', array('jquery'), '3.0.0', true );
        wp_enqueue_script( 'pms-jquery-ui', PMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.js', array('jquery'), '1.14', true );
    }
}

// add_action('wp_footer', 'photogal_scripts_collection');
// function photogal_scripts_collection(){
//     wp_enqueue_script( 'photogal', PMS_PLUGIN_JS . 'photogal.js', array('jquery', 'owl-carousel'), '1.0.0', true );

// }

 ?>