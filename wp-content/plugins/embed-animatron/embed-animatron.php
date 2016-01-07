<?php

/*
  Plugin Name: Embed Animatron
  Plugin URI: http://wpcms.ninja
  Description: Embed Animatron Videos using the clip link, width, and height information.  If you look at the iframe code when you publish in the html5 you can copy the Publish link, http://clips.animatron.com/e23df8b274ed7c887bd12975b2f01f8c and then look in the iframe code for the width and the height for what to  use in the shortcode.  [wpcmsn_aembed url="http://clips.animatron.com/e23df8b274ed7c887bd12975b2f01f8c" w="550" h="450"].
  Author: Greg Whitehead
  Author URI: http://wpcms.ninja/wpprofile
  Text Domain: embed-animatron
  Version: 1.0
 */

function wpcmsn_video($atts) {
	$video_data = shortcode_atts( array(
        'url' => '',
        'w' => '',
        'h' => '',
    ), $atts );
	if ($video_data['url'] != '' && is_numeric($video_data['w']) && is_numeric($video_data['h'])) {
		$aembed = new embed_animatron_wpcmsn($video_data['url'],$video_data['w'],$video_data['h']);
		return $aembed->showVideo();
	} else {
		return "Please check your videos information.<br>";
	}
}

add_shortcode('wpcmsn_aembed','wpcmsn_video');

if (!class_exists('embed_animatron_wpcmsn')) {
	class embed_animatron_wpcmsn {
		public $url;
		public $width;
		public $height;
		function __construct($url, $width, $height) {
			$this->url = strip_tags($url);
			$this->width = strip_tags($width);
			$this->height = strip_tags($height);
		}

		function showVideo() {
			$display_code = '<iframe src="'.$this->url.'?w='.$this->width.'&h='. $this->height .'&autoplay=1&controls=0" width="'.$this->width.'" height="'. $this->height .'" anm-auto-play="true" anm-controls="false" frameborder="0"></iframe>';
			return $display_code;
		}

	}
}

?>