<div class="row">
    <div class="col-sm-offset-1 col-sm-10 enrol-content">
        <div class="row">
            <?php
            foreach ($centers as $key => $post) {
                setup_postdata($post);
                $custom_post_metas = get_post_meta($post->ID); ?>

                <div class="col-sm-6">
                    <div class="<?php echo(($key%3==2 || $key%4==3 )?'box yellow':'box violet') ?>">
                        <div class="box-heading form-group">
                            <h1 class="dosis-reg wcolor"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div> <?php
                        foreach ($custom_post_metas as $key => $custom_post_meta) {
                            $custom = get_post_meta($post->ID, $key, true );
                            if( '_edit_lock' != $key && '_edit_last' != $key && 'Enroll' != $key ): ?>
                                <p class="custom-<?php echo $key ?>">
                                    <strong><?php echo $key; ?></strong><?php
                                    echo $custom; ?>
                                </p> <?php
                            endif;
                            if( 'Enroll' == $key ): ?>
                            <p class="text-center">
                                <a href="<?php echo $custom;  ?>" class="btn btn-default"><?php echo $key; ?></a>
                            </p> <?php
                            endif;
                        } ?>

                    </div>
                </div>

                <?php
            } ?>
        </div>
    </div>
</div>