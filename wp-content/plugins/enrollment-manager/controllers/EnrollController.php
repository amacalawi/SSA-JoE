<?php


class EnrollController
{
    public static $cpt_name_singular = 'enrollment';
    public static $cpt_name_plural = 'enrollments';
    public static $cpt_shortcode = 'enroll';

    public function register()
    {
        $cpt_name_singular = self::$cpt_name_singular;
        $cpt_name_plural = self::$cpt_name_plural;

        $labels = array(
            'name'              => ucwords($cpt_name_plural),
            'singular_name'     => ucwords($cpt_name_singular),
            'all_items'         => "All " . ucwords($cpt_name_plural),
            'add_new'           => "Add New " . ucwords($cpt_name_singular),
            'add_new_item'      => "Add New " . ucwords($cpt_name_singular),
            'edit_item'         => "Edit " . ucwords($cpt_name_singular),
            'new_item'          => "New " . ucwords($cpt_name_singular),
            'view_item'         => "View " . ucwords($cpt_name_singular),
            'search_items'      => "Search " . ucwords($cpt_name_singular),
            'not_found'         => "No " . ucwords($cpt_name_plural) . " found",
            'not_found_in_trash'=> "No " . ucwords($cpt_name_plural) . " found in trash",
            'parent_item_colon' => "Parent " . ucwords($cpt_name_singular) . ":",
            'menu_name'         => _x(ucwords($cpt_name_plural), EnrollMS_TEXT_DOMAIN)
        );

        $args = array(
            'labels'            => $labels,
            'query_var'         => $cpt_name_singular,
            'taxonomies'        => array(),
            'rewrite'           => array('with_front' => false),
            'menu_icon'         => 'dashicons-awards',
            'public'            => true,
            'hierarchical'      => true,
            'supports'          => array('title', 'editor', 'custom-fields'),
            'show_ui'           => true,
            'show_in_menu'      => true,
            // 'menu_position'     => 7,
            'show_in_nav_menus' => false,
            'publicly_queryable'=> false,
            'exclude_from_search' => true,
            'has_archive'       => false,
            'can_export'        => false,
            'capability_type'   => 'post',
            'capabilities' => array(
                'create_posts' => true, // Toggles support for the "Add New" function
            ),
            'map_meta_cap' => true, // Set to false, if users are not allowed to edit/delete existing posts
        );
        register_post_type( $cpt_name_singular, $args );

        add_filter( 'enter_title_here', function ( $title ) {
            $screen = get_current_screen();
            if ( self::$cpt_name_singular == $screen->post_type ){
                $title = 'Enter ' . self::$cpt_name_singular . ' name here';
            }
            return $title;
        });

        $this->taxonomies();
    }

    public function taxonomies() {
        $taxonomies = array();

        $cpt_name_singular = self::$cpt_name_singular;

        $taxonomies['enrollms_enrollment_categories'] = array(
            'hierarchical' => true,
            'query_var'    => true,
            'rewrite'      => true, //array('slug'=>'/', 'with_front' => false),
            'show_in_nav_menus' => true,
            'labels'       => array(
                'name'              => 'Centre'.' Categories',
                'singular_name'     => 'Centre'.' Category',
                'menu_name'         => 'Centre'.' Categories',
                'all_items'         => 'All '.'Centre'.' Categories',
                'edit_item'         => 'Edit '.'Centre'.' Category',
                'view_item'         => 'View '.'Centre'.' Category',
                'update_item'       => 'Update '.'Centre'.' Category',
                'add_new_item'      => 'Add New '.'Centre'.' Category',
                'new_item_name'     => 'New '.'Centre'.' Category Name',
                'search_items'      => 'Search '.'Centre'.' Categories'
            )
        );

        foreach($taxonomies as $name => $args) {
            register_taxonomy($name, array(self::$cpt_name_singular), $args);
        }

    }

    /**
     * Custom metaboxed for the plugin
     *
     * @return
     */
    public function metaboxes()
    {
        // add_action(
        //     'edit_form_after_editor',
        //     function($post)
        //     {
        //         $enroll_centre = get_post_meta($post->ID, "enroll_centre", true);
        //         include EnrollMS_PLUGIN_VIEW . "partials/nonce.view.php";
        //         include EnrollMS_PLUGIN_VIEW . "metaboxes/options.metabox.php";
        //     }
        // );


    }

    public function save($post_id)
    {

        if(!isset( $_POST['enrollms_metabox_nonce'] )) {
            return;
        }
        # Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['enrollms_metabox_nonce'], 'save_metaboxes' ) ) {
            return;
        }
        # If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        # Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && self::$cpt_name_singular == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return;
            }
        }

        # SAVE
        // if( isset($_POST["enroll_centre"]) ) {
        //     foreach ($_POST["enroll_centre"] as $key)
        //     {
        //         update_post_meta($post_id, "enroll_centre", $_POST["enroll_centre"]);
        //     }
        // }

        // if( isset($_POST["enrollms_photo_options"]) ) {
        //     foreach ($_POST["enrollms_photo_options"] as $key)
        //     {
        //         update_post_meta($post_id, "enrollms_photo_options", $_POST["enrollms_photo_options"]);
        //     }
        // }

    }

    public function display($atts)
    {
        global $post;
        $a = shortcode_atts( array(
            'id' => isset($post->ID) ? $post->ID : ''
        ), $atts );

        $category = isset($_POST['centre']) ? $_POST['centre'] : '';

        $args=array(
            'post_type' => EnrollController::$cpt_name_singular,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'enrollms_enrollment_categories',
                    'field' => 'slug',
                    'terms' => array($category)
                )
            )
        );

        $centers = get_posts($args);

        include EnrollMS_PLUGIN_VIEW . "content/enrollment.page.php";

        wp_reset_postdata();
    }


}
 ?>
