<?php $heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="<?php echo $post->post_name ?>-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="container">
        <div class="col-sm-offset-6 col-sm-6">
            <?php if($heading['heading']): ?><h1 class="title theme-color"><?php echo $heading['heading'] ?></h1><?php endif; ?>
            <?php if($heading['subheading']): ?><h1><?php echo $heading['subheading'] ?></h1><?php endif; ?>
            <?php if($heading['content']){ ?>
                <h2 class="desc dosis-reg"><?php echo $heading['content']; ?></h2>
            <?php } else { ?>
                <p><?php the_content(); ?></p>
            <?php }; ?>
        </div>
    </div>
</section>
<?php the_content(); ?>