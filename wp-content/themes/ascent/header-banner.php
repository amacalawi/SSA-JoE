<?php
/**
 * Common Header Banner
 */
?>
<?php $enable_home_slider = of_get_option('home_page_slider'); ?>
<?php if(($enable_home_slider == 1) && is_front_page()): ?>
<?php $home_slider_array = ascent_home_slider(); ?>
    <div id="home-slider">
	<div class="main-owl-carousel">
	<?php $enable_slider_overaly = (of_get_option('slider_overlay_bg')) ? 'bg-overlay' : ' default-bg'; ?>
	<?php foreach($home_slider_array as $home_slider_item => $home_slider_fields): ?>
	    <?php if(of_get_option($home_slider_fields['image'])): ?>
	    <div class="item">
		<div class="<?php echo $enable_slider_overaly; ?>"></div>
		<img src="<?php echo of_get_option($home_slider_fields['image']); ?>" class="gallery-post-single" alt="Slide 1"/>
		<div class="content-wrapper clearfix">
		    <div class="container">
			<div class="slide-content text-center clearfix">
			    <?php echo of_get_option($home_slider_fields['description']); ?>
			</div>
		    </div>
		</div>
	    </div><!--.item 1-->
	    <?php endif; ?>
	    
	<?php endforeach; ?>
	</div><!--.main-owl-carousel-->
    </div><!--.home-carousel-->
<?php else: ?>
    <div id="banner">
    <?php if(of_get_option('default_banner_image')): ?>
	<img src="<?php echo of_get_option('default_banner_image'); ?>" alt="<?php bloginfo( 'name' ); ?>-Banner">
    <?php else: ?>
	<img src="<?php echo get_template_directory_uri() . '/includes/images/banner.jpg'?>" alt="<?php bloginfo( 'name' ); ?>-Banner">
    <?php endif; ?>
    </div>
<?php endif; ?>