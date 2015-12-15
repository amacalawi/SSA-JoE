<!-- Gallery Section -->
<section id="gallery-section" class="page-section gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1 class="heading text-center"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo do_shortcode('[employee]') ?>
            </div>
        </div>
    </div>
</section>