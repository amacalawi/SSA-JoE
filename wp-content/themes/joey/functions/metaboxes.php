<?php
include BLANKET_DIR_CONTROLLERS . "BlanketMetaboxesController.php";

global $post_id;
$blanket_metabox = new BlanketMetaboxesController();

add_action('add_meta_boxes_page', function() {
    global $blanket_metabox;
    $blanket_metabox->add();
});

add_action('save_post', function($post_id) {
    global $blanket_metabox;
    $blanket_metabox->save($post_id);
});

 ?>