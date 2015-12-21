<?php


class PhaseController
{
    public static $cpt_name_singular = 'phase';
    public static $cpt_name_plural = 'phases';
    public static $cpt_shortcode = 'phase';

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
            'menu_name'         => _x(ucwords($cpt_name_plural), PMS_TEXT_DOMAIN)
        );

        $args = array(
            'labels'            => $labels,
            'query_var'         => $cpt_name_singular,
            'taxonomies'        => array(),
            'rewrite'           => array('slug'=>'programmes/phase', 'with_front' => true),
            'menu_icon'         => 'dashicons-screenoptions',
            'public'            => true,
            'hierarchical'      => true,
            'supports'          => array('title', 'thumbnail', 'editor'),
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

        $taxonomies['phasems_phases_categories'] = array(
            'hierarchical' => true,
            'query_var'    => true,
            'rewrite'      => true,
            'show_in_nav_menus' => false,
            'labels'       => array(
                'name'              => 'Phase Categories',
                'singular_name'     => 'Phase Category',
                'menu_name'         => 'Phase Categories',
                'all_items'         => 'All Phase Categories',
                'edit_item'         => 'Edit Phase Category',
                'view_item'         => 'View Phase Category',
                'update_item'       => 'Update Phase Category',
                'add_new_item'      => 'Add New Phase Category',
                'new_item_name'     => 'New Phase Category Name',
                'search_items'      => 'Search Phase Categories'
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
        add_action(
            'edit_form_after_title',
            function($post)
            {
                $phasems_heading = get_post_meta($post->ID, "phasems_heading", true);
                include PhaseMS_PLUGIN_VIEW . "partials/nonce.view.php";
                include PhaseMS_PLUGIN_VIEW . "metaboxes/options.metabox.php";
            }
        );

        // add_action(
        //     'edit_form_after_editor',
        //     function($post)
        //     {
        //         $phasems_photos = get_post_meta($post->ID, "phasems_photos", true);
        //         include PhaseMS_PLUGIN_VIEW . "partials/nonce.view.php";
        //         include PhaseMS_PLUGIN_VIEW . "metaboxes/carousel.metabox.php";
        //     }
        // );
    }

    public function save($post_id)
    {

        if(!isset( $_POST['phasems_metabox_nonce'] )) {
            return;
        }
        # Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['phasems_metabox_nonce'], 'save_metaboxes' ) ) {
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

        if( isset($_POST["phasems_heading"]) ) {
            foreach ($_POST["phasems_heading"] as $key)
            {
                update_post_meta($post_id, "phasems_heading", $_POST["phasems_heading"]);
            }
        }

    }

    public function display($atts)
    {
        global $post;
        $a = shortcode_atts( array(
            'id' => $post->ID
        ), $atts );

        $args = array(
            'post_type' => PhaseController::$cpt_name_singular,
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $phases = get_posts( $args );

        include PhaseMS_PLUGIN_VIEW . "content/phase.page.php";

        wp_reset_postdata();
    }


}
 ?>