<div class="blanket blanket-panel panel panel-default panel-after-editor">
    <div class="panel-body">
        <h3 class="panel-title"><?php _e("Banner", PMS_TEXT_DOMAIN); ?></h3>
        <p class="description">Uses the featured image as the background</p>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <strong>Heading: </strong><br>
            <input class="wide" type="text" name="blanket_heading[heading]" value="<?php echo @$blanket_heading['heading'] ?>">
        </div><br>
        <div class="form-group">
            <strong>Subheading: </strong><br>
            <input class="wide" type="text" name="blanket_heading[subheading]" value="<?php echo @$blanket_heading['subheading'] ?>">
        </div><br>
        <div class="form-group">
            <strong>Content: </strong><br>
            <textarea class="wide" type="text" name="blanket_heading[content]"><?php echo @$blanket_heading['content'] ?></textarea>
        </div>
    </div>
</div>