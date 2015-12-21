<?php
get_header();
get_template_part("navigationlink"); ?>

<div class="author-page page-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="author-card clearfix">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="author-avatar aligncenter alignmiddle"><?php
                                echo get_avatar( get_the_author_meta('ID') ); ?>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="author-info">
                                <h1 class="blog-author text-left"><?php echo get_author_fullname(); ?></h1>
                                <div class="text-justified"><?php
                                    echo wpautop(get_the_author_meta('description')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><?php

                $all_posts_from_author = get_posts( ['post_status'=>'publish', 'author'=> get_the_author_meta('ID'), 'numberposts'=>-1] ); ?>

                <h4 class="text-saturated">See more of <?php echo get_the_author_meta('first_name') ?>'s articles (<?php echo count($all_posts_from_author); ?>)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="clearfix">
                    <div class="author-posts"><?php

                        foreach ($all_posts_from_author as $the_all_post) {
                            $post = get_post( $the_all_post->ID ); setup_postdata($post); ?>
                            <div class="blog-item">
                                <div class="row">
                                    <div class="col-lg-12">
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
                                                        <small class="text-saturated"><i class="fa fa-th-list">&nbsp;</i><?php echo get_the_category_list(","); ?></small>
                                                    </div>
                                                    <div class="panel-body"><?php
                                                        the_excerpt(); ?>
                                                        <a role="button" href="<?php the_permalink() ?>" class="btn btn-gold pull-right">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <?php
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3"><?php
                get_template_part("sidebar") ?>
            </div>
        </div>
    </div>
</div>


<?php

get_footer();
 ?>