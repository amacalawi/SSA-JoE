<?php get_header();

get_template_part("navigationlink"); ?>

<div class="category-page page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="category-header">
                    <h1 class="main-title"><?php single_cat_title( "", true ); ?></h1>
                    <p class="category-desc"><?php echo category_description(); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
            <!-- Blog -->
            <?php
            /*
            | -------------------
            | # Get all the Posts
            | -------------------
            */
            $the_posts = get_posts(['cat'=>get_query_var('cat')]);
            if( empty($the_posts) ) { ?>

                <p class="text-saturated text-italic text-center"><?php _e('No Blog posts found.', BLANKET_TEXT_DOMAIN) ?></p> <?php

            }
            foreach ($the_posts as $key => $the_post) {
                $post = get_post( $the_post->ID ); setup_postdata($post); ?>
                <div class="row">
                <section id="blog-item-<?php echo get_the_ID(); ?>" class="blog-item col-md-12">
                    <!-- <div style="<?php echo $blanket_section_style;?>;z-index: -1;"></div> -->

                        <div class="panel panel-default panel-card blog blog-default">
                            <div class="flex-container"><?php
                                if(has_post_thumbnail()) { ?>
                                <div class="panel-photo blog-photo">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                </div><?php
                                } ?>
                                <div class="blog-content">
                                    <div class="panel-heading blog-heading">
                                        <a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
                                        <small class="text-saturated"><i class="fa fa-edit">&nbsp;</i><?php echo the_author_posts_link(); ?></small>
                                        <span class="text-saturated">&nbsp;|&nbsp;</span>
                                        <small class="text-saturated"><i class="fa fa-clock-o">&nbsp;</i><?php echo get_the_date(); ?></small>
                                        <span class="text-saturated">&nbsp;|&nbsp;</span>
                                        <small class="text-saturated"><i class="fa fa-th-list">&nbsp;</i><?php echo get_the_category_list(", "); ?></small>
                                    </div>
                                    <div class="panel-body"><?php
                                        the_excerpt(); ?>
                                        <a role="button" href="<?php the_permalink() ?>" class="btn btn-gold pull-right">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                </div><?php
            } the_posts_pagination(); ?>
        </div>
        <aside class="col-lg-3"><?php
            # Sidebar
            get_template_part("sidebar"); ?>
        </aside>
        </div>
    </div>
</div> <?php


get_footer(); ?>