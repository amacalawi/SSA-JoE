<div class="page-section search-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <header class="page-heading">
                    <h1 class="page-title text-gold"><i class="fa fa-search">&nbsp;</i><?php _e('Search Results', BLANKET_TEXT_DOMAIN); ?></h1>
                </header>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <span class="search-text-display">Displaying <?php echo $displayed_results . " of " . $total_results; ?> results found.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="form-group"><?php
                    get_search_form(); ?>
                </div> <?php

                while ( $search->have_posts() ) { $search->the_post(); ?>
                    <div class="row search-content-result">
                        <div class="col-sm-3 search-img">
                            <a href="<?php the_permalink() ?>"><?php
                                the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h3 class="search-title"><?php
                                if($post->post_type == 'post') { ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php
                                } ?>
                            </h3>
                            <div class="search-info">
                                <small class="text-saturated"><i class="fa fa-edit">&nbsp;</i><?php echo the_author_posts_link(); ?></small>
                                <span class="text-saturated">&nbsp;|&nbsp;</span>
                                <small class="text-saturated"><i class="fa fa-clock-o">&nbsp;</i><?php echo get_the_date(); ?></small>
                                <span class="text-saturated">&nbsp;|&nbsp;</span>
                                <small class="text-saturated"><i class="fa fa-th-list">&nbsp;</i><?php echo get_the_category_list(", "); ?></small>
                                <div class="text-justified">
                            </div> <?php
                                echo get_search_excerpt_highlight(); ?>
                            </div>
                            <a href="<?php the_permalink() ?>" class="btn btn-gold">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div><?php
                }; ?>
            </div>
            <aside class="col-md-3 col-sm-12"><?php
                get_sidebar() ?>
            </aside>
        </div>
        <nav class="pagination"><?php
            echo get_pagination_bar($search); ?>
        </nav>
    </div>
</div>
