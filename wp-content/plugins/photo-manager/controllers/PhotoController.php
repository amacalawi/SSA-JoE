<?php


class PhotoController
{
    public static $cpt_name_singular = 'gallery';
    public static $cpt_name_plural = 'galleries';
    public static $cpt_shortcode = 'photogal';

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
            'taxonomies'        => array('category'),
            'rewrite'           => array('with_front' => false),
            'menu_icon'         => 'dashicons-images-alt',
            'public'            => true,
            'hierarchical'      => true,
            'supports'          => array('title', 'editor'),
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
                $pms_photo_options = get_post_meta($post->ID, "pms_photo_options", true);
                include PMS_PLUGIN_VIEW . "partials/nonce.view.php";
                include PMS_PLUGIN_VIEW . "metaboxes/options.metabox.php";
            }
        );

        add_action(
            'edit_form_after_editor',
            function($post)
            {
                $pms_photos = get_post_meta($post->ID, "pms_photos", true);
                include PMS_PLUGIN_VIEW . "partials/nonce.view.php";
                include PMS_PLUGIN_VIEW . "metaboxes/carousel.metabox.php";
            }
        );

        // add_meta_box(
        //     'ems_departments-container', // CSS class
        //     'Department', // name
        //     function()
        //     {
        //         global $post;
        //         //Get taxonomy and terms
        //         $taxonomy = 'ems_departments';

        //         //Set up the taxonomy object and get terms
        //         $tax = get_taxonomy($taxonomy);
        //         $terms = get_terms($taxonomy,array('hide_empty' => 0));

        //         //Name of the form
        //         $name = 'tax_input[' . $taxonomy . ']';

        //         //Get current and popular terms
        //         $popular = get_terms( $taxonomy, array( 'orderby' => 'count', 'order' => 'DESC', 'number' => 10, 'hierarchical' => false ) );
        //         $postterms = get_the_terms( $post->ID,$taxonomy );
        //         $current = ($postterms ? array_pop($postterms) : false);
        //         $current = ($current ? $current->term_id : 0);
        //         include EMS_PLUGIN_VIEW . 'metaboxes/departments.metabox.view.php';
        //     }, // callback function
        //     self::$cpt_name_singular, // the post_type this meta box is associated with
        //     'side','core'
        // );
    }

    public function save($post_id)
    {

        if(!isset( $_POST['pms_metabox_nonce'] )) {
            return;
        }
        # Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['pms_metabox_nonce'], 'save_metaboxes' ) ) {
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
        if( isset($_POST["pms_photos"]) ) {
            foreach ($_POST["pms_photos"] as $key)
            {
                update_post_meta($post_id, "pms_photos", $_POST["pms_photos"]);
            }
        }

        if( isset($_POST["pms_photo_options"]) ) {
            foreach ($_POST["pms_photo_options"] as $key)
            {
                update_post_meta($post_id, "pms_photo_options", $_POST["pms_photo_options"]);
            }
        }

    }

    public function display($atts)
    {
        global $post;
        $a = shortcode_atts( array(
            'id' => $post->ID
        ), $atts );

        $photogal = get_post( $a['id'] );
        $pms_photos = get_post_meta($photogal->ID, 'pms_photos', true);
        $pms_photo_options = get_post_meta($photogal->ID, 'pms_photo_options', true);
        $i = $pms_photo_options['per_item'] ? $pms_photo_options['per_item'] : 1;

        setup_postdata($photogal);
        include PMS_PLUGIN_VIEW . "content/gallery.page.php";

        wp_reset_postdata();
    }


}
 ?>