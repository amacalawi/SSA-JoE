<section class="photo-gallery">
    <div class="container">
        <div class="col-sm-12">
            <h1 class="text-center"><?php echo $photogal->post_title ?></h1>
            <p class="col-sm-offset-3 col-sm-6 text-center"><?php echo $photogal->post_content ?></p>
        </div><div class="clearfix"></div>
        <div class="col-sm-offset-1 col-sm-10">
            <div id="gallery-slider-<?php echo $photogal->ID ?>" class="photogal owl-carousel"><?php

                foreach ($pms_photos['carousel'] as $key => $carousel) { ?>
                    <div class='item'>
                        <div class=" image-selector" data-src="<?php echo $carousel['image'] ?>" data-sub-html="#ligh-box-caption-<?php echo $key ?>">
                            <div class="image-container">
                                <img src="<?php echo $carousel['image'] ?>" >
                                <div id="ligh-box-caption-<?php echo $key ?>" class="hidden ligh-box-caption">
                                    <?php if($carousel['heading']): ?><h4><?php echo $carousel['heading'] ?></h4><?php endif; ?>
                                    <?php if($carousel['subheading']): ?><p><?php echo $carousel['subheading'] ?></p><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div> <?php
                } ?>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</section>