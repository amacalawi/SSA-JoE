<?php

function slugify($string, $case='lower', $replacements=[], $delimiter="-", $space=" ")
{
    $slug = "";

    # Add more here
    $defaults = array(
        '.' => '',
        ',' => '',
        '!' => '',
        '#' => '',
        '?' => '',
        '+' => '',
        '_' => '',
        ')' => '',
        '(' => '',
        '*' => '',
        '&' => '',
        '@' => '-at-'
    );

    # Combine $replacements array with $defaults array
    # Substitute the speicifed chars in $string
    $string = strtr( $string, array_merge($defaults, $replacements) );

    switch ($case) {
        case 'lower':
            $slug = strtolower( implode($delimiter, explode($space, $string ) ) );
            break;

        case 'upper':
            $slug = strtoupper( implode($delimiter, explode($space, $string ) ) );
            break;

        case 'title':
            $slug = ucwords( implode($delimiter, explode($space, $string ) ) );
            break;

        case 'none':
        case '':
        case 'default':
        default:
            $slug = implode($delimiter, explode($space, $string ) );
            break;
    }
    return trim( $slug );
}


function view($file)
{
    include BLANKET_VIEWS . $file . ".php";
}

function value($value, $before="", $after="", $fallback="")
{
    return (null != $value) ? $before . $value . $after : $fallback;
}

function strcolorize($str, $str_to_colorize, $color_class='', $delimiter=" ")
{
    $new_string = '';
    if (strpos($str, $str_to_colorize) !== false) {
        $str_arr = explode($delimiter, $str);
    }
    foreach ($str_arr as $word) {
        if( $str_to_colorize == $word )
        {
            $new_string .= '<span class="'.$color_class.'">'.$str_to_colorize.'</span> ';
        } else {
            $new_string .= $word . ' ';
        }
    }
    return $new_string;
}



function blanket_generate_fa_icons($icons, $prefix="", $ul_class="icons-list", $li_class="icon")
{
    $fa = '<ul id="icons-list" class="'.$ul_class.'">';
    foreach ($icons as $class_name => $icon) {
        $fa .= '<li role="button" class="'.$li_class.'"><i class="'.$prefix.' '.$class_name.'"></i></li>';
    }
    $fa .= '</ul>';
    return $fa;
}




function localize_map()
{
    $pages = get_pages();
    $contact_id ='';
    foreach ($pages as $page) {
        if('contact'==$page->post_name || 'contact-us'==$page->post_name)
        {
            $contact_id = $page->ID; break;
        }
    }
    $blanket_contact = get_post_meta($contact_id, 'blanket_contact', true);
    if(null == $blanket_contact['map']['long']) {
        $blanket_contact['map'] = array('long'=>'undefined','lat'=>'undefined');
    }
    $blanket_localized_script_vars = array(
        'blanketURL' => BLANKET_URI,
        'title' => get_bloginfo('name'),
        'map' => $blanket_contact['map'],//array( 'long' => $blanket_contact['map']['long'], 'lat' => $blanket_contact['map']['lat'] ),
    );
    return $blanket_localized_script_vars;
}



function get_section_bg($id)
{
    $blanket_background_img = get_post_meta( $id, 'blanket_background_img', true);

    if( is_array($blanket_background_img) )
    {
        $blanket_bg_image = ( array_key_exists('image', $blanket_background_img) && null !== $blanket_background_img['image']) ? $blanket_background_img['image'] : 'none';
        $blanket_bg_repeat = ( array_key_exists('repeat', $blanket_background_img) && 'repeat' == $blanket_background_img['repeat'] ) ? $blanket_background_img['repeat'] : 'no-repeat';
        $blanket_bg_size = ( array_key_exists('repeat', $blanket_background_img) && 'cover' == $blanket_background_img['repeat'] ) ? '-webkit-background-size: '.$blanket_background_img['repeat'].'; background-size:' . $blanket_background_img['repeat'] : '';

        $blanket_filter_blur = (array_key_exists('blur', $blanket_background_img) && null !== $blanket_background_img['blur']) ? $blanket_background_img['blur'].'px' : '';
        $blanket_filter_blur = (array_key_exists('blur', $blanket_background_img) && '' !== $blanket_background_img['blur']) ? '-webkit-filter: blur('.$blanket_filter_blur.');-o-filter: blur('.$blanket_filter_blur.');filter: blur('.$blanket_filter_blur.');' : '';

        $blanket_filter_saturate = (array_key_exists('saturate', $blanket_background_img) && 0 !== $blanket_background_img['saturate']) ? $blanket_background_img['saturate']/100 : 0;
        $blanket_filter_saturate = (array_key_exists('saturate', $blanket_background_img) && 0 !== $blanket_background_img['saturate']) ? '-webkit-filter: saturate('.$blanket_filter_saturate.');-o-filter: saturate('.$blanket_filter_saturate.');filter: saturate('.$blanket_filter_saturate.');' : '';

        $blanket_opacity = (array_key_exists('opacity', $blanket_background_img) && '' !== $blanket_background_img['opacity']) ? ('opacity:'.$blanket_background_img['opacity'] / 100) : '';

        $blanket_section_style = "background: url($blanket_bg_image) $blanket_bg_repeat; $blanket_bg_size; $blanket_filter_blur;$blanket_opacity;";
    }
    else
    {
        $blanket_section_style = "";
    }
    return $blanket_section_style;
}