<div class="blanket-panel panel panel-default panel-after-editor">
    <div class="panel-heading">
        <h2>Jumbotron</h2>
    </div>
    <div class="panel-body">
        <div class="banner-container form-group">
            <img id="blanket_jumbotron_image" src="<?php echo @$blanket_jumbotron['image'] ?>" class="banner button-media" role="button" data-target="#blanket_jumbotron_image" data-input="#blanket_jumbotron_image_input">
            <input id="blanket_jumbotron_image_input" type="hidden" name="blanket_jumbotron[image]" value="<?php echo @$blanket_jumbotron['image'] ?>">
        </div>
        <div>
            <div class="form-group">
                <div>
                    <strong>Title</strong>
                </div>
                <input type="text" name="blanket_jumbotron[title]" class="wide" value="<?php echo @$blanket_jumbotron['title'] ?>" placeholder="<?php echo @$post->post_title ?>">
            </div>
            <div class="form-group">
                <div>
                    <strong>Heading</strong>
                </div>
                <input type="text" name="blanket_jumbotron[heading]" class="wide" value="<?php echo @$blanket_jumbotron['heading'] ?>">
            </div>
            <div class="form-group">
                <div>
                    <strong>Subheading</strong>
                </div>
                <textarea name="blanket_jumbotron[subheading]" class="wide"><?php echo @$blanket_jumbotron['subheading'] ?></textarea>
            </div>
        </div>
    </div>
    <div class="panel-footer">

    </div>
</div>


<?php

$slug = basename( get_permalink( $post->ID ) );
if( 'programmes' != $slug ) { ?>

<div class="blanket-panel panel panel-default panel-after-editor">
    <div class="panel-heading">
        <h2><?php _e("Section", BLANKET_TEXT_DOMAIN); ?></h2>
    </div>

    <div id="sections-container" class="panel-body section">

       <div id="section_item_0" class="section-item flex-container">
            <div id="section_item_image_container_0" role="button" class="image-container button-media" data-target="#section_item_image_0" data-input="#section_item_image_input_0">
                <img id="section_item_image_0" src="<?php echo @$sections[0]['image'] ?>">
                <input id="section_item_image_input_0" type="hidden" name="blanket_content_section[0][image]" value="<?php echo @$sections[0]['image'] ?>">
                <input type="hidden" name="blanket_content_section[0][parentclass]" value="about-phase1">
            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_content_section[0][heading]" value="<?php echo @$sections[0]['heading'] ?>">
                </div>
                <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_content_section[0][content]"><?php echo @$sections[0]['content'] ?></textarea>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="blanket-panel panel panel-default panel-after-editor">
    <div class="panel-heading">
        <h2><?php _e("Section II", BLANKET_TEXT_DOMAIN); ?></h2>
    </div>

    <div id="sections-container" class="panel-body section">

       <div id="section_item_1" class="section-item flex-container">
            <div id="section_item_image_container_1" role="button" class="image-container button-media" data-target="#section_item_image_1" data-input="#section_item_image_input_1">
                <img id="section_item_image_1" src="<?php echo @$sections[1]['image'] ?>">
                <input id="section_item_image_input_1" type="hidden" name="blanket_content_section[1][image]" value="<?php echo @$sections[1]['image'] ?>">
                <input type="hidden" name="blanket_content_section[1][parentclass]" value="stars">
            </div>
            <div class="caption-container">
                <div class="form-group">
                    <strong>Heading</strong>
                    <input type="text" name="blanket_content_section[1][heading]" value="<?php echo @$sections[1]['heading'] ?>">
                </div>
                <div class="form-group">
                    <strong>Content</strong>
                    <textarea type="text" name="blanket_content_section[1][content]"><?php echo @$sections[1]['content'] ?></textarea>
                </div>
            </div>
        </div>

    </div>

</div>

<?php

}
 ?>