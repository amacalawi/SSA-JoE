<?php
/*
 | -----------------------------------------
 | # Template for Phase
 | -----------------------------------------
 */

get_header(); ?>


<div class="content single-phase-content single-content">
    <?php if ( have_posts() ) :
        ## Start the loop.
        while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class="col-md-5 col-xs-12">
                    <div class="img-circle phase-thumbnail">
                        <?php the_post_thumbnail(['auto','auto'],['class'=>'img-circle']) ?>
                    </div>
                </div>
                <div class="col-offset-md-1 col-md-5 col-xs-12">
                    <h1 class="phase-title theme-color text-uppercase"><?php the_title() ?></h1>
                    <div class="phase-content">
                        <?php echo do_shortcode(get_the_content()); ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>


<?php

get_footer(); ?>