<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php
    wp_head(); ?>
</head>
<body id="<?php echo $post->post_name; ?>">
    <div class="preloader">
        <div class="preloader-inner">
            <img src="<?php echo BLANKET_ASSETS_URI . 'logos/main.png' ?>" alt="<?php bloginfo('name') ?>">
            <div class="loader">Please wait...</div>
        </div>
    </div> <?php
    get_template_part("views/templates/partials/navigation") ?>