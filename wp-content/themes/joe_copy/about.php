<?php
$heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="about-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-top-100">
                <?php if($heading['heading']): ?><h1 class="title theme-color"><?php echo $heading['heading'] ?></h1><?php endif; ?>
                <?php if($heading['subheading']): ?><h1><?php echo $heading['subheading'] ?></h1><?php endif; ?>
                <?php if($heading['content']){ ?>
                    <h3 class="desc dosis-reg"><?php echo $heading['content']; ?></h3>
                <?php } else { ?>
                    <p><?php the_content(); ?></p>
                <?php }; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <div class="student-container">
                <div class="caption junior-caption">
                    <div class="caption-inner">
                        <h2>Junior Edition</h2>
                        <h3>9 to 12 years old</h3>
                    </div>
                    <img src="<?php echo BLANKET_URI . '/images/junior.png' ?>">
                </div>
                <div class="caption teen-caption">
                    <div class="caption-inner">
                        <h2>Teen Edition</h2>
                        <h3>13 to 16 years old</h3>
                    </div>
                    <img src="<?php echo BLANKET_URI . '/images/teen.png' ?>">
                </div>
            </div>
        </div>
    </div>

</section>

<section class="paint-section" style="background-image: url(<?php echo BLANKET_URI . 'images/about-image-V2.jpg' ?>)">
    <div class="container">
        <div class="col-sm-4">
            <h2 class="theme-color">Entreprenuerial Qualities</h2>
            <p>are already present in every individual and can be developed further through education. JoE serves to realise this belief.</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-4 margin-top-200">
                <h2 class="theme-color">At the Age of 9 to 12</h2>
                <p>children's personalities are known to be malleable. With education, children can develop their personality traits and acquire entrepreneurial skills.</p>
            </div>
        </div>
    </div>
</section>

<?php

$sections = get_post_meta($post->ID, 'blanket_sections', true);

if( ($sections[0]['image'] || $sections[0]['alt']) && $sections[0]['heading'] && $sections[0]['content'] && $sections[0]['section_class'] ) {
foreach ($sections as $key => $section) { ?>
    <section class="<?php echo $section['section_class'] ? $section['section_class'] : 'stars' ?>" <?php if($section['section_class']=='stars'&& !empty($section['image'])) echo "style='background-image: url(".$section['image'].");'" ?>>
        <div class="container"><?php
            if( $key % 2 == 0 ): ?>
                <!-- right -->
                <?php if($section['image'] && $section['section_class'] != 'stars'): ?>
                <div class="col-sm-offset-1 col-sm-5 text-center">
                    <img src="<?php echo $section['image'] ?>"/>
                </div>
                <?php elseif(empty($section['image']) && $section['alt']): ?>
                <div class="col-sm-offset-1 col-sm-5 text-center">
                    <div>
                        <?php echo do_shortcode( $section['alt'] ); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="<?php echo ((($section['image'] && $section['section_class'] != 'stars') || ($section['alt'] && empty($section['image'])))?'col-sm-5':'col-sm-offset-1 col-sm-10 text-left wcolor dosis-reg') ?>">
                    <?php if($section['heading']): ?><h1 class="title theme-color"><?php echo $section['heading'] ?></h1><?php endif; ?>
                    <?php echo do_shortcode( wpautop($section['content']) ) ?>
                </div><div class="clearfix"></div>
            <?php else: ?>
                <!-- left -->
                <div class="<?php echo ((($section['image'] && $section['section_class'] != 'stars') || ($section['alt'] && empty($section['image'])))?'col-sm-offset-1 col-sm-5':'col-sm-offset-1 col-sm-10 text-center wcolor dosis-reg') ?>">
                    <?php if($section['heading']): ?><h1 class="title theme-color <?php echo ($section['section_class'] == 'stars')?'text-center':'text-right' ?>"><?php echo $section['heading'] ?></h1><?php endif; ?>
                    <?php echo do_shortcode( wpautop($section['content']) ) ?>
                </div>
                <?php if($section['image'] && $section['section_class'] != 'stars'): ?>
                <div class="col-sm-5 text-left">
                    <img src="<?php echo $section['image'] ?>"/>
                </div>
                <?php elseif(empty($section['image']) && $section['alt']): ?>
                <div class="col-sm-5 text-left">
                    <div>
                        <?php echo do_shortcode( $section['alt'] ); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="clearfix"></div>
            <?php endif; ?>
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