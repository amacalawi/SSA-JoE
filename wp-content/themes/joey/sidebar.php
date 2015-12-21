<?php
# More from Author
if( is_single() ) {
    $recent_posts_from_author = get_posts( ['post_status'=>'publish', 'author'=> get_the_author_meta('ID'), 'numberposts'=>5] ); ?>

    <div class="author-card">
        <div class="row">
            <div class="col-xs-12">
                <div class="pull-left blog-author-avatar"><?php
                    echo get_avatar( get_the_author_meta('ID') ); ?>
                </div>
                <h5><?php the_author_posts_link(); ?></h5>
                <!-- <h5><?php echo get_author_fullname() ?></h5> -->
                <div class="text-justified"><?php
                    echo wpautop(get_the_author_meta('description')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12"><?php
                if( count($recent_posts_from_author) > 1 ) { ?>
                <strong>More from <?php echo get_the_author_meta('first_name') ?></strong><?php
                } ?>
                <ul class="posts-from-author"><?php
                    # Display most recent author's blog if on a single page
                    foreach( $recent_posts_from_author as $recent ) {
                        if( get_the_ID()!=$recent->ID ): ?>
                        <li class="<?php echo (get_the_ID()==$recent->ID?'active':'') ?>"><?php if(get_the_ID()!=$recent->ID) { ?><a href="<?php echo get_permalink($recent->ID); ?>"><?php } ?><?php echo $recent->post_title ?><?php if(get_the_ID()!=$recent->ID) { ?></a><?php } ?></li> <?php
                        endif;
                    } ?>
                </ul>
            </div>
        </div>
    </div><?php
} ?>

<div class="sidebar well">
    <div class="form-group"><?php
    if( !is_search() )
        get_search_form(); ?>
    </div>
    <h3 class="text-uppercase">Recent Posts</h3>
    <ul class="most-recent-posts"><?php
        $recent_posts = wp_get_recent_posts(['post_status'=>'publish']);
        foreach( $recent_posts as $recent ) { ?>
            <li class="<?php echo (get_the_ID()==$recent["ID"]?'active':'') ?>">
                <a href="<?php echo get_permalink($recent["ID"]) ?>" >
                    <?php echo $recent["post_title"] ?>
                </a>
                <p class="blog-author"><i class="fa fa-edit">&nbsp;</i><?php echo get_author_fullname( $recent["post_author"] ); ?></p>
            </li> <?php
        } ?>
    </ul><?php

    if(!is_page('blog')) { ?>
        <small class="text-saturated">Go to <a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) ?>">Blog page</a> to see all our Blog posts.</small><?php
    } else {

        $search_query = array('post_type' => 'post', 'post_status'=>'publish', 's'=>get_search_query());
        $search = new WP_Query( $search_query ); ?>

        <small class="text-saturated text-italic">Showing <?php echo count($recent_posts); ?> of <?php echo $search->post_count ?> blog entries</small> <?php
        wp_reset_query();

    } ?>
</div>