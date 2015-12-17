<?php

class DisplayEventsController extends EventsController
{

    public function show($atts)
    {
        global $post;
        $a = shortcode_atts( array(
            'category' => 'snr'
        ), $atts );

        $args = array(
            'post_type'   => parent::$cpt_name_singular,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'name',
                    'terms' => $a['category']
                )
            )
        );
        $Events = get_posts( $args );
        $Event_count =  count($Events);
        $slug = parent::$cpt_name_singular;



        include(EMS_PLUGIN_VIEW . "content/events.page.view.php");

    }

}
 ?>