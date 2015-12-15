<!-- Default -->
<section id="<?php echo $slug ?>-section" class="page-section <?php echo $slug ?>-section">
    <div id="background-image" style="<?php echo $blanket_section_style;?>"></div>
    <div class="container text-center">
        <h1 class="heading text-center"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>