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
                            <blockquote class="col-sm-7 msg nsize wcolor quote"><?php
                                echo $testimonial->post_content ?>
                                <cite><?php echo $testimonial->post_title ?></cite>
                            </blockquote>
                            <div class="col-sm-5 avatar">
                                <img class="img-circle" width="122" height="122" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $testimonial->ID ) ) ?>"/>
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