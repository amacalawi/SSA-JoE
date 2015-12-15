<div class="content">

    <!-- top-slider -->
    <section class="top-slider"><?php
        the_carousel(); ?>
    </section>

    <!-- journey -->
    <?php

    $sections = get_post_meta( $post->ID, 'blanket_sections', true );
    foreach ($sections as $section) {
        switch( $section['parentclass'] ) {

            case 'journey': ?>
                <section class="journey">
                    <div class="container"><?php
                        if( !empty($section['image']) ) { ?>
                        <div class="col-sm-offset-1 col-sm-5">
                            <img src="<?php echo $section['image'] ?>"/>
                        </div><?php
                        } ?>
                        <div class="col-sm-5">
                            <h1 class="title"><?php echo $section['heading'] ?></h1>
                            <p><?php echo $section['content'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section><?php
            break;

            case 'student': ?>
                <section class="student">
                    <div class="container">
                        <div class="col-sm-6">
                            <h1><?php echo $section['contentleft'] ?></h1>
                            <img class="pull-right" src="<?php echo $section['imageleft'] ?>"/>
                        </div>
                        <div class="col-sm-6">
                            <h1><?php echo $section['contentright'] ?></h1>
                            <img class="pull-left" src="<?php echo $section['imageright'] ?>"/>
                        </div><div class="clearfix"></div>
                    </div>
                </section> <?php
                break;

            case 'stars': default: ?>
                <!-- stars -->
                <section class="stars" style="background-image: url(<?php echo $section['image'] ?>)">
                    <div class="container">
                        <div class="col-sm-offset-2 col-sm-8">
                            <h1 class="wcolor text-center"><?php echo $section['content'] ?></h1>
                        </div>
                    </div>
                </section> <?php
            break;

        }
    } ?>

    <!-- photo section -->
    <section class="photo-gallery">
        <div class="container">
            <div class="col-sm-12">
                <h1 class="text-center">Photo Gallery</h1>
                <p class="col-sm-offset-3 col-sm-6 text-center">delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p>
            </div><div class="clearfix"></div>

            <div class="col-sm-offset-1 col-sm-10">
                <!-- <div id="gallery-slider" class="owl-carousel">
                    <div class="item">
                        <div class="col-sm-4">
                            <img src="../assets/front/images/gallery1.png"/>
                        </div>
                        <div class="col-sm-4">
                            <img src="../assets/front/images/gallery2.png"/>
                        </div>
                        <div class="col-sm-4">
                            <img src="../assets/front/images/gallery3.png"/>
                        </div><div class="clearfix"></div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <img src="../assets/front/images/gallery1.png"/>
                        </div>
                        <div class="col-sm-4">
                            <img src="../assets/front/images/gallery2.png"/>
                        </div>
                        <div class="col-sm-4">
                            <img src="../assets/front/images/gallery3.png"/>
                        </div><div class="clearfix"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="testimonial">

    </section>



</div>