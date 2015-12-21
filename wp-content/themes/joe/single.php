<?php
get_header(); ?>


<div class="content single-content">
    <?php if ( have_posts() ) :
        ## Start the loop.
        while ( have_posts() ) : the_post(); ?>
            <div class="banner banner-img">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="container">
                <div class="col-sm-12">
                    <h1 class="title theme-color"><?php the_title() ?></h1>
                    <?php echo get_the_content() ?>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>

<?php

get_footer(); ?>