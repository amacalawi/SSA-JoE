<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Carousel", BLANKET_TEXT_DOMAIN); ?></h3>

    <div class="panel-body">
        <?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>

        <div id="main-carousel" class="carousel carousel-container">
            <div id="carousel_item_0" class="carousel-item">
                <div class="input-group">
                    <button id="item-button-0" data-target="#carousel_item_0" type="button" class="pull-right button button-default button-large"><i class="fa fa-times"></i></button>
                </div>
                <img id="bb_carousel_image_0" role="button" class="button-media" data-target="#bb_carousel_image_0" data-input="#bb_carousel_image_input_0" src="<?php echo @$carousels[0]['image'] ?>" width="300" height="225">
                <input id="bb_carousel_image_input_0" type="hidden" name="blanket_carousel[0][image]" value="<?php echo @$carousels[0]['image'] ?>">
                <div class="heading-container">
                    <div class="input-group">
                        <i class="input-group-addon fa fa-header text-muted"></i>
                        <span class="input-group-addon">Heading</span>
                        <input type="text" name="blanket_carousel[0][heading]" value="<?php echo @$carousels[0]['heading'] ?>">
                    </div>
                </div>
                <div class="subheading-container">
                    <div class="input-group">
                        <i class="input-group-addon fa fa-paragraph text-muted"></i>
                        <span class="input-group-addon">Subheading</span>
                        <textarea name="blanket_carousel[0][subheading]"><?php echo @$carousels[0]['subheading'] ?></textarea>
                        <div class="input-group">
                            <span class="input-group-addon">Parent Class</span>
                            <input type="text" name="blanket_carousel[0][subheadingclass]" value="<?php echo @$carousels[0]['subheadingclass'] ?>">
                        </div>
                    </div>
                </div>
            </div><?php
            if( is_array($carousels) || !empty($carousels) ) {
                foreach ($carousels as $key => $value) {
                    if(0 != $key): ?>
                    <div id="carousel_item_<?php echo $key ?>" class="carousel-item">
                        <div class="input-group">
                            <button data-target="#carousel_item_<?php echo $key ?>" type="button" class="pull-right button-destroy carousel button button-default button-large"><i class="fa fa-times"></i></button>
                        </div>
                        <img id="bb_carousel_image_<?php echo $key ?>" role="button" class="button-media" data-target="#bb_carousel_image_<?php echo $key ?>" data-input="#bb_carousel_image_input_<?php echo $key ?>" src="<?php echo $value['image'] ?>" width="300" height="225">
                        <input id="bb_carousel_image_input_<?php echo $key ?>" type="hidden" name="blanket_carousel[<?php echo $key ?>][image]" value="<?php echo $value['image'] ?>">
                        <div class="heading-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-header text-muted"></i>
                                <span class="input-group-addon">Heading</span>
                                <input type="text" name="blanket_carousel[<?php echo $key ?>][heading]" value="<?php echo $value['heading'] ?>">
                            </div>
                        </div>
                        <div class="subheading-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-paragraph text-muted"></i>
                                <span class="input-group-addon">Subheading</span>
                                <textarea name="blanket_carousel[<?php echo $key ?>][subheading]"><?php echo $value['subheading'] ?></textarea>
                                <div class="input-group">
                                    <span class="input-group-addon">Parent Class</span>
                                    <input type="text" name="blanket_carousel[<?php echo $key ?>][subheadingclass]" value="<?php echo @$carousels[$key]['subheadingclass'] ?>">
                                </div>
                            </div>
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