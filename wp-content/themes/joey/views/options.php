<div class="wrap">
    <h1><?php _e("Site Options", BLANKET_TEXT_DOMAIN) ?></h1>

    <form action="options.php" method="POST" autocomplete="off" class="blanket_options"><?php

        // include BLANKET_VIEWS . "partials/nonce.view.php";

        settings_fields( $menu_settings );
        do_settings_sections( $menu_settings ); ?>

        <section class="section">
            <div class="panel panel-after-editor">
                <div class="panel-body">
                    <div class="panel-heading">
                        <h3><?php _e('Pop-up', BLANKET_TEXT_DOMAIN) ?></h3>
                        <p class="description">The modal to show on page load</p>
                    </div>
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row">
                                <label for="blanket_theme_options[modal][use]"><strong><?php _e('Use', BLANKET_TEXT_DOMAIN) ?></strong></label>
                            </th>
                            <td>
                                <input id="blanket_theme_options[modal][use]" name="blanket_theme_options[modal][use]" type="checkbox" value="true" <?php echo @$blanket_options['modal']['use'] ? 'checked' : '' ?> >
                                <span>Use the Pop-up widget</span>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="blanket_theme_options[modal][delay]"><strong><?php _e('Delay', BLANKET_TEXT_DOMAIN) ?></strong></label>
                            </th>
                            <td>
                                <input id="blanket_theme_options[modal][delay]" name="blanket_theme_options[modal][delay]" type="number" value="<?php echo @$blanket_options['modal']['delay'] ?>">
                                <span>in seconds <i class="description">(e.g. 0.1, 60)</i></span>
                                <p class="description">The delay in seconds before showing the Pop-up</p>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="blanket_theme_options[modal][heading]"><strong><?php _e('Content', BLANKET_TEXT_DOMAIN) ?></strong></label>
                            </th>
                            <td>
                                <div>
                                    <p><strong>Heading</strong></p>
                                    <input id="blanket_theme_options[modal][heading]" name="blanket_theme_options[modal][heading]" type="text" class="regular-text" value="<?php echo @$blanket_options['modal']['heading'] ?>">
                                </div>
                                <div>
                                    <p><strong>Featured Image</strong></p>
                                    <div>
                                        <img id="image-preview" src="<?php echo @$blanket_options['modal']['image'] ?>">
                                        <input id="image-preview-input" name="blanket_theme_options[modal][image]" type="hidden" value="<?php echo @$blanket_options['modal']['image'] ?>">
                                    </div>
                                    <button id="image-preview-uploader" data-buttonName="Set as Featured Image" data-target="#image-preview" data-input="#image-preview-input" type="button" class="button-media button-add button button-primary">Browse Image...</button>
                                    <button type="button" class="button button-default button-remove" data-target="#image-preview" data-input="#image-preview-input">Remove Image</button>
                                </div>

                                <div>
                                    <p><strong>Content</strong></p>
                                    <?php
                                    $editor_id = "blanketoptionsmodalbodyeditor";
                                    $content = $blanket_options['modal']['content'];
                                    wp_editor($content, $editor_id, [
                                        'textarea_name'=> 'blanket_theme_options[modal][content]'
                                    ]);
                                     ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <?php
        # The submit button
        submit_button(); ?>

    </form>

</div>