<?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>
<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Section I", BLANKET_TEXT_DOMAIN); ?></h3>

    <div id="sections-container" class="panel-body section">

        <div id="section_item_0" class="section-item flex-container">
            <div id="section_item_image_container_0" role="button" class="image-container button-media" data-target="#section_item_image_0" data-input="#section_item_image_input_0">
                <img id="section_item_image_0" src="<?php echo @$sections[0]['image'] ?>">
                <input id="section_item_image_input_0" type="hidden" name="blanket_sections[0][image]" value="<?php echo @$sections[0]['image'] ?>">
                <input type="hidden" name="blanket_sections[0][parentclass]" value="journey">
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
            </div>
        </div>

    </div>

</div>

<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Section II", BLANKET_TEXT_DOMAIN); ?></h3>

    <div id="sections-container" class="panel-body section">

        <div id="section_item_1" class="section-item flex-container">
            <div id="section_item_image_container_1" role="button" class="image-container button-media" data-target="#section_item_image_1" data-input="#section_item_image_input_1">
                <strong>Background Image</strong>
                <img id="section_item_image_1" src="<?php echo @$sections[1]['image'] ?>">
                <input id="section_item_image_input_1" type="hidden" name="blanket_sections[1][image]" value="<?php echo @$sections[1]['image'] ?>">
                <input type="hidden" name="blanket_sections[1][parentclass]" value="stars">
            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_sections[1][heading]" value="<?php echo @$sections[1]['heading'] ?>">
                </div>
                <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_sections[1][content]"><?php echo @$sections[1]['content'] ?></textarea>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Section III", BLANKET_TEXT_DOMAIN); ?></h3>

    <div class="panel-body">
        <div id="sections-container" class="section-item flex-container">
            <input type="hidden" name="blanket_sections[2][parentclass]" value="student">
            <div id="section_item_imageleft_container_2" role="button" class="image-container button-media" data-target="#section_item_imageleft_2" data-input="#section_item_imageleft_input_2">
                <strong>Background Image</strong>
                <img id="section_item_imageleft_2" src="<?php echo @$sections[2]['imageleft'] ?>">
                <input id="section_item_imageleft_input_2" type="hidden" name="blanket_sections[2][imageleft]" value="<?php echo @$sections[2]['imageleft'] ?>">
            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_sections[2][headingleft]" value="<?php echo @$sections[2]['headingleft'] ?>">
                </div>
                <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_sections[2][contentleft]"><?php echo @$sections[2]['contentleft'] ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div id="sections-container" class="section-item flex-container">
            <div id="section_item_imageright_container_2" role="button" class="image-container button-media" data-target="#section_item_imageright_2" data-input="#section_item_imageright_input_2">
                <strong>Background Image</strong>
                <img id="section_item_imageright_2" src="<?php echo @$sections[2]['imageright'] ?>">
                <input id="section_item_imageright_input_2" type="hidden" name="blanket_sections[2][imageright]" value="<?php echo @$sections[2]['imageright'] ?>">
            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_sections[2][headingright]" value="<?php echo @$sections[2]['headingright'] ?>">
                </div>
                <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_sections[2][contentright]"><?php echo @$sections[2]['contentright'] ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>