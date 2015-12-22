<?php $blanket_heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<?php if(has_post_thumbnail()): ?>
<div class="banner-img">
    <?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>
<section class="centre-banner">
    <div class="container">
        <div class="col-sm-6 text-left">
            <h1 class="title theme-color text-uppercase"><?php echo $blanket_heading['heading'] ?></h1>
            <p><?php echo $blanket_heading['content'] ?></p>
        </div>
        <div class="col-sm-6 text-right">
            <h4>Follow us
                <?php $blanket_contact = get_option( "blanket_theme_options" ); ?>
                <a target="_blank" href="<?php echo $blanket_contact['social']['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="<?php echo $blanket_contact['social']['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="<?php echo $blanket_contact['social']['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
            </h4>

            <div class="row">
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="form-group"><?php

                        /**
                         * From enrollment-manager plugin
                         * @see  <plugin-dir>/includes/helpers.php
                         */
                        enroll_centre_dropdown(); ?>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div id="centre-box-container">
                    <?php

                    // echo do_shortcode('[enroll]');

                     ?>
                </div>
            </div>
        </div>

    </div>
</section>