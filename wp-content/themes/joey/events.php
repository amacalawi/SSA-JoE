<!-- Events -->
<section id="<?php echo $slug ?>-section" class="page-section <?php echo $slug ?>-section">
    <div id="background-image" style="<?php echo $blanket_section_style;?>;z-index: -1;"></div>
    <div class="container">
        <h1 class="heading heading-no-line text-left"><?php the_title(); ?></h1>
    </div>
    <div class="container"><?php
        the_content(); ?>
    </div>
</section>