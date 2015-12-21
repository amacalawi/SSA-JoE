<?php
$jumbotron = get_post_meta($post->ID, 'blanket_jumbotron', true); ?>
<div class="content">
    <section class="exp-banner" style="background-image: url(<?php echo $jumbotron['image']; ?>);">
        <div class="container">
            <div class="col-sm-offset-6 col-sm-6">
                <h1 class="title theme-color"><?php echo (!empty($jumbotron['title']) ? $jumbotron['title'] : get_the_title() ) ?></h1>
                <?php if(!empty($jumbotron['heading'])) : ?><h1 class="title"><?php echo $jumbotron['heading'] ?></h1><?php endif; ?>
                <?php if(!empty($jumbotron['subheading'])): ?><p><?php echo $jumbotron['subheading'] ?></p><?php endif; ?>
            </div>
        </div>
    </section>
    <section class="phase1">
        <div class="container">
            <div class="col-sm-offset-1 col-sm-5 text-center">
                <img src="../assets/front/images/exp1.png"/>
            </div>
            <div class="col-sm-5">
                <h1 class="title">Phase I</h1>
                <h1>SOFT SKILLS: <br/>MINDSET DEVELOPMENT</h1>
                <p>
                    is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.
                </p>
            </div><div class="clearfix"></div>
        </div>
    </section>
</div>