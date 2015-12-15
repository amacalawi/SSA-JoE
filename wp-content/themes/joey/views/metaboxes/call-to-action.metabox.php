<div class="blanket-panel panel panel-default panel-after-editor">
    <h3 class="panel-title"><?php _e("Call to Action Group", BLANKET_TEXT_DOMAIN); ?></h3>
    <div class="panel-body">
        <?php include BLANKET_VIEWS . "partials/nonce.view.php"; ?>
        <div id="main-cta" class="cta cta-container clearfix">
            <div id="cta_item_left" class="cta-item pull-left left">
                <div class="input-group">
                    <h3 class="heading">Left Call to Action</h3>
                </div>
                <p class="description">Click the icon to browse through the icons</p>
                <div class="flex-container">
                    <div class="image-container">
                        <span id="bb_call_to_action_image_left" role="button" class="icon button-icon <?php echo ((null!==$bb_call_to_action['left']['image'])?'with-icon':'') ?>" data-target="#bb_call_to_action_image_left" data-input="#bb_call_to_action_image_input_left"><?php echo @$bb_call_to_action['left']['image'] ?></span>
                        <input id="bb_call_to_action_image_input_left" type="hidden" name="blanket_bootstrap_call_to_action[left][image]" value="<?php echo @htmlentities($bb_call_to_action['left']['image']) ?>">
                    </div>
                    <div class="input-container">
                        <div class="heading-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-header text-muted"></i>
                                <span class="input-group-addon">Heading</span>
                                <input type="text" name="blanket_bootstrap_call_to_action[left][heading]" value="<?php echo htmlentities(@$bb_call_to_action['left']['heading']) ?>">
                            </div>
                        </div>
                        <div class="subheading-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-paragraph text-muted"></i>
                                <span class="input-group-addon">Subheading</span>
                                <input type="text" name="blanket_bootstrap_call_to_action[left][subheading]" value="<?php echo htmlentities(@$bb_call_to_action['left']['subheading']) ?>">
                            </div>
                        </div>
                        <div class="link-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-link text-muted"></i>
                                <span class="input-group-addon">Go to Section</span>
                                <div>
                                    <select name="blanket_bootstrap_call_to_action[left][link]" class="wide">
                                        <option selected="selected" disabled="disabled" value=""><?php echo esc_attr( __( 'Select page' ) ); ?></option><?php
                                        $selected_page = $bb_call_to_action['left']['link'];
                                        $pages = get_pages(['sort_column'=>'menu_order']);
                                        foreach ( $pages as $page ) {
                                            $option = '<option value="' . $page->post_name . '" ';
                                            $option .= ( $page->post_name == $selected_page ) ? 'selected="selected"' : '';
                                            $option .= '>';
                                            $option .= $page->post_title;
                                            $option .= '</option>';
                                            echo $option;
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cta_item_1" class="cta-item pull-right right">
                <div class="input-group">
                    <h3 class="heading">Right Call to Action</h3>
                </div>
                <div class="flex-container">
                    <div class="input-container">
                        <div class="heading-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-header text-muted"></i>
                                <span class="input-group-addon">Heading</span>
                                <input type="text" name="blanket_bootstrap_call_to_action[right][heading]" value="<?php echo htmlentities(@$bb_call_to_action['right']['heading']) ?>">
                            </div>
                        </div>
                        <div class="subheading-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-paragraph text-muted"></i>
                                <span class="input-group-addon">Subheading</span>
                                <input type="text" name="blanket_bootstrap_call_to_action[right][subheading]" value="<?php echo htmlentities(@$bb_call_to_action['right']['subheading']) ?>">
                            </div>
                        </div>
                        <div class="link-container">
                            <div class="input-group">
                                <i class="input-group-addon fa fa-link text-muted"></i>
                                <span class="input-group-addon">Go to Section</span>
                                <div>
                                    <select name="blanket_bootstrap_call_to_action[right][link]" class="wide">
                                        <option selected="selected" disabled="disabled" value=""><?php echo esc_attr( __( 'Select page' ) ); ?></option><?php
                                        $selected_page = $bb_call_to_action['right']['link'];
                                        $pages = get_pages(['sort_column'=>'menu_order']);
                                        foreach ( $pages as $page ) {
                                            $option = '<option value="' . $page->post_name . '" ';
                                            $option .= ( $page->post_name == $selected_page ) ? 'selected="selected"' : '';
                                            $option .= '>';
                                            $option .= $page->post_title;
                                            $option .= '</option>';
                                            echo $option;
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <span id="bb_call_to_action_image_right" role="button" class="icon button-icon <?php echo ((null!==$bb_call_to_action['right']['image'])?'with-icon':'') ?>" data-target="#bb_call_to_action_image_right" data-input="#bb_call_to_action_image_input_right"><?php echo @$bb_call_to_action['right']['image'] ?></span>
                        <input id="bb_call_to_action_image_input_right" type="hidden" name="blanket_bootstrap_call_to_action[right][image]" value="<?php echo htmlentities(@$bb_call_to_action['right']['image']) ?>">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="blanket_call_to_action_container" class="blanket-panel call-to-action-icons-container">
        <h3>Call to Actions Icons</h3>
        <div class="call-to-action-icons"><?php
            echo $display_fa_icons; ?>
        </div>
        <div class="button-container">
            <!-- <button type="button" class="button-media cta button button-primary button-large" data-target="#" data-input="#"><i class="fa fa-plus">&nbsp;</i>Browse Image...</button> -->
        </div>
    </div>

</div>
