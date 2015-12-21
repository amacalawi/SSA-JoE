            <?php
            $carousels = get_post_meta($post->ID, 'blanket_carousel', true); ?>
            <section class="top-slider">
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
            </section>

            <section class="journey">
                <div class="container"><?php
                    if(has_post_thumbnail()) { ?>
                    <div class="col-sm-offset-1 col-sm-5">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>"/>
                    </div><?php
                    } ?>
                    <div class="<?php echo (has_post_thumbnail()?'col-sm-5':'col-sm-12') ?>">
                        <h1 class="title"><?php the_title() ?></h1><?php
                        the_content() ?>
                    </div><div class="clearfix"></div>
                </div>
            </section>


            <?php
            $sections = get_post_meta($post->ID, 'blanket_sections', true);
            foreach ($sections as $section) { ?>
                <section class="<?php echo !empty($section['section_class'])?$section['section_class']:'stars' ?>">
                    <div class="container">
                        <div class="col-sm-offset-2 col-sm-8">
                            <?php if($section['heading']): ?><h1 class="wcolor text-center"><?php echo $section['heading'] ?></h1><?php endif; ?>
                            <?php if($section['content']): ?><p class="wcolor text-center"><?php echo $section['content'] ?></p><?php endif; ?>
                        </div>
                    </div>
                </section> <?php
            } ?>

            <?php
            $parts =get_post_meta($post->ID, 'blanket_parts', true); ?>
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
            </section>

            <?php echo do_shortcode('[photogal id="81"]'); ?>

            <?php echo do_shortcode('[testimonials]') ?>