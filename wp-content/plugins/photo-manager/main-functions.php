<?php 

# Styles
function add_events_stylesheets() {
	wp_enqueue_style( 'schoolicon-fonts', get_template_directory_uri().'/fonts/school-icons/style.css', false, '1.0.0' );
	wp_enqueue_style( 'events-style', plugin_dir_url(__FILE__).'/stylesheets/events.style.css', false, '1.0.0' );
	wp_register_style('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css');
	wp_enqueue_style( 'jquery-ui' ); 
}
add_action( 'admin_enqueue_scripts', 'add_events_stylesheets' );

add_action( 'admin_enqueue_scripts', 'add_events_scripts' );
function add_events_scripts() {
	wp_enqueue_script('jquery-ui-datepicker', includes_url() . 'js/jquery/ui/datepicker.min.js', array('jquery', 'jquery-ui'), '1.0.0', true);
	wp_enqueue_script( 'script-js', plugin_dir_url(__FILE__).'/scripts/scripts.js', array('jquery'), '1.0.0', true );

}

?>