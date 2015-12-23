<?php
/*
 | -----------------------------------------
 | # Template for Testimonials
 | -----------------------------------------
 */

get_header(); ?>


<div class="content single-testimonial-content single-content">
    <?php if ( have_posts() ) :
        ## Start the loop.
        while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class="col-sm-12">
                    <div class="">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <h1 class="title theme-color"><?php the_title() ?></h1>
                    <?php echo get_the_content() ?>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>


<?php

get_footer(); ?>