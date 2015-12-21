<div class="content"><?php
    $header = get_post_meta($post->ID, 'blanket_jumbotron', true); ?>
    <section class="<?php echo $post_slug = $post->post_name; ?>-banner" style="background-image: url(<?php echo $header['image']; ?>);">
        <div class="container"><?php
            $class = "";
            switch ($post_slug) {
                case 'programmes':
                    $class="col-sm-offset-2 col-sm-8 text-center";
                    break;
                case 'about':
                default:
                    $class="col-sm-offset-6 col-sm-6";
                    break;
            } ?>
            <div class="<?php echo $class ?>">
                <h1 class="title theme-color"><?php echo (!empty($header['title']) ? $header['title'] : get_the_title() ) ?></h1>
                <?php if(!empty($header['heading'])) : ?><h1 class="title"><?php echo $header['heading'] ?></h1><?php endif; ?>
                <?php if(!empty($header['subheading']) && is_page('about')) : ?><h2 class="desc dosis-reg"><?php echo $header['subheading'] ?></h2><?php endif; ?>
                <?php if(!empty($header['subheading']) && !is_page('about')): ?><p><?php echo $header['subheading'] ?></p><?php endif; ?>
            </div>
        </div>
    </section><?php

    $sections = get_post_meta($post->ID, 'blanket_content_section', true);

    if( is_array($sections) && !empty($sections[0]['image']) ) {
    foreach ($sections as $key => $section) {
        switch ($section['parentclass']) {
            case 'about-phase1': ?>
                <section class="<?php echo $section['parentclass'] ?>">
                    <div class="container">
                        <div class="col-sm-offset-1 col-sm-5 text-center">
                            <img src="<?php echo $section['image'] ?>">
                        </div>
                        <div class="col-sm-5">
                            <h1 class="title theme-color"><?php echo $section['heading'] ?></h1>
                            <p><?php echo $section['content'] ?></p>
                        </div><div class="clearfix"></div>
                    </div>
                </section> <?php

                break;

            case 'stars': ?>
                <section class="<?php echo $section['parentclass'] ?>" style="bgackground-img: url(<?php echo $section['image'] ?>)">
                    <div class="container">
                        <div class="col-sm-offset-1 col-sm-10">
                            <h1 class="wcolor text-center dosis-reg"><?php echo $section['content'] ?></h1>
                        </div>
                    </div>
                </section> <?php
                break;
            default:
                echo "string";
                break;
         }
    }
    }

    the_content(); ?>


</div>