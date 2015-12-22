<?php $heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="<?php echo $post->post_name ?>-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="left"></div>
    <div class="right">
        <div id="map"></div>
        <div class="overlay-holder">
            <div class="map-overlay"></div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="title theme-color"><?php echo(empty($heading['heading']) ? get_the_title() : $heading['heading']) ?></h1>

            <h3 class="dosis-reg"><?php echo $post->post_content ?></h3>

            <?php

            the_contact_info();
            $blanket_options = get_option('blanket_theme_options');
            if( $blanket_options['contact']['tel'] && $tel = $blanket_options['contact']['tel'] ) { ?>
                <a href="tel:<?php echo $tel ?>" class="tel">Tel: <?php echo $tel ?></a><br> <?php
            }
            if( $blanket_options['contact']['fax'] && $fax = $blanket_options['contact']['fax'] ) { ?>
                <span class="fax">Fax: <?php echo $fax ?></span><br> <?php
            }
            if( $blanket_options['contact']['email'] && $email = $blanket_options['contact']['email'] ) { ?>
                <a href="mailto:<?php echo $email ?>" class="email"><?php echo $email ?></span> <?php
            } ?>
            <h4 class="dosis-reg">
                Follow us
                <span class="social">
                <a target="_blank" href="<?php echo $blanket_options['social']['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="<?php echo $blanket_options['social']['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="<?php echo $blanket_options['social']['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
                </span>
            </h4>
        </div>
        <div class="col-sm-6 pad-right-zero right-layer">
            <div class="contact-form-container">
                <?php $contact_form = get_post_meta($post->ID, 'Contact Form', true);
                echo do_shortcode($contact_form); ?>
            </div>

        </div>
        <button class="btn btn-yellow btn-show-toggle" data-shrink=".right-layer" data-target=".map-overlay, .contact-form-container">View Map</button>
    </div>
</section>