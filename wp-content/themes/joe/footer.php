<?php
$blanket_options = get_option('blanket_theme_options'); ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <a class="" href="<?php echo bloginfo('url') ?>">
                        <strong><?php echo get_bloginfo('name') ?></strong>
                    </a>
                    <p><?php echo get_bloginfo('description') ?></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 col-md-offset-1">
                            <h5>Company</h5><?php

                            $theme_location = 'main-menu';
                            if( has_nav_menu($theme_location) )
                            {
                                wp_nav_menu( array(
                                    'theme_location' => $theme_location,
                                    'container'=>false,
                                    'items_wrap' => '<ul class="list-unstyled">%3$s</ul>',
                                    'walker' => new wp_bootstrap_navwalker()
                                ));
                            } ?>

                        </div>
                        <div class="col-xs-6 col-md-3">
                            <h5>Programmes</h5>
                            <ul class="list-unstyled"><?php
                                $tax = get_taxonomies(
                                    array( 'name' => 'phasems_phases_categories' )
                                );
                                $parent = get_term_by('slug', 'phase', 'phasems_phases_categories');;
                                $categories= get_terms(
                                    $tax,
                                    array( 'parent' => $parent->term_id )
                                );
                                foreach ($categories as $phase) {
                                    echo "<li><a href='".get_the_permalink(89)."'>{$phase->name}</a></li>";
                                }

                                // -->
                                 ?>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-md-3 col-md-offset-1">
                            <h5>Links</h5><?php
                            $theme_location = 'footer-menu';
                            if( has_nav_menu($theme_location) )
                            {
                                wp_nav_menu( array(
                                    'theme_location' => $theme_location,
                                    'container'=>false,
                                    'items_wrap' => '<ul class="list-unstyled">%3$s</ul>',
                                    'walker' => new wp_bootstrap_navwalker()
                                ));
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h5>Call Us</h5>
                    <p><a href="tel:<?php echo $blanket_options['contact']['tel'] ?>" class="tel"><?php echo $blanket_options['contact']['tel'] ?></a></p>
                    <h5>Or Email Us</h5>
                    <p><a class="email" href="mailto:<?php echo $blanket_options['contact']['email'] ?>"><?php echo $blanket_options['contact']['email'] ?></a></p>
                </div>
            </div>
        </div>
        <div class="row-bottom">
            <div class="container">
                <div class="col-xs-6">
                    <p class="copyright pull-left"><?php the_copyright(); ?></p>
                </div>
                <div class="col-xs-6 pad-right-zero">
                    <ul class="list-inline social-icons pull-right">
                        <li>
                            <a target="_blank" href="<?php echo $blanket_options['social']['facebook'] ?>" class="btn">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo $blanket_options['social']['twitter'] ?>" class="btn">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo $blanket_options['social']['linkedin'] ?>" class="btn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><?php
    wp_footer() ?>

</body>
</html>