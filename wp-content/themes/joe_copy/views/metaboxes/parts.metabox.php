<?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>
<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Parts", BLANKET_TEXT_DOMAIN); ?> | <span class="description">Divided into two sides.</span></h3>

    <div id="parts-container" class="panel-body parts flex-container">

        <div id="part_item_0" class="part-item">
            <div class="checkbox-container clearfix">
                <button id="part_item_image_0_remove" data-target="#part_item_image_0" data-input="#part_item_image_input_0" type="button" class="pull-right button button-default button-circle button-destroy unset-img" title="Remove this image">&times;</button>
            </div>
            <div id="part_item_image_container_0" role="button" class="image-container button-media" data-target="#part_item_image_0" data-input="#part_item_image_input_0">
                <img id="part_item_image_0" src="<?php echo @$parts[0]['image'] ?>">
                <input id="part_item_image_input_0" type="hidden" name="blanket_parts[0][image]" value="<?php echo @$parts[0]['image'] ?>">

            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_parts[0][heading]" value="<?php echo @htmlentities($parts[0]['heading']) ?>">
                </div>
                <!-- <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_parts[0][content]"><?php echo @$parts[0]['content'] ?></textarea>
                </div> -->
                <div class="form-group">
                    <strong>Part Class</strong>
                    <input type="text" name="blanket_parts[0][part_class]" value="<?php echo @$parts[0]['part_class'] ?>">
                </div>
            </div>
        </div>

        <div id="part_item_1" class="part-item">
            <div class="checkbox-container clearfix">
                <button id="part_item_image_1_remove" data-target="#part_item_image_1" data-input="#part_item_image_input_1" type="button" class="pull-right button button-default button-circle button-destroy unset-img" title="Remove this image">&times;</button>
            </div>
            <div id="part_item_image_container_1" role="button" class="image-container button-media" data-target="#part_item_image_1" data-input="#part_item_image_input_1">
                <img id="part_item_image_1" src="<?php echo @$parts[1]['image'] ?>">
                <input id="part_item_image_input_1" type="hidden" name="blanket_parts[1][image]" value="<?php echo @$parts[1]['image'] ?>">

            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_parts[1][heading]" value="<?php echo @htmlentities($parts[1]['heading']) ?>">
                </div>
                <!-- <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_parts[1][content]"><?php echo @$parts[1]['content'] ?></textarea>
                </div> -->
                <div class="form-group">
                    <strong>Part Class</strong>
                    <input type="text" name="blanket_parts[1][part_class]" value="<?php echo @$parts[1]['part_class'] ?>">
                </div>
            </div>
        </div>

    </div>

</div>