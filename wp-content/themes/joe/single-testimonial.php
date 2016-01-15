<?php
/*
 | -----------------------------------------
 | # Template for Testimonials
 | -----------------------------------------
 */

get_header(); ?>


<div class="content single-testimonials-content single-content">
    <?php if ( have_posts() ) :
        ## Start the loop.
        while ( have_posts() ) : the_post(); ?>
            <div class="single-content-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-xs-12">
                                <div class="testimonials-thumbnail text-right">
                                    <?php the_post_thumbnail(['auto','auto']) ?>
                                </div>
                            </div>
                            <div class="col-offset-md-1 col-md-6 col-xs-12">
                                <h1 class="testimonials-title theme-color text-uppercase"><?php the_title() ?></h1>
                                <div class="testimonials-content">
                                    <?php echo do_shortcode(wpautop(get_the_content())); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="container-fluid other-testimonies-container">
                <div class="col-sm-12">
                    <div class="other-testimonies">
                        <?php
                        $testimonial = new TestimonialController();
                        echo do_shortcode('[testimonials title="Other Testimonials"]'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>


<?php

get_footer(); ?>