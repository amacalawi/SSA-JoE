<div class="content">

    <!-- top-slider -->
    <section class="top-slider">
        <div class="flexslider">
            <ul class="slides"><?php
                $args = array( 'category_name' => get_the_title(), 'post_status' => 'publish', 'orderby'=>'date', 'order'=>'ASC' );
                $posts = get_posts( $args );
                foreach ($posts as $post) {
                    setup_postdata($post);

                    if( has_category('carousel') ) {
                        $custom_meta = get_post_custom(); ?>

                        <li style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
                            <div class="container">
                                <div class="<?php echo !empty($custom_meta['parent_class'][0])?$custom_meta['parent_class'][0]:'col-sm-offset-1 col-sm-6' ?>">
                                    <h1><?php echo $custom_meta['heading'][0] ?></h1>
                                </div><div class="clearfix"></div>
                            </div>
                        </li><?php
                    }

                }; wp_reset_query(); ?>
            </ul>
        </div>
    </section><?php

    $args = array( 'category_name' => get_the_title(), 'post_status' => 'publish', 'orderby'=>'date', 'order'=>'ASC' );
    $posts = get_posts( $args );
    foreach ($posts as $post) {
        setup_postdata($post);

        if( has_category('phase-home') ) { ?>

            <section class="journey">
                <div class="container">
                    <div class="col-sm-offset-1 col-sm-5">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>"/>
                    </div>
                    <div class="col-sm-5">
                        <h1 class="title"><?php the_title(); ?></h1><?php
                        the_content(); ?>
                    </div><div class="clearfix"></div>
                </div>
            </section> <?php

        } elseif( has_category('background') ) { ?>

            <section class="stars">
                <div class="container">
                    <div class="col-sm-offset-2 col-sm-8">
                        <h1 class="wcolor text-center"><?php echo $post->post_content ?></h1>
                    </div>
                </div>
            </section> <?php

        }

    } wp_reset_query(); ?>


    <section class="student">
        <div class="container"><?php
            $args = array( 'category_name' => get_the_title(), 'post_status' => 'publish', 'orderby'=>'date', 'order'=>'ASC' );
            $posts = get_posts( $args );

            foreach ($posts as $post) {
                setup_postdata($post);

                if( has_category('section') && has_category('left-side') ) {
                    $custom_meta = get_post_custom(); ?>

                    <div class="col-sm-6">
                        <h1><?php echo $custom_meta['heading'][0]; ?></h1>
                        <img class="pull-right" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>"/>
                    </div> <?php

                }
            } wp_reset_query();

            $args = array( 'category__and' => [get_the_title(), 'section'], 'post_status' => 'publish', 'orderby'=>'date', 'order'=>'ASC' );
            $posts = get_posts( $args );
            foreach ($posts as $post) {
                setup_postdata($post);

                if( has_category('section') && has_category('right-side') ) {
                    $custom_meta = get_post_custom(); ?>

                    <div class="col-sm-6">
                        <h1><?php echo $custom_meta['heading'][0]; ?></h1>
                        <img class="pull-right" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>"/>
                    </div>
                    <div class="clearfix"></div> <?php

                }
            } wp_reset_query(); ?>
        </div>
    </section>


    <!-- journey -->
    <?php

    $sections = get_post_meta( $post->ID, 'blanket_sections', true );
    if( is_array($sections) ):
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
    }
    endif; ?>

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
<?php
wp_reset_query(); ?>