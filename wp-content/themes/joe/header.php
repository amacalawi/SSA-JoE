<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php
    wp_head(); ?>
</head>
<body id="<?php echo $post->post_name; ?>"><?php
    get_template_part("views/templates/partials/navigation") ?>