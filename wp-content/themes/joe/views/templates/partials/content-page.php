<?php $heading = get_post_meta($post->ID, 'blanket_heading', true);
# Check if page
switch ($post->post_name) {
    case 'programme':
    case 'programmes':
        $colstyle= 'col-sm-offset-2 col-sm-8 text-center';
        break;

    case 'about':
    default:
        $colstyle = 'col-sm-offset-6 col-sm-6';
        break;
} ?>
<section class="<?php echo $post->post_name ?>-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="container">
        <div class="<?php echo $colstyle ?>">
            <?php if($heading['heading']): ?><h1 class="title theme-color"><?php echo $heading['heading'] ?></h1><?php endif; ?>
            <?php if($heading['subheading']): ?><h1><?php echo $heading['subheading'] ?></h1><?php endif; ?>
            <?php if($heading['content']){ ?>
                <h2 class="desc dosis-reg"><?php echo $heading['content'] ?></h2>
            <?php } else { ?>
                <p><?php the_content(); ?></p>
            <?php }; ?>
        </div>
    </div>
</section>
<?php if(empty($heading['heading'])): ?>
<div class="container">
    <div class="col-sm-12">
        <h1 class="title"><?php the_title(); ?></h1><?php
        the_content(); ?>
    </div>
</div><?php
endif; ?>
<?php


$sections = get_post_meta($post->ID, 'blanket_sections', true);

if( $sections[0]['image'] && $sections[0]['heading'] && $sections[0]['content'] && $sections[0]['section_class'] ) {
foreach ($sections as $section) { ?>
    <section class="<?php echo $section['section_class'] ? $section['section_class'] : 'stars' ?>" <?php if($section['section_class']=='stars'&& !empty($section['image'])) echo "style='background-image: url(".$section['image'].");'" ?>>
        <div class="container">
            <?php if($section['image'] && $section['section_class'] != 'stars'): ?>
            <div class="col-sm-offset-1 col-sm-5 text-center">
                <img src="<?php echo $section['image'] ?>" class="hides" />
            </div>
            <?php endif; ?>
            <div class="<?php echo (($section['image'] && $section['section_class'] != 'stars')?'col-sm-5':'col-sm-offset-1 col-sm-10 text-center wcolor dosis-reg') ?>">
                <?php if($section['heading']): ?><h1 class="title theme-color"><?php echo $section['heading'] ?></h1><?php endif; ?>
                <?php echo do_shortcode( wpautop($section['content']) ) ?>
            </div><div class="clearfix"></div>
        </div>
    </section> <?php
}
} //endif; ?>

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