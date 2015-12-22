<?php

function enroll_centre_dropdown( $taxonomies = null )
{
    ob_start();
    if( null == $taxonomies ) {
        $tax=get_taxonomies(
            array( 'name' => 'enrollms_enrollment_categories' )
        );
        $taxonomies= get_terms( $tax, ['order'=>'ASC'] );
    }

    ?>
    <form method="POST" id="centre-picker-form">
        <input name="action" type="hidden" value="the_ajax_hook" />
        <select data-live-search="<?php echo(count($taxonomies) > 5 ? true : false) ?>" name="centre" id="centre" class="form-control input-lg centre selectpicker centre-picker" data-style="btn-default">
            <?php foreach ($taxonomies as $key => $category) { ?>
                <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option> <?php
            } ?>
        </select>
    </form> <?php

    echo ob_get_clean();
}
  ?>