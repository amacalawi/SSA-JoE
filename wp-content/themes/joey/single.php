<?php
get_header();

get_template_part("navigationlink"); ?>
    <div id="main-content-container"><?php

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="blogs blog-entry page-section">
        <div class="container">
            <div class="col-lg-9 blog-header">
                <h1 class="heading main-title text-left"><?php the_title(); ?></h1>
                <div class="blog-info">
                    <small class="text-left text-saturated blog-author"><i class="fa fa-edit">&nbsp;</i>by <?php echo the_author_posts_link(); ?></small>
                    <span class="text-saturated">&nbsp;|&nbsp;</span>
                    <small class="text-saturated"><i class="fa fa-th-list">&nbsp;</i><?php echo get_the_category_list(", "); ?></small>
                    <p><small class="text-saturated blog-date"><i class="fa fa-clock-o">&nbsp;</i><?php echo get_the_date(); ?></small></p>
                </div>
            </div>
            <main class="main-blog-content col-lg-9"><?php
                if(has_post_thumbnail()): ?>
                <div class="blog-photo"><?php
                    the_post_thumbnail() ?>
                </div><?php
                endif;
                if("" != $post->post_content) : ?>
                <div class="blog-main-entry">
                    <div class="content-description"><?php
                        the_content(); ?>
                    </div>
                </div><?php
                endif; ?>

            </main>
            <aside class="col-lg-3"><?php
                # Sidebar
                get_template_part("sidebar"); ?>
            </aside>
        </div>
    </div> <?php

endwhile; // end of the loop

get_footer();
 ?>