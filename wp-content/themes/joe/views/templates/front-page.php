            <section class="top-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="opening opening-animation">
                                <div class="container">
                                    <div class="col-sm-7">
                                        <div class="caption">
                                            <h1 class="title text-uppercase">Pave his <strong class="theme-color">Journey of Entrepreneurship</strong> <strong class="color-danger">Now!</strong></h1>
                                            <p><a href="<?php echo bloginfo('url') ?>/enrol" class="btn btn-danger btn-lg text-uppercase">Register</a></p>
                                        </div>
                                    </div>
                                </div>
                                <iframe src="https://publish.animatron.io/5704b056c2d70452f8e2466a?w=1903&h=900&a=1&r=1&c=0" width="1903" height="900" frameborder="0"></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <?php
            $carousels = get_post_meta($post->ID, 'blanket_carousel', true); ?>
            <!-- <section class="top-slider">
                <div class="flexslider">
                    <ul class="slides"><?php
                        foreach ($carousels as $carousel) { ?>

                            <li style="background-image: url(<?php echo $carousel['image'] ?>)">
                                <div class="container">
                                    <div class="<?php echo $carousel['subheadingclass'] ?>">
                                        <?php if(!empty($carousel['heading'])): ?><h1><?php echo $carousel['heading'] ?></h1><?php endif; ?>
                                        <?php if(!empty($carousel['subheading'])): ?><h1><?php echo $carousel['subheading'] ?></h1><?php endif; ?>
                                    </div><div class="clearfix"></div>
                                </div>
                            </li> <?php

                        } ?>
                    </ul>
                </div>
            </section> -->

            <section class="journey">
                <div class="container"><?php
                    $heading = get_post_meta($post->ID, 'blanket_heading', true);
                    if( $heading['content'] ) { ?>
                    <div class="col-sm-offset-1 col-sm-5">
                        <div class="hides">
                            <?php echo do_shortcode( $heading['content'] ) ?>
                        </div>
                        <!-- <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>"/> -->
                    </div><?php
                    } ?>
                    <div class="<?php echo (has_post_thumbnail()?'col-sm-5':'col-sm-12') ?>">
                        <h1 class="title"><?php echo $heading['heading']; ?></h1><?php
                        echo wpautop($heading['subheading']) ?>
                    </div><div class="clearfix"></div>
                </div>
            </section>


            <?php
            $parts =get_post_meta($post->ID, 'blanket_parts', true);
            if( isset($parts['part_class']) ): ?>
            <section class="<?php echo $parts[0]['part_class'] ? $parts[0]['part_class'] : 'student' ?>">
                <div class="container">
                    <div class="col-sm-6">
                        <h1><?php echo $parts[0]['heading'] ?></h1>
                        <img class="pull-right" src="<?php echo $parts[0]['image'] ?>"/>
                    </div>
                    <div class="col-sm-6">
                        <h1><?php echo $parts[1]['heading'] ?></h1>
                        <img class="pull-left" src="<?php echo $parts[1]['image'] ?>"/>
                    </div><div class="clearfix"></div>
                </div>
            </section><?php
            endif; ?>

            <?php echo do_shortcode('[photogal id="81"]'); ?>

            <?php echo do_shortcode('[testimonials]') ?>


            <?php
            $sections = get_post_meta($post->ID, 'blanket_sections', true);
            foreach ($sections as $section) { ?>
                <section class="<?php echo !empty($section['section_class'])?$section['section_class']:'stars' ?>">
                    <div class="container">
                        <div class="col-sm-offset-2 col-sm-8">
                            <?php if($section['heading']): ?><h1 class="wcolor text-center"><?php echo $section['heading'] ?></h1><?php endif; ?>
                            <?php if($section['content']): ?><p class="wcolor text-center"><?php echo do_shortcode( $section['content'] ) ?></p><?php endif; ?>
                        </div>
                    </div>
                </section> <?php
            } ?>