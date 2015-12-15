<?php

$contact_post_meta = get_post_meta($id, 'blanket_contact', true);

 ?>
        <!-- Contact Us -->
        <section id="contact-section" class="page-section contact-section">
            <div class="vertical-aligned">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="clearfix">
                                <h1 class="heading white text-uppercase pull-left"><?php the_title(); ?></h1>
                                <div class="social-details pull-right">
                                    <ul class="social-nav">
                                        <?php if(get_bloginfo('admin_email')): ?>
                                        <li class="social-icon"><a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" class="btn-transparent-circle"><i class="fa fa-envelope-o"></i></a></li>
                                        <?php endif; ?>

                                        <?php if($contact_post_meta['social']['site']): ?>
                                        <li class="social-icon"><a target="_blank" title="Singapore Website" href="<?php echo @$contact_post_meta['social']['site'] ?>" class="btn-transparent-circle"><i class="fa fa-flag"></i></a></li>
                                        <?php endif; ?>

                                        <?php if($contact_post_meta['social']['facebook']): ?>
                                        <li class="social-icon"><a target="_blank" href="<?php echo @$contact_post_meta['social']['facebook'] ?>" class="btn-transparent-circle"><i class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>

                                        <?php if($contact_post_meta['social']['twitter']): ?>
                                        <li class="social-icon"><a target="_blank" href="<?php echo @$contact_post_meta['social']['twitter'] ?>" class="btn-transparent-circle"><i class="fa fa-twitter"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-details">
                                <div itemscope itemtype="http://schema.org/Organization">
                                    <div itemprop="name"><h3><?php echo value($contact_post_meta['company']); ?></h3></div>
                                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                        <p itemprop="streetAddress">
                                            <span class="unit"><?php echo value($contact_post_meta['unit'], "", ", "); ?></span>
                                            <span class="street"><?php echo value($contact_post_meta['street'], "", ", "); ?></span>
                                        </p>
                                        <p itemprop="addressLocality">
                                            <span class="brgy"><?php echo value($contact_post_meta['brgy'], "", ", "); ?></span>
                                            <span class="city"><?php echo value($contact_post_meta['city'], "", ", "); ?></span>
                                        </p>
                                        <p itemprop="addressRegion">
                                            <span class="province"><?php echo value($contact_post_meta['province'], "", ", "); ?></span>
                                        </p>
                                        <p itemprop="postalCode">
                                            <span class="zip"><?php echo value($contact_post_meta['zip'], "", ", "); ?></span>
                                        </p>
                                        <p itemprop="addressCountry">
                                            <span class="country"><?php echo value($contact_post_meta['country']); ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div><?php

                            /**
                             * [mail_form]
                             */
                            echo $content; ?>

                        </div>
                        <div class="map-container vertical-aligned">
                            <img class="map-placeholder" src="<?php echo BLANKET_URI; ?>assets/images/map.png" alt="SSA Manila Map">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>