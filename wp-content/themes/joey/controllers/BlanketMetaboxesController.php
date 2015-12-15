<?php

/**
*
*/
class BlanketMetaboxesController
{

    function __construct()
    {
        // $this->add();
    }

    public function add()
    {
        global $post, $post_ID;

        $slug = basename( get_permalink( $post->ID ) );
        if( ( 'contact' == $slug || 'contact-us' == $slug ) ) {
            # Map Metabox
            add_action(
                'edit_form_after_editor',
                function($post)
                {
                    $value = get_post_meta($post->ID, 'blanket_contact', true);
                    // view("metaboxes/information.metabox");
                    include BLANKET_VIEWS . "metaboxes/information.metabox.php";
                }
            );
        }

        // All page except the front_page
        if( 'page' === $post->post_type && $post_ID !== (int) get_option( 'page_on_front' ) )
        {
            add_meta_box(
                'blanket_background_img_metabox', // ID
                'Background Image', // name
                function ($post)
                {

                    // remove_meta_box( 'postimagediv','page','side' );
                    $blanket_background_img = get_post_meta($post->ID, 'blanket_background_img', true);
                    include BLANKET_VIEWS . "metaboxes/backgroundimg.metabox.php";

                }, // callback function
                'page', // the post_type this meta box is associated with
                'side',
                'core'
            );

            add_action(
                'edit_form_after_editor',
                function($post)
                {
                    $blanket_jumbotron = get_post_meta($post->ID, 'blanket_jumbotron', true);
                    $sections = get_post_meta($post->ID, 'blanket_content_section', true);
                    include BLANKET_VIEWS . "metaboxes/jumbotron.metabox.php";
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

        if( isset($_POST["blanket_contact"]) ) {
            foreach ($_POST["blanket_contact"] as $key) {
                update_post_meta($post_id, "blanket_contact", $_POST["blanket_contact"]);
            }
        }

        if( isset($_POST["blanket_background_img"]) ) {
            foreach ($_POST["blanket_background_img"] as $key) {
                update_post_meta($post_id, "blanket_background_img", $_POST["blanket_background_img"]);
            }
        }

        if( isset($_POST["blanket_pagetype"]) ) {
            foreach ($_POST["blanket_pagetype"] as $key) {
                update_post_meta($post_id, "blanket_pagetype", $_POST["blanket_pagetype"]);
            }
        }

        if( isset($_POST["blanket_jumbotron"]) ) {
            foreach ($_POST["blanket_jumbotron"] as $key) {
                update_post_meta($post_id, "blanket_jumbotron", $_POST["blanket_jumbotron"]);
            }
        }

        if( isset($_POST["blanket_content_section"]) ) {
            foreach ($_POST["blanket_content_section"] as $key) {
                update_post_meta($post_id, "blanket_content_section", $_POST["blanket_content_section"]);
            }
        }
    }

    public static function show($content)
    {
        global $post;
        $slug = basename( get_permalink( $post->ID ) );
        // if( "page" != $post->post_type ) return $content;
        // if( "contact" != $slug || "contact-us" != $slug ) return $content;



        $data = get_post_meta($post->ID, "blanket_contact", true);
        echo '<ul>';
        if (count($data) > 0){

                echo '<li>Number: '.$data['map'].' Description: '.$data['unit'].' Price: '.$data['city'].'</li>';
        }
        echo '</ul>';

        // Return the values: quote first, then the content
        return $content;

    }

    public static function get($post_meta)
    {
        global $post;

    }
}
 ?>