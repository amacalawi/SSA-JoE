<?php
/*
| ---------------------------------------------------------
| # Unsets
| ---------------------------------------------------------
|
*/

add_action('wp_dashboard_setup', function () {
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

});

# Unset pages, CPT
# Remove menus
add_action( 'admin_menu', 'remove_menus' );
function remove_menus() {
    // remove_menu_page( 'edit.php' ); // posts
    remove_menu_page( 'edit-comments.php' ); // comments
}
add_action( 'admin_head', function () {?>
    <style type="text/css" media="screen">
        #wp-admin-bar-new-post {
        display: none;
    }
    </style><?php
});

add_action( 'admin_init', 'blanket_remove_menu_pages' );
function blanket_remove_menu_pages() {

    global $user_ID;

    if ( current_user_can( 'author' ) || current_user_can( 'editor' ) ) {
        remove_menu_page( 'edit.php?post_type=employee' );
        remove_menu_page( 'edit.php?post_type=event' );
        remove_menu_page( 'edit.php?post_type=service' );
        // remove_menu_page( 'authorhreview' );
    }
}


?>