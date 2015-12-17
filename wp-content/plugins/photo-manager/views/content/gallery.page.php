<section class="photo-gallery">
    <div class="container">
        <div class="col-sm-12">
            <h1 class="text-center"><?php echo $photogal->post_title ?></h1>
            <p class="col-sm-offset-3 col-sm-6 text-center"><?php echo $photogal->post_content ?></p>
        </div><div class="clearfix"></div>
        <div class="col-sm-offset-1 col-sm-10">
            <div id="gallery-slider" class="owl-carousel"><?php

                $i = 0;
                foreach ($pms_photos['carousel'] as $carousel) {
                    if($i%3 == 0) {
                        echo $i > 0 ? "</div>" : ""; // close div if it's not the first
                        echo "<div class='item'>";
                    } ?>
                    <div class="col-sm-4">
                        <img src="<?php echo $carousel['image'] ?>"/>
                    </div> <?php
                    $i++; ?>
                    <?php
                } ?>
                </div> <div class="clearfix"></div><!-- close last container div -->

            </div>
        </div>
    </div>
</section>