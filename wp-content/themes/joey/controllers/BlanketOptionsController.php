<?php

class BlanketOptionsController
{
    public static $menu_slug = 'blanket_theme_options';
    public static $menu_settings = 'blanket_theme_options';

    public function register()
    {
        register_setting(self::$menu_settings, self::$menu_settings);
    }

    public function pages()
    {
        add_options_page(
            'Site Options',
            'Site Options',
            'administrator',
            self::$menu_slug,
            function()
            {
                global $post_id;
                $blanket_options = $this->get_options();
                $menu_settings = self::$menu_settings;
                include BLANKET_VIEWS . "options.php";
            }
        );
    }

    public function get_options()
    {
        return get_option( self::$menu_settings );
    }

    public function save($post_id)
    {
        if(!isset( $_POST['blanket_metabox_nonce'] )) {
            return;
        }
        # Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['blanket_metabox_nonce'], 'save_metaboxes' ) ) {
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
        # Profile
        if( isset($_POST[ self::$menu_settings ]) ) {
            foreach ($_POST[ self::$menu_settings ] as $key)
            {
                update_post_meta($post_id,  self::$menu_settings , $_POST[ self::$menu_settings ]);
            }
        }
    }
}