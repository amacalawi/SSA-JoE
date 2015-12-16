<?php
/**
 * ascent functions and definitions
 *
 * @package ascent
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 750; /* pixels */


/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framework/' );
require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        var $slider_option_field = jQuery('#section-slider_image_1, #section-slider_description_1, #section-slider_image_2, #section-slider_description_2, #section-slider_image_3, #section-slider_description_3, #section-slider_image_4, #section-slider_description_4, #section-slider_image_5, #section-slider_description_5');
        jQuery('#home_page_slider').click(function() {
            $slider_option_field.fadeToggle(400);
        });

        if (jQuery('#home_page_slider:checked').val() !== undefined) {
            $slider_option_field.show();
        }
    });
</script>
<?php
}


if ( ! function_exists( 'ascent_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ascent_setup() {
    global $cap, $content_width;

    /**
     * Add default posts and comments RSS feed links to head
    */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for Post Thumbnails on posts and pages
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );

    /**
     * Enable support for Post Formats
    */
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

    /**
     * Setup the WordPress core custom background feature.
    */
    add_theme_support( 'custom-background', apply_filters( 'ascent_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

 /* Add Menu Support */
    add_theme_support('menus');
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'ascent')
        )
    );
    /* Add Post Thumbnails Support and Related Image Sizes */

    add_image_size('blog-page', 732, 9999, false);                  // For Blog Page
    add_image_size('default-page', 1140, 9999, false);              // Default Page and Full Width Page
    add_image_size('blog-post-thumb', 732, 447, true);              // For Home Blog Section and Gallery Slider on Single and Blog Page

  /**
   * Make theme available for translation
   * Translations can be filed in the /languages/ directory
   * If you're building a theme based on ascent, use a find and replace
   * to change 'ascent' to the name of your theme in all the template files
  */
  load_theme_textdomain( 'ascent', get_template_directory() . '/languages' );

}
endif; // ascent_setup
add_action( 'after_setup_theme', 'ascent_setup' );


/**
 * Register widgetized area and update sidebar with default widgets
 */
function ascent_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'ascent' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar Footer', 'ascent' ),
        'id'            => 'sidebar-footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-3">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'ascent_widgets_init' );


/**
 * Enqueue scripts and styles
 *
 */
function ascent_scripts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style('google-raleway', "$protocol://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    // load bootstrap css
    wp_enqueue_style( 'ascent-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css' );

    if(of_get_option('enable_swipebox')) { //check if enable swipebox from theme options
        wp_enqueue_style( 'ascent-swipebox', get_template_directory_uri() . '/includes/css/swipebox.css' );
    }
    wp_enqueue_style( 'ascent-owl-carousel', get_template_directory_uri() . '/includes/css/owl.carousel.css' );
    wp_enqueue_style( 'ascent-owl-theme', get_template_directory_uri() . '/includes/css/owl.theme.css' );
    wp_enqueue_style( 'ascent-animations', get_template_directory_uri() . '/includes/css/animations.css' );
    wp_enqueue_style( 'ascent-meanmenu', get_template_directory_uri() . '/includes/css/meanmenu.css' );
    wp_enqueue_style( 'ascent-main', get_template_directory_uri() . '/includes/css/main.css' );

    // load bootstrap js
    wp_enqueue_script('ascent-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

    // load bootstrap wp js
    wp_enqueue_script( 'ascent-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

    wp_enqueue_script( 'ascent-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'ascent-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }

    wp_enqueue_script( 'ascent-smoothscroll', get_template_directory_uri() . '/includes/js/smoothscroll.js', array('jquery') );

    if(of_get_option('enable_swipebox')) { //check if enable swipebox from theme options
        wp_enqueue_script( 'ascent-swipebox', get_template_directory_uri() . '/includes/js/jquery.swipebox.js', array('jquery') );
        wp_enqueue_script( 'ascent-swipebox-config', get_template_directory_uri() . '/includes/js/swipebox-config.js', array('jquery') );
    }

    wp_enqueue_script( 'ascent-owl-carousel', get_template_directory_uri() . '/includes/js/owl.carousel.js', array('jquery') );
    wp_enqueue_script( 'ascent-appear', get_template_directory_uri() . '/includes/js/jquery.appear.js', array('jquery') );
    wp_enqueue_script( 'ascent-meanmenu', get_template_directory_uri() . '/includes/js/jquery.meanmenu.js', array('jquery') );
    wp_enqueue_script( 'ascent-velocity', get_template_directory_uri() . '/includes/js/jquery.velocity.js', array('jquery') );
    wp_enqueue_script( 'ascent-appear-config', get_template_directory_uri() . '/includes/js/appear.config.js', array('jquery') );

    // Theme main js
    wp_enqueue_script( 'ascent-themejs', get_template_directory_uri() . '/includes/js/main.js', array('jquery') );

    if(of_get_option('enable_sticky_header')) {
        wp_enqueue_script( 'ascent-enable-sticky-header', get_template_directory_uri() . '/includes/js/enable-sticky-header.js', array('jquery') );
    }

}

add_action( 'wp_enqueue_scripts', 'ascent_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';


/* Theme Social media icons  */
if( !function_exists( 'ascent_socialmedia_navs' ) ){
    function ascent_socialmedia_navs() {
        return array(
            'twitter_url' => 'fa fa-twitter',
            'facebook_url' => 'fa fa-facebook',
            'google_plus_url' => 'fa fa-google-plus',
            'linkedin_url' => 'fa fa-linkedin',
            'instagram_url' => 'fa fa-instagram',
            'youtube_url' => 'fa fa-youtube',
            'skype_url' => 'fa fa-skype',
            'dribbble_url' => 'fa fa-dribbble',
            'digg_url' => 'fa fa-digg',
            'github_url' => 'fa fa-github',
            'delicious_url' => 'fa fa-delicious',
            'reddit_url' => 'fa fa-reddit',
            'pinterest_url' => 'fa fa-pinterest',
            'flickr_url' => 'fa fa-flickr',
            'rss_url' => 'fa fa-rss'
        );
    }
}

/* Theme Home Slider  */
if( !function_exists( 'ascent_home_slider' ) ){
    function ascent_home_slider() {
        return array(
            'item_1' => array(
                'image' => 'slider_image_1',
                'description' => 'slider_description_1'
            ),
            'item_2' => array(
                'image' => 'slider_image_2',
                'description' => 'slider_description_2'
            ),
            'item_3' => array(
                'image' => 'slider_image_3',
                'description' => 'slider_description_3'
            ),
            'item_4' => array(
                'image' => 'slider_image_4',
                'description' => 'slider_description_4'
            ),
            'item_5' => array(
                'image' => 'slider_image_5',
                'description' => 'slider_description_5'
            ),
        );
    }
}


if( !function_exists( 'ascent_theme_option_custom_style' ) ) {
    function ascent_theme_option_custom_style() {
?>
    <style type="text/css">
        <?php if(of_get_option('body_text_color')): ?>
            body {
                color: <?php echo of_get_option('body_text_color'); ?>;
            }
        <?php endif; ?>

        <?php if(of_get_option('body_link_color')): ?>
            body a {
                color: <?php echo of_get_option('body_link_color'); ?>;
            }
        <?php endif; ?>

        <?php if(of_get_option('footer_top_border_color')): ?>
            #colophon {
                border-color: <?php echo of_get_option('footer_top_border_color'); ?>;
            }
        <?php endif; ?>

        <?php if(of_get_option('footer_background_color')): ?>
            #colophon {
                background-color: <?php echo of_get_option('footer_background_color'); ?>;
            }
        <?php endif; ?>
        <?php if(of_get_option('footer_background_bottom_color')): ?>
            #footer-info {
                background-color: <?php echo of_get_option('footer_background_bottom_color'); ?>;
            }
        <?php endif; ?>
    </style>
<?php
    }
}
add_action( 'wp_head', 'ascent_theme_option_custom_style' );


/*
* The CSS file selected in the options panel 'stylesheet' option
* is loaded on the theme front end
*/
if( !function_exists( 'ascent_options_stylesheets_alt_style' ) ) {
    function ascent_options_stylesheets_alt_style()   {
       if ( of_get_option('theme_color_scheme') && of_get_option('theme_color_scheme') !== 'default' ) {
           $select_color_scheme = of_get_option('theme_color_scheme');
           $color_scheme_css_path = get_template_directory_uri() . '/includes/css/theme-color-scheme/'.$select_color_scheme.'.css';

           wp_enqueue_style( $select_color_scheme, $color_scheme_css_path, array(), null);
       }
    }
}
add_action( 'wp_enqueue_scripts', 'ascent_options_stylesheets_alt_style' );
