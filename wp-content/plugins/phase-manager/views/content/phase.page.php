<?php
$tax=get_taxonomies(
    array( 'name' => 'phasems_phases_categories' )
);
$parent = get_term_by('slug', 'phase', 'phasems_phases_categories');;
$categories= get_terms(
    $tax,
    array( 'parent' => $parent->term_id )
); ?>

<section class="programme-phase">
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">
            <div class="tab-content">
            <?php
            foreach ($categories as $key => $category) {
                //then i get the data from the database
                $cat_data = get_option("category_".$category->term_id); ?>

                <div role="tabpanel" class="tab-pane <?php echo(0==$key?'fade in active':'') ?> <?php echo $category->slug ?>">
                    <h1 class="title text-center text-uppercase"><?php echo $category->name ?></h1>
                    <?php if($cat_data['heading']): ?><h1 class="text-center text-uppercase"><?php echo $cat_data['heading'] ?></h1><?php endif; ?>
                    <?php if($cat_data['subheading']): ?><p class="text-center"><?php echo $cat_data['subheading'] ?></p><?php endif; ?>
                </div>
                <?php

            } ?>
            </div>

            <div class="text-center">
                <ul class="nav nav-tabs" role="tablist">
                <?php
                foreach ($categories as $key => $category) { ?>

                    <li role="presentation" class="<?php echo(0==$key?'active':'') ?>">
                        <a href=".<?php echo $category->slug ?>" aria-controls="<?php echo $category->slug ?>" role="tab" data-toggle="tab">
                            <?php echo $category->name ?>
                        </a>
                    </li>

                    <?php

                } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php
                    foreach ($categories as $key => $category) {
                        //then i get the data from the database
                        $cat_data = get_option("category_".$category->term_id);
                        ?>

                        <div role="tabpanel" class="tab-pane <?php echo(0==$key?'fade in active':'') ?> <?php echo $category->slug ?>">
                            <?php

                            // retrieve all phase posts in this category
                            $args = array(
                                'post_type' => PhaseController::$cpt_name_singular,
                                'post_status' => 'publish',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'phasems_phases_categories',
                                        'field' => 'id',
                                        'terms' => $category->term_id, // Where term_id of Term 1 is "1".
                                        'include_children' => false
                                    )
                                ),
                                'posts_per_page' => -1,
                            );
                            $phases = get_posts( $args );

                            foreach ($phases as $key => $phase) { ?>
                                <div class="col-sm-4 text-center">
                                    <img width="220" height="220" class="img-circle" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $phase->ID ) ) ?>"/>
                                    <h3 class="text-uppercase theme-color">
                                        <?php echo $phase->post_title ?>
                                    </h3>
                                    <?php echo wpautop( substr($phase->post_content, 0, 150) . "..." ); ?>
                                    <a href="<?php echo get_the_permalink($phase->ID) ?>" class="btn btn-info">read more</a>
                                </div> <?php

                            }

                             ?>
                        </div>

                        <?php

                    } ?>


                </div>
            </div><!--center-->


        </div>
    </div>
</section>