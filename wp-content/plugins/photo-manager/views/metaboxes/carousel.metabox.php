<div class="pms pms-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Gallery", PMS_TEXT_DOMAIN); ?></h3>
    <div class="panel-body">
        <div id="main-carousel" class="carousel carousel-container">
            <div id="carousel_item_0" class="carousel-item">
                <div class="input-group">
                    <button id="item-button-0" data-target="#carousel_item_0" type="button" class="pull-right button button-default button-large"><i class="fa fa-times"></i></button>
                </div>
                <img id="pms_photos_image_0" role="button" class="button-media" data-target="#pms_photos_image_0" data-input="#pms_photos_image_input_0" src="<?php echo @$pms_photos['carousel'][0]['image'] ?>" width="300" height="225">
                <input id="pms_photos_image_input_0" type="hidden" name="pms_photos[carousel][0][image]" value="<?php echo @$pms_photos['carousel'][0]['image'] ?>">
                <div class="input-group form-group">
                    <strong>Heading</strong><br>
                    <input type="text" name="pms_photos[carousel][0][heading]" value="<?php echo @$pms_photos['carousel'][0]['heading'] ?>"><br>
                    <strong>Subheading</strong><br>
                    <input type="text" name="pms_photos[carousel][0][subheading]" value="<?php echo @$pms_photos['carousel'][0]['subheading'] ?>">
                </div>
            </div><?php

            if( (is_array($pms_photos) && array_key_exists('carousel', $pms_photos)) || !empty($pms_photos['carousel']) ) {
                foreach ($pms_photos['carousel'] as $key => $value) {
                    if(0 != $key): ?>
                    <div id="carousel_item_<?php echo $key ?>" class="carousel-item">
                        <div class="input-group">
                            <button data-target="#carousel_item_<?php echo $key ?>" type="button" class="pull-right button-destroy carousel button button-default button-large"><i class="fa fa-times"></i></button>
                        </div>
                        <img id="pms_photos_image_<?php echo $key ?>" role="button" class="button-media" data-target="#pms_photos_image_<?php echo $key ?>" data-input="#pms_photos_image_input_<?php echo $key ?>" src="<?php echo $value['image'] ?>" width="300" height="225">
                        <input id="pms_photos_image_input_<?php echo $key ?>" type="hidden" name="pms_photos[carousel][<?php echo $key ?>][image]" value="<?php echo $value['image'] ?>">
                        <div class="input-group form-group">
                            <strong>Heading</strong><br>
                            <input type="text" name="pms_photos[carousel][<?php echo $key ?>][heading]" value="<?php echo @$pms_photos['carousel'][ $key ]['heading'] ?>"><br>
                            <strong>Subheading</strong><br>
                            <input type="text" name="pms_photos[carousel][<?php echo $key ?>][subheading]" value="<?php echo @$pms_photos['carousel'][ $key ]['subheading'] ?>">
                        </div>
                    </div><?php
                    endif;
                }
            } ?>

        </div>
        <div class="button-container button-group">
            <button type="button" class="button-add carousel button button-primary button-large"><i class="fa fa-plus">&nbsp;</i>Add Slide</button>
            <button type="button" class="button-destroy-all carousel button button-default button-large"><i class="fa fa-minus">&nbsp;</i>Remove All Slides</button>
        </div>
    </div>
</div>

<?php

 ?>