<?php
/*
* Plugin Name: Phase Manager
* Plugin URI: #
* Description: A phase management system.
* Version: 1.0
* Author: John Lioneil P. Dionisio
*/

if( !function_exists( 'add_action' ) ) { echo "Hi there!  I'm just a plugin, not much I can do when called directly."; exit; }
require_once('globals.php');
require_once('controllers/PhaseController.php');

include "includes/enqueues.php";


$phaseman = new PhaseController();

# Initialize
add_action('init', function() {
    global $phaseman;
    $phaseman->register();
});

add_action('add_meta_boxes_'.PhaseController::$cpt_name_singular, function() {
    global $phaseman;
    $phaseman->metaboxes();
});

add_action('save_post', function ($post_id) {
    global $phaseman;
    $phaseman->save($post_id);
});


# Shortcodes
# Display Employee
add_shortcode( PhaseController::$cpt_shortcode, function ( $atts ) {
    ob_start();
    global $phaseman;
    echo $phaseman->display($atts);
    return ob_get_clean();
} );


add_action ( 'phasems_phases_categories_edit_form_fields', 'extra_category_fields');
//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>

<tr class="form-field">
    <th scope="row" valign="top"><label for="heading"><?php _e('Heading'); ?></label></th>
    <td>
        <input type="text" name="Cat_meta[heading]" id="Cat_meta[heading]" size="25" style="width:60%;" value="<?php echo $cat_meta['heading'] ? $cat_meta['heading'] : ''; ?>"><br />
        <span class="description"><?php _e('Heading'); ?></span>
    </td>
</tr>
<tr class="form-field">
    <th scope="row" valign="top"><label for="subheading"><?php _e('Subheading'); ?></label></th>
    <td>
        <input type="text" name="Cat_meta[subheading]" id="Cat_meta[subheading]" size="25" style="width:60%;" value="<?php echo $cat_meta['subheading'] ? $cat_meta['subheading'] : ''; ?>"><br />
        <span class="description"><?php _e('Subheading'); ?></span>
    </td>
</tr>

<?php
}

// save extra category extra fields hook
add_action ( 'edited_phasems_phases_categories', 'save_extra_category_fileds');
   // save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}
