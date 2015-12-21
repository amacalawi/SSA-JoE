<div class="blanket-panel">
    <?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>
    <div class="bg-image-container">
        <img id="blanket_background_img_image" src="<?php echo @$blanket_background_img['image']; ?>">
        <input name="blanket_background_img[image]" type="hidden" id="blanket_background_img_input" value="<?php echo @$blanket_background_img['image'] ?>">
    </div>
    <p class="description">Setup Background image</p>
    <div id="button-group-bg-img" class="button-group">
        <button id="blanket_background_img_button" data-target="#blanket_background_img_image" data-input="#blanket_background_img_input" type="button" class="button button-media button-small button-default">Choose Image</button>
        <button id="blanket_background_img_destroy" data-target="#blanket_background_img_image" data-input="#blanket_background_img_input" type="button" class="button button-destroy unset-img button-small button-default">Remove Image</button>
    </div>
    <hr class="separator">
    <div class="input-container">
        <div class="form-group">
            <strong>Heading</strong>
            <input type="text" name="blanket_background_img[heading]" class="wide" value="<?php echo @$blanket_background_img['heading'] ?>">
        </div>
        <div class="form-group">
            <strong>Subheading</strong>
            <input type="text" name="blanket_background_img[subheading]" class="wide" value="<?php echo @$blanket_background_img['subheading'] ?>">
        </div>
    </div>
    <hr class="separator">
    <div class="bg-image-settings-container">
        <p><strong>Settings</strong></p>
        <p>Tiling</p>
        <div>
            <input id="blanket_background_img_repeat" type="radio" name="blanket_background_img[repeat]" value="repeat" <?php echo @($blanket_background_img['repeat'] == 'repeat') ? 'checked' : '' ?> >
            <label for="blanket_background_img_repeat">Repeat (tiled)</label>
        </div>
        <div>
            <input id="blanket_background_img_full" type="radio" name="blanket_background_img[repeat]" value="cover" <?php echo @($blanket_background_img['repeat'] == 'cover') ? 'checked' : '' ?> >
            <label for="blanket_background_img_full">No repeat (full width)</label>
        </div>
        <p>Filter</p>
        <div>
            <input id="blanket_background_img_blur" type="number" max="100" min="0" name="blanket_background_img[blur]" value="<?php echo @$blanket_background_img['blur'] ?>">
            <label for="blanket_background_img_blur">Blur (in pixels)</label>
        </div>
        <div>
            <input id="blanket_background_img_opacity" type="number" max="100" min="0" name="blanket_background_img[opacity]" value="<?php echo @$blanket_background_img['opacity'] ?>">
            <label for="blanket_background_img_opacity">Opacity (0-100%)</label>
        </div>
        <div>
            <input id="blanket_background_img_saturate" type="number" max="1000" min="0" name="blanket_background_img[saturate]" value="<?php echo @$blanket_background_img['saturate'] ?>">
            <label for="blanket_background_img_saturate">Saturate (0-100%)</label>
        </div>
    </div>
</div>