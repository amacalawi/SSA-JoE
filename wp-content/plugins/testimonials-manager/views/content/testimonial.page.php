<section class="testimonial">
    <div class="container">
        <div class="col-sm-12">
            <h1 class="text-center theme-color title">Testimonials</h1>
            <!-- <p class="col-sm-offset-3 col-sm-6 text-center">delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p> -->
        </div><div class="clearfix"></div>
        <div class="col-sm-offset-1 col-sm-10">
            <div id="testi-slider" class="owl-carousel">

                <?php
                foreach ($_testimonials as $testimonial) {

                    if($i%6 == 0) {
                        echo $i > 0 ? "</div>" : ""; // close div if it's not the first
                        echo "<div class='item'>";
                    } ?>

                    <div class="col-sm-6 text-left">

                        <div class="row">
                            <blockquote class="col-sm-7 msg nsize wcolor quote text-left"><?php
                                echo substr( do_shortcode( wpautop($testimonial->post_content) ), 0, 65 ) . (strlen($testimonial->post_content)>65?'... <a href="'.get_the_permalink($testimonial->ID) .'" class="readmore quote">Read More</a>':''); ?>
                                <div class="cite-container">
                                    <cite class="text-right"><?php echo $testimonial->post_title ?></cite>
                                </div>

                            </blockquote>
                            <div class="col-sm-5 avatar">
                                <a href="<?php echo get_the_permalink($testimonial->ID) ?>"><img class="img-circle" width="122" height="122" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $testimonial->ID ) ) ?>"/></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div> <?php

                    $i++;

                } ?>
                </div></div>

            </div>
        </div>
    </div>
</section>
<?php


?>