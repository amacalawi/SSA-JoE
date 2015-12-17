<?php
/*
| -----------------------------------------------------
| # Enqueue | Front End
| -----------------------------------------------------
|
*/
# CSS
add_action( 'wp_enqueue_scripts', 'blanket_styles_collection' );
function blanket_styles_collection() {
    wp_enqueue_style( 'vendor', BLANKET_CSS_URI . 'style.vendor.min.css', false, '1.0.1' );
    wp_enqueue_style( 'owl-carousel', BLANKET_VENDORS_URI . 'owl-carousel/owl.carousel.css', false, '1.0.1' );
    wp_enqueue_style( 'owl-carousel-theme', BLANKET_VENDORS_URI . 'owl-carousel/owl.theme.css', false, '1.0.1' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), false, '1.0.1' );
}

# JS
add_action('wp_footer', 'blanket_scripts_collection');
function blanket_scripts_collection(){
    wp_enqueue_script( 'vendor', BLANKET_JS_URI . 'script.vendor.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'flexslider', BLANKET_VENDORS_URI . 'flexslider/jquery.flexslider-min.js', array('jquery'), '2.6.0', true );
    wp_enqueue_script( 'owl-carousel', BLANKET_VENDORS_URI . 'owl-carousel/owl.carousel.min.js', array('jquery'), '2.6.0', true );

    wp_register_script( 'google-api', 'http://maps.googleapis.com/maps/api/js?libraries=places&amp', null, 1.0, false);
    wp_enqueue_script('google-api');

    wp_register_script( 'script', BLANKET_JS_URI . 'script.js', array('jquery'), '1.0.0' );

    // Localize the script with new data
    $blanket_localized_script_vars = localize_map();
    wp_localize_script( 'script', 'blanket_localized_script_vars', $blanket_localized_script_vars );

    $blanket_varall = [
        'popup' => [
            'options' => get_option( BlanketOptionsController::$menu_settings )['modal']
        ]
    ];
    wp_localize_script( 'script', 'blanket_varall', $blanket_varall );

    // Enqueued script with localized data.
    wp_enqueue_script( 'script' );
}



/*
| -----------------------------------------------------------
| # Enqueue | Backend
| -----------------------------------------------------------
*/
# Login
add_action( 'login_enqueue_scripts', 'blanket_theme_login' );
function blanket_theme_login() {
    wp_enqueue_style( 'blanket-login', BLANKET_CSS_URI . 'login.css');
}

# Admin CSS
add_action( 'admin_head', 'blanket_admin_styles_collection' );
function blanket_admin_styles_collection() {
    wp_enqueue_style( 'admin', BLANKET_CSS_URI . 'admin.css', false. '3.0.0' );
    wp_enqueue_style( 'jquery-ui', BLANKET_VENDORS_URI . 'jquery-ui/jquery-ui.min.css' );
    wp_enqueue_style( 'font-icons', BLANKET_CSS_URI . 'font-icons.backend.css' );
    wp_enqueue_style( 'font-awesome', BLANKET_CSS_URI . 'font-awesome.backend.css' );
}
# Admin JS
add_action( 'admin_enqueue_scripts', 'blanket_admin_scripts_collection' );
function blanket_admin_scripts_collection() {
    global $post, $pagenow;
    wp_register_script( 'google-api', 'http://maps.googleapis.com/maps/api/js?libraries=places&amp;', null, 1.0, false);
    wp_enqueue_script('google-api');

    wp_enqueue_script( 'jquery-ui', BLANKET_VENDORS_URI . 'jquery-ui/jquery-ui.min.js', array('jquery'), '3.0.0', true );

    if( (null !== $post && 'page' === $post->post_type) || $pagenow == "options-general.php" )
    {
        wp_register_script( 'admin', BLANKET_JS_URI . 'admin.js', array('jquery'), '3.0.0', true );
        $blanket_localized_script_vars = localize_map();
        wp_localize_script( 'admin', 'blanket_localized_script_vars', $blanket_localized_script_vars );

        wp_enqueue_script( 'admin' );
    }
}


/*
| -------------------------------------------------------------
| # Visual Editor Style | enqueue editor.css for the Edit Pages
| -------------------------------------------------------------
*/
add_action( 'admin_init', 'blanket_custom_add_editor_styles' );
function blanket_custom_add_editor_styles() {
    add_editor_style( array( BLANKET_CSS_URI.'editor.css?v=3.0.1' ) );
}