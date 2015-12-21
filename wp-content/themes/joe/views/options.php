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
                        <h3><?php _e('Contact Information', BLANKET_TEXT_DOMAIN) ?></h3>
                        <p class="description">The site's contact info</p>
                    </div>
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row">
                                <label for="blanket_theme_options[contact][tel]"><strong><?php _e('Telephone', BLANKET_TEXT_DOMAIN) ?></strong></label>
                            </th>
                            <td>
                                <input id="blanket_theme_options[contact][tel]" name="blanket_theme_options[contact][tel]" type="text" value="<?php echo @$blanket_options['contact']['tel']?>" >
                                <p class="description">Telephone number</p>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="blanket_theme_options[contact][fax]"><strong><?php _e('Fax', BLANKET_TEXT_DOMAIN) ?></strong></label>
                            </th>
                            <td>
                                <input id="blanket_theme_options[contact][fax]" name="blanket_theme_options[contact][fax]" type="text" value="<?php echo @$blanket_options['contact']['fax']?>" >
                                <p class="description">Fax number</p>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="blanket_theme_options[contact][email]"><strong><?php _e('Email', BLANKET_TEXT_DOMAIN) ?></strong></label>
                            </th>
                            <td>
                                <input id="blanket_theme_options[contact][email]" name="blanket_theme_options[contact][email]" type="text" placeholder="<?php echo get_bloginfo('admin_email') ?>" value="<?php echo @$blanket_options['contact']['email']?>" >
                                <p class="description">Another email</p>
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