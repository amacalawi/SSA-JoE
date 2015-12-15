<?php
include BLANKET_DIR_CONTROLLERS . "BlanketBootstrapCarouselController.php";

$blanket_carousel = new BlanketBootstrapCarouselController();

add_action('add_meta_boxes_page', function() {
    global $blanket_carousel;
    $blanket_carousel->add();
});

add_action('save_post', function($post_id) {
    global $blanket_carousel;
    $blanket_carousel->save($post_id);
});




 ?>