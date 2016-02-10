<?php $heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="<?php echo $post->post_name ?>-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="container">
        <img src="<?php echo BLANKET_URI . 'images/comet.png' ?>" class="img-object">
        <div class="col-sm-offset-4 col-sm-8 margin-top-100">

            <h1 class="title wcolor text-center" style="margin-bottom: 37px">Experience JoE in 4 Phases</h1>

            <div class="card-deck-wrapper">
                <div class="experience-cards card-deck">
                    <div class="card text-center wcolor">
                        <div class="card-block">
                            <img src="<?php echo BLANKET_URI . 'images/exp-ic1.png' ?>" class="card-img">
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><strong>Phase I<br>Soft Skills:</strong></p>
                                    <small>Mindset<br>Development</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center wcolor">
                        <div class="card-block">
                            <img src="<?php echo BLANKET_URI . 'images/exp-ic2.png' ?>" class="card-img">
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><strong>Phase II<br>Soft Skills:</strong></p>
                                    <small>Communication &amp;<br>Behavioural Skills</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center wcolor">
                        <div class="card-block">
                            <img src="<?php echo BLANKET_URI . 'images/exp-ic3.png' ?>" class="card-img">
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><strong>Phase III<br>Technical Skills</strong></p>
                                    <small>Financial Literacy&amp;<br>Business Skills</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center wcolor">
                        <div class="card-block">
                            <img src="<?php echo BLANKET_URI . 'images/exp-ic4.png' ?>" class="card-img">
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><strong>Phase IV</strong></p>
                                    <small>Final Project &amp;<br>Mini-Market Fair</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 wcolor margin-top-100">
                    <p class="text-center">In JoE, we believe that entreprenuership is not just about financial literacy. If it was that simple, then why do 99% of busienss ventures fail? There's so much more to that! Which is why JoE includes soft skills such as creativity, problem solving and innovative thinking.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php the_content(); ?>