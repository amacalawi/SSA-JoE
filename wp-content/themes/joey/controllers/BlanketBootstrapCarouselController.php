<?php

/**
* Bootstrap Carousel is added here as a metabox
* in home page
*/
class BlanketBootstrapCarouselController
{
    public static $homepage = "home";


    public function add()
    {
        global $post_ID, $post_type;

        if ( empty ( $post_ID ) or 'page' !== $post_type )
            return;

        // Check if this is the front page set in Settings
        if ( $post_ID === (int) get_option( 'page_on_front' ) )
        {
            remove_post_type_support( 'page', 'editor' );
            remove_meta_box( 'postimagediv','page','side' );

            # Carousel
            add_action(
                'edit_form_after_editor',
                function($post)
                {
                    $carousels = get_post_meta($post->ID, 'blanket_bootstrap_carousel', true);
                    include BLANKET_VIEWS . "metaboxes/carousel.metabox.php";

                    // $bb_call_to_action = get_post_meta($post->ID, 'blanket_bootstrap_call_to_action', true);
                    // require( BLANKET_INCLUDES . 'icon-data.php' );
                    // $icons = blanket_icon_fonts();//The array
                    // $display_fa_icons = blanket_generate_fa_icons($icons, 'icon-big');
                    // include BLANKET_VIEWS . "metaboxes/call-to-action.metabox.php";

                    $sections = get_post_meta($post->ID, 'blanket_sections', true);
                    include BLANKET_VIEWS . "metaboxes/sections.metabox.php";
                }
            );
        }

    }

    public static function save($post_id)
    {
        # Check Nonce
        if ( !isset( $_POST['blanket_metabox_nonce'] ) ) return;

        # Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['blanket_metabox_nonce'], 'save_metaboxes' ) ) return;

        # If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

        # Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) return;
        }

        if( isset($_POST["blanket_bootstrap_carousel"]) ) {
            foreach ($_POST["blanket_bootstrap_carousel"] as $key) {
                update_post_meta($post_id, "blanket_bootstrap_carousel", $_POST["blanket_bootstrap_carousel"]);
            }
        }

        if( isset($_POST["blanket_bootstrap_call_to_action"]) ) {
            foreach ($_POST["blanket_bootstrap_call_to_action"] as $key) {
                update_post_meta($post_id, "blanket_bootstrap_call_to_action", $_POST["blanket_bootstrap_call_to_action"]);
            }
        }

        if( isset($_POST["blanket_sections"]) ) {
            foreach ($_POST["blanket_sections"] as $key) {
                update_post_meta($post_id, "blanket_sections", $_POST["blanket_sections"]);
            }
        }
    }
}
 ?>