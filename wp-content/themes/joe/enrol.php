<?php $blanket_heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<?php if(has_post_thumbnail()): ?>
<div class="banner-img">
    <?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>
<section class="centre-banner">
    <section class="registration-section">
        <div class="container">
            <div class="registration-header">
                <p>Your child’s entrepreneurship journey begins here.</p>
                <h3>Register for JoE now!</h3>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="228" title="Registration Form"]') ?>

            <!-- <div class="col-sm-6">
                <div class="form-group">
                    <p>Your child’s entrepreneurship journey begins here.</p>
                    <h3>Register for JoE now!</h3>
                </div>
                <form method="POST" role="form">
                    <div class="form-group">
                        <label for="" class="sr-only">Full Name</label>
                        <input type="text" class="form-control input-lg" placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Date of Birth</label>
                        <input type="text" class="form-control input-lg datepicker" placeholder="Date of birth">
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Passport / IC Number</label>
                        <input type="text" class="form-control input-lg" placeholder="Passport">
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Email</label>
                        <input type="email" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Find a City / Country</label>
                        <div>
                            <select name="" class="selectpicker selectpicker-lg" data-width="100%" title="Find a City / Country">
                                <option value="Singapore, Singapore">Singapore, Singapore</option>
                                <option value="Cairo, Egypt">Cairo, Egypt</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Find a Centre</label>
                        <div>
                            <select name="" class="selectpicker selectpicker-lg" data-width="100%" title="Find a Centre">
                                <option value="Paya Lebar">Paya Lebar</option>
                                <option value="Sixth October City">Sixth October City</option>
                                <option value="">10-Month Thorough Track</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">I would like to enroll for</label>
                        <div>
                            <select name="" class="selectpicker selectpicker-lg" data-width="100%" title="I would like to enroll for">
                                <option value="">Holiday Boot Camp</option>
                                <option value="">5-Month Fast Track</option>
                                <option value="">10-Month Thorough Track</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Parent / Guardian Name</label>
                        <input type="text" class="form-control input-lg" placeholder="Parent / Guardian Name">
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">Contact No.</label>
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <label for="" class="sr-only">How did you hear about JoE</label>
                        <div>
                            <select name="" class="selectpicker selectpicker-lg" data-width="100%" title="Contact No.">
                                <option value="">Internet / Media</option>
                                <option value="">Friend / Acquaintance</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-lg">Submit</button>
                </form>
            </div> -->
        </div>
    </section>

    <div class="container">
        <div class="col-sm-6 text-left">
            <h1 class="title theme-color text-uppercase"><?php echo $blanket_heading['heading'] ?></h1>
            <p><?php echo $blanket_heading['content'] ?></p>
        </div>
        <div class="col-sm-6 text-right">
            <h4>Follow us
                <?php $blanket_contact = get_option( "blanket_theme_options" ); ?>
                <a target="_blank" href="<?php echo $blanket_contact['social']['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="<?php echo $blanket_contact['social']['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="<?php echo $blanket_contact['social']['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
            </h4>

            <div class="row">
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="form-group"><?php

                        /**
                         * From enrollment-manager plugin
                         * @see  <plugin-dir>/includes/helpers.php
                         */
                        enroll_centre_dropdown(); ?>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div id="centre-box-container">
                    <?php

                    // echo do_shortcode('[enroll]');

                     ?>
                </div>
            </div>
        </div>

    </div>
</section>