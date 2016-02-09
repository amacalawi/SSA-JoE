<?php
/*
| ------------
| # Shortcodes
| ------------
*/

# Buttons
add_shortcode( 'button', 'blanket_button_shortcodes' );
function blanket_button_shortcodes( $atts, $content = null ) {
    $a = shortcode_atts( array(
            'id'    => 'btn_'.get_the_ID(),
            'class' => 'btn btn-default btn-lg',
            'link'  => '',
            'icon'  => '',
            'modal' => false
        ), $atts );

    return '<a '.($a['modal']?'data-dismiss="modal"':'').' id="'.$a['id'].'" class="'.$a['class'].'" href="'.$a['link'].'"><i class="fa fa-'.$a['icon'].'"></i>'.$content.'</a>';
}

add_shortcode( 'notice', 'blanket_notice_shortcodes' );
function blanket_notice_shortcodes( $atts, $content = null ) {
    $a = shortcode_atts( array(
            'id'    => 'btn_'.get_the_ID(),
            'type' => 'info',
            'close' => false,
            'icon'  => '',
        ), $atts );

    $alert = '<div class="alert alert-'.$a['type'].'">';
    if($a['close']) $alert.= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    $alert.= $content;
    $alert.= '</div>';

    return $alert;
}

# Tabs
$tabs_name;
add_shortcode("tab-content", "tab_content_callback");
function tab_content_callback($atts, $content=null)
{
    ob_start();
    global $tabs_name;
    $a = shortcode_atts( array(
        'id'    => '',
        'title' => '',
        // 'nav-class' => 'nav nav-tabs',
        'inner-class'=> 'tab-pane fade in active',
        'active'=>''
    ), $atts );

    $tabs_name[] = $a['title']; ?>

    <div class="tab-pane fade in <?php echo $a['active'] ?>" id="tabbable_<?php echo get_the_ID(); ?>_<?php echo $a['id'] ?>">
        <?php echo wpautop(do_shortcode($content)) ?>
    </div><?php

    return ob_get_clean();
}

add_shortcode("tabs", "tabs_callback");
function tabs_callback($atts, $content=null)
{
    ob_start();
    global $tabs_name;
    $a = shortcode_atts( array(
        'id'    => 'tabbable_'.get_the_ID().'_',
        'class' => 'tabbable-panel-disabled',
        'inner-class' => 'tabbable-line',
        'content-class' => 'tab-content',
    ), $atts );
    # Navigation
    $navs_count = substr_count( $content, '[tab-content' );

    include BLANKET_VIEWS . "shortcodes/tabs.shortcode.php";

    return ob_get_clean();
}
