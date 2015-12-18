<?php $heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="programmes-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8 text-center">
            <h1 class="title theme-color text-uppercase"><?php the_title() ?></h1>
            <?php if($heading['subheading']): ?><h1><?php echo $heading['subheading'] ?></h1><?php endif; ?>
            <?php if($heading['content']) { ?>
            <p><?php echo $heading['content'] ?></p>
            <?php }; ?>
        </div>
    </div>
</section>

<?php the_content() ?>

<?php

$sections = get_post_meta($post->ID, 'blanket_sections', true);
foreach ($sections as $section) {
    if( !empty($section['image']) && !empty($section['heading']) && !empty($section['subheading']) && !empty($section['section_class']) ): ?>
    <section class="<?php echo $section['section_class'] ? $section['section_class'] : 'stars' ?>" <?php if($section['section_class']=='stars'&& !empty($section['image'])) echo "style='background-image: url(".$section['image'].");'" ?>>
        <div class="container">
            <?php if($section['image'] && $section['section_class'] != 'stars'): ?>
            <div class="col-sm-offset-1 col-sm-10">
                <img src="<?php echo $section['image'] ?>"/>
            </div>
            <?php endif; ?>
            <div class="<?php echo (($section['image'] && $section['section_class'] != 'stars')?'col-sm-5':'col-sm-offset-1 col-sm-10 text-center') ?>">
                <?php if($section['heading']): ?><h1 class="title theme-color text-center"><?php echo $section['heading'] ?></h1><?php endif; ?>
                <?php echo $section['content'] ?>
            </div><div class="clearfix"></div>
        </div>
    </section> <?php
    endif;
}

 ?>


<?php
$parts =get_post_meta($post->ID, 'blanket_parts', true);
if(!empty($parts[0]['image']) && !empty($parts[0]['part_class']) && !empty($parts[0]['heading']) ): ?>
<section class="<?php echo $parts[0]['part_class'] ? $parts[0]['part_class'] : 'student' ?>">
    <div class="container">
        <div class="col-sm-6">
            <h1><?php echo $parts[0]['heading'] ?></h1>
            <img class="pull-right" src="<?php echo $parts[0]['image'] ?>"/>
        </div>
        <div class="col-sm-6">
            <h1><?php echo $parts[1]['heading'] ?></h1>
            <img class="pull-left" src="<?php echo $parts[1]['image'] ?>"/>
        </div><div class="clearfix"></div>
    </div>
</section>
<?php endif; ?>