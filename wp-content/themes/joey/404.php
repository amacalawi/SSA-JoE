<?php
get_header();
get_template_part("navigationlink"); ?>

    <div class="container">
        <div class="page-section page-404">
            <div class="col-sm-12">
                <h1 class="text-center page-404-title"><?php _e('404 Error', BLANKET_TEXT_DOMAIN) ?></h1>
                <div class="text-center text-uppercase page-404-description">
                    <p>The page does not exist.</p>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3 page-404-searchform"><?php
                get_search_form(); ?>
            </div>
        </div>
    </div> <?php

get_footer();
 ?>