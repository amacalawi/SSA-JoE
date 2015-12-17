<?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>
<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Sections", BLANKET_TEXT_DOMAIN); ?></h3>

    <div id="sections-container" class="panel-body sections">

        <div id="section_item_0" class="section-item">
            <div class="checkbox-container clearfix">
                <button id="section_item_image_0_remove" data-target="#section_item_image_0" data-input="#section_item_image_input_0" type="button" class="pull-right button button-default button-circle button-destroy unset-img" title="Remove this image">&times;</button>
            </div>
            <div id="section_item_image_container_0" role="button" class="image-container button-media" data-target="#section_item_image_0" data-input="#section_item_image_input_0">
                <img id="section_item_image_0" src="<?php echo @$sections[0]['image'] ?>">
                <input id="section_item_image_input_0" type="hidden" name="blanket_sections[0][image]" value="<?php echo @$sections[0]['image'] ?>">
                <!-- <input type="hidden" name="blanket_sections[0][parentclass]" value="journey"> -->
            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_sections[0][heading]" value="<?php echo @$sections[0]['heading'] ?>">
                </div>
                <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_sections[0][content]"><?php echo @$sections[0]['content'] ?></textarea>
                </div>
                <div class="form-group">
                    <strong>Section Class</strong>
                    <input type="text" name="blanket_sections[0][section_class]" value="<?php echo @$sections[0]['section_class'] ?>">
                </div>
            </div>
        </div><?php

        foreach ($sections as $key => $sec) {
            if(0!=$key): ?>
            <div id="section_item_<?php echo $key ?>" class="section-item">
                <div class="checkbox-container clearfix">
                    <button id="section_item_<?php echo $key ?>_remove" data-target="#section_item_<?php echo $key ?>" type="button" class="pull-right button button-default button-circle button-destroy section" title="Remove this section">&times;</button>
                </div>
                <div id="section_item_image_container_<?php echo $key ?>" role="button" class="image-container button-media" data-target="#section_item_image_<?php echo $key ?>" data-input="#section_item_image_input_<?php echo $key ?>">
                    <img id="section_item_image_<?php echo $key ?>" src="<?php echo $sec['image'] ?>">
                    <input id="section_item_image_input_<?php echo $key ?>" type="hidden" name="blanket_sections[<?php echo $key ?>][image]" value="<?php echo @$sec['image'] ?>">
                    <!-- <input type="hidden" name="blanket_sections[<?php # echo $key ?>][parentclass]" value="journey"> -->
                </div>
                <div class="caption-container">
                    <div class="form-group">
                        <strong>Heading</strong>
                        <input type="text" name="blanket_sections[<?php echo $key ?>][heading]" value="<?php echo @$sec['heading'] ?>">
                    </div>
                    <div class="form-group">
                        <strong>Content</strong>
                        <textarea type="text" name="blanket_sections[<?php echo $key ?>][content]"><?php echo @$sec['content'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <strong>Section Class</strong>
                        <input type="text" name="blanket_sections[<?php echo $key ?>][section_class]" value="<?php echo @$sec['section_class'] ?>">
                    </div>
                </div>
            </div> <?php
            endif;

        } ?>

    </div>
    <div class="panel-body">
        <div class="button-container button-group">
            <button type="button" class="button-add section button button-primary button-large"><i class="fa fa-plus">&nbsp;</i>Add Section</button>
            <button type="button" class="button-destroy-all section button button-default button-large"><i class="fa fa-minus">&nbsp;</i>Remove All Sections</button>
        </div>
    </div>


</div>