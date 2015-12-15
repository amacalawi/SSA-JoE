<div class="panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Information Details", BLANKET_TEXT_DOMAIN); ?></h3>
    <div class="panel-body">
        <?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>
        <p><strong><?php _e("Address"); ?></strong></p>

        <div class="flex-container">
            <div class="flex-item">
                <label for="blanket_contact[company]"><?php _e("Company", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[company]" name="blanket_contact[company]" value="<?php echo @$value['company']; ?>">
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item">
                <label for="blanket_contact[unit]"><?php _e("Unit / Flr / Bldg", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[unit]" name="blanket_contact[unit]" value="<?php echo @$value['unit']; ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[street]"><?php _e("Street", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[street]" name="blanket_contact[street]" value="<?php echo @$value['street']; ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[brgy]"><?php _e("Brgy / District / Centre", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[brgy]" name="blanket_contact[brgy]" value="<?php echo @$value['brgy']; ?>">
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item">
                <label for="blanket_contact[city]"><?php _e("City", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[city]" name="blanket_contact[city]" value="<?php echo @$value['city']; ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[province]"><?php _e("Province / State / Region", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[province]" name="blanket_contact[province]" value="<?php echo @$value['province']; ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[zip]"><?php _e("Zip", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[zip]" size="4" name="blanket_contact[zip]" value="<?php echo @$value['zip']; ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[country]"><?php _e("Country", BLANKET_TEXT_DOMAIN); ?></label>
                <input type="text" class="wide" id="blanket_contact[country]" name="blanket_contact[country]" value="<?php echo @$value['country']; ?>">
            </div>
        </div>

        <hr class="separator">

        <p><strong><?php _e("Map", BLANKET_TEXT_DOMAIN) ?></strong></p>

        <p class="description">Go to <a target="_blank" href="https://www.google.com.ph/maps?source=tldso">Google Maps</a> to copy the coordinates.</p>
        <div class="input-group">
            <input name="blanket_contact[map][long]" class="half" type="text" id="blanket_contact[map][long]" placeholder="longitude" value="<?php echo esc_html(@$value['map']['long']); ?>">
            <input name="blanket_contact[map][lat]" class="half" type="text" id="blanket_contact[map][lat]" placeholder="latitude" value="<?php echo esc_html(@$value['map']['lat']); ?>">
        </div>

        <hr class="separator">

        <p><strong><?php _e("Social", BLANKET_TEXT_DOMAIN) ?></strong></p>
        <div class="flex-container">
            <div class="flex-item">
                <label for="blanket_contact[social][facebook]">Facebook</label>
                <input name="blanket_contact[social][facebook]" class="wide" type="text" id="blanket_contact[social][facebook]" placeholder="facebook" value="<?php echo esc_html(@$value['social']['facebook']); ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[social][twitter]">Twitter</label>
                <input name="blanket_contact[social][twitter]" class="wide" type="text" id="blanket_contact[social][twitter]" placeholder="twitter" value="<?php echo esc_html(@$value['social']['twitter']); ?>">
            </div>
            <div class="flex-item">
                <label for="blanket_contact[social][site]">Another Website</label>
                <input name="blanket_contact[social][site]" class="wide" type="text" id="blanket_contact[social][site]" placeholder="site..." value="<?php echo esc_html(@$value['social']['site']); ?>">
            </div>
        </div>

    </div>
</div>