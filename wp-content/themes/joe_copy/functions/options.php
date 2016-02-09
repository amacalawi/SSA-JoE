<?php
include BLANKET_DIR_CONTROLLERS."BlanketOptionsController.php";

global $post_id;
$blanket_options = new BlanketOptionsController();

add_action('admin_init', 'bto_admin_init');
function bto_admin_init() {
    global $blanket_options;
    $blanket_options->register();
}

add_action('admin_menu', 'blanket_add_menu_pages');
function blanket_add_menu_pages() {
    global $blanket_options;
    $blanket_options->pages();
}

 ?>