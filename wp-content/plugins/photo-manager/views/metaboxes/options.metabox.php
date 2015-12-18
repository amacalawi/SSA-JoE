<div class="pms pms-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Options", PMS_TEXT_DOMAIN); ?></h3>
    <div class="panel-body">
        <div>
            <span>Use shortcode: <strong>[<?php echo PhotoController::$cpt_shortcode; ?> id="<?php echo $post->ID ?>"]</strong></span>
        </div>
        <div>
            <strong>Items to display per slide: </strong>
            <input type="number" name="pms_photo_options[per_item]" value="<?php echo @$pms_photo_options['per_item'] ?>">
        </div>
    </div>
</div>