<?php
$args = array( 'category_name' => get_the_title(), 'post_status' => 'publish', 'orderby'=>'date', 'order'=>'ASC' );
$posts = get_posts( $args ); ?>

<div class="content"> <?php

    foreach ($posts as $post) {
        setup_postdata($post);
        $custom_meta = get_post_custom();


        if( has_category('jumbotron') ) { ?>


            <section class="about-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
                <div class="container">
                    <div class="col-sm-offset-6 col-sm-6">
                        <h1 class="title theme-color"><?php the_title() ?></h1>
                        <h1 class="title"><?php echo $custom_meta["heading"][0] ?></h1>
                        <h2 class="desc dosis-reg"><?php the_content() ?></h2>
                    </div>
                </div>
            </section> <?php

        } elseif( has_category('phase-about') ) { ?>

            <section class="about-phase1">
                <div class="container">
                    <div class="col-sm-offset-1 col-sm-5 text-center">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>">
                    </div>
                    <div class="col-sm-5">
                        <h1 class="title theme-color"><?php the_title() ?></h1>
                        <?php the_content(); ?>
                    </div><div class="clearfix"></div>
                </div>
            </section> <?php

        } elseif( has_category('background') ) { ?>

            <section class="stars" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
                <div class="container">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h1 class="wcolor text-center dosis-reg"><?php echo $post->post_content; ?></h1>
                    </div>
                </div>
            </section> <?php

        };
    } ?>

</div>