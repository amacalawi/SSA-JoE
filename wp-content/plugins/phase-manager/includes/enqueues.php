<?php

# Style
add_action( 'admin_enqueue_scripts', function () {
    global $post_type;
    if( PhaseController::$cpt_name_singular === $post_type)
    {
        wp_register_style( 'phasems-admin', PhaseMS_PLUGIN_CSS . 'phasems-admin.css', false, '1.0.0' );
        wp_enqueue_style( 'phasems-admin' );
        wp_enqueue_style( 'phasems-jquery-ui', PhaseMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.css', false, '1.14' );
    }
} );


# Script
add_action( 'admin_enqueue_scripts', function () {
    global $post_type;
    if( PhaseController::$cpt_name_singular === $post_type)
    {
        wp_enqueue_media();
        wp_enqueue_script( 'phasems-admin', PhaseMS_PLUGIN_JS . 'phasems-admin.js', array('jquery'), '3.0.0', true );
        wp_enqueue_script( 'phasems-jquery-ui', PhaseMS_PLUGIN_VENDOR . 'jquery/jquery-ui.min.js', array('jquery'), '1.14', true );
    }
} );

 ?>