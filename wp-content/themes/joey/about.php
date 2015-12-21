<?php
$jumbotron = get_post_meta($post->ID, 'blanket_jumbotron', true); ?>
<div class="content">
    <section class="about-banner" style="background-image: url(<?php echo $jumbotron['image']; ?>);">
        <div class="container">
            <div class="col-sm-offset-6 col-sm-6">
                <h1 class="title theme-color"><?php echo (!empty($jumbotron['title']) ? $jumbotron['title'] : get_the_title() ) ?></h1>
                <?php if(!empty($jumbotron['heading'])) : ?><h1 class="title"><?php echo $jumbotron['heading'] ?></h1><?php endif; ?>
                <?php if(!empty($jumbotron['subheading'])) : ?><h2 class="desc dosis-reg"><?php echo $jumbotron['subheading'] ?></h2><?php endif; ?>
            </div>
        </div>
    </section>
    <section class="about-phase1">
        <div class="container">
            <div class="col-sm-offset-1 col-sm-5 text-center"></div>
        </div>
    </section>
</div>