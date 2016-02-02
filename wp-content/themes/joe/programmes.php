<?php $heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="programmes-banner">
<!--style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)"-->
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8 text-center">
            <h1 class="title theme-color text-uppercase"><?php the_title() ?></h1>
            <?php if($heading['subheading']): ?><h1><?php echo $heading['subheading'] ?></h1><?php endif; ?>
            <?php if($heading['content']) { ?>
            <p><?php echo $heading['content'] ?></p>
            <?php }; ?>
        </div>

        <div class="row">
            <div class="col-sm-4 sides">
                <h2 class="title wolor">5-MONTH FAST TRACK</h2>
                <img src="http://journey-of-entrepreneurship.com.sg/demo/wp-content/uploads/2016/01/envisioning.png"/>
                <div class="content">
                    <p class="first">
                        Learn all about the entrepreneurship through experential learning.
                    </p>
                    <p>
                        20 weeks
                    </p>
                    <p>
                        2 hours/week
                    </p>
                    <p>
                        No Meals included
                    </p>
                    <p>
                        <button class="btn">
                            See Pricing
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 sides">
                <h2 class="title wolor">1-WEEK HOLIDAY BOOTCAMP</h2>
                <img src="http://journey-of-entrepreneurship.com.sg/demo/wp-content/uploads/2016/01/time-management.png"/>
                <div class="content">
                    <p class="first">
                        Have loads of enthusiasm and energy to spare? Experience JoE over an intensive 5-day camp!
                    </p>
                    <p>
                        5 days
                    </p>
                    <p>
                        8 hours/day
                    </p>
                    <p>
                        Meals included
                    </p>
                    <p>
                        <button class="btn">
                            See Pricing
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 sides">
                <h2 class="title wolor">10-MONTH THOROUGH TRACK</h2>
                <img src="http://journey-of-entrepreneurship.com.sg/demo/wp-content/uploads/2016/01/recognising-opportunities.png"/>
                <div class="content">
                    <p class="first">
                        Develop an entrepreneurial mindset at a more organic pace through the 10-month Thorough Track.
                    </p>
                    <p>
                        40 weeks
                    </p>
                    <p>
                        2 hours/week
                    </p>
                    <p>
                        Meals included
                    </p>
                    <p>
                        <button class="btn">
                            See Pricing
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
    </div>
</section>
<?php
/*
$sections = get_post_meta($post->ID, 'blanket_sections', true);

if( !empty($sections[0]['image']) && !empty($sections[0]['heading']) && !empty($sections[0]['content']) && !empty($sections[0]['section_class']) ): ?>
    <section style="padding-top: 13em;" class="<?php echo $sections[0]['section_class'] ? $sections[0]['section_class'] : 'stars' ?>" <?php if($sections[0]['section_class']=='stars'&& !empty($sections[0]['image'])) echo "style='background-image: url(".$sections[0]['image'].");'" ?>>
        <div class="container"><?php
            foreach ($sections as $section) {
                if($section['section_class'] == 'pricing'): ?>
                <div class="col-sm-4">
                    <div class="panel panel-info card text-center">
                        <?php if($section['image'] && $section['section_class'] != 'stars'): ?>
                            <img src="<?php echo $section['image'] ?>"/>
                        <?php endif; ?>

                        <div class="panel-heading">
                            <h3 class="wcolor text-uppercase"><?php echo $section['heading'] ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            $list_items = explode(PHP_EOL, $section['content']);
                            $price_list; ?>
                            <div class="list-group"><?php
                                foreach ($list_items as $list_item) {
                                    if( strtolower(substr($list_item, 0, 5)) == 'price|' ) $price_list = $list_item;
                                    if( trim($list_item) !== '' && strtolower(substr($list_item, 0, 6)) != 'price|' ): ?>
                                        <div class="list-group-item">
                                            <p><?php echo do_shortcode($list_item); ?></p>
                                        </div>
                                        <?php
                                    endif;
                                } ?>
                                <?php
                                if( !empty($list_item) ) {
                                $list_i = explode("|", $list_item); ?>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-block" data-toggle="modal" href='#modal_<?php echo $random_num = rand(10, 200); ?>'>See Pricing</a>
                                </div><?php
                                } ?>
                                <div class="modal fade" id="modal_<?php echo $random_num; ?>">
                                    <div class="modal-dialog pricing-modal">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h2 class="modal-title text-uppercase">Pricing</h2>
                                            </div>

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Country</th>
                                                        <th class="text-center">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $count=1;
                                                    foreach ($list_i as $key => $value) {
                                                        if( $value != 'price' )
                                                        {
                                                            if ($count%2 == 1)
                                                            {
                                                                echo "<tr>";
                                                            } ?>
                                                                <td><?php echo $value; ?></td><?php
                                                            if ($count%2 == 0)
                                                            {
                                                                echo "</tr>";
                                                            }
                                                            $count++;
                                                        }
                                                    }
                                                    if($count%2 != 1) echo "</tr>"; ?>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div><?php
                endif;
             } ?>
        </div>
    </section><?php
endif; ?>

<<<<<<< HEAD
<?php $heading = get_post_meta($post->ID, 'blanket_heading', true); ?>
<section class="programmes-banner" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>)">
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8 text-center">
            <h1 class="title theme-color text-uppercase"><?php the_title() ?></h1>
            <?php if($heading['subheading']): ?><h1><?php echo $heading['subheading'] ?></h1><?php endif; ?>
            <?php if($heading['content']) { ?>
            <p><?php echo $heading['content'] ?></p>
            <?php }; ?>
        </div>
    </div>
</section>

<?php the_content() ?>
=======
<?php //the_content() ?>
>>>>>>> 2ce0bd6a88b82f12343957c7b0c218fef73e1145

<?php
/*
$sections = get_post_meta($post->ID, 'blanket_sections', true);
foreach ($sections as $section) {
    if( !empty($section['image']) && !empty($section['heading']) && !empty($section['subheading']) && !empty($section['section_class']) ): ?>
    <section class="<?php echo $section['section_class'] ? $section['section_class'] : 'stars' ?>" <?php if($section['section_class']=='stars'&& !empty($section['image'])) echo "style='background-image: url(".$section['image'].");'" ?>>
        <div class="container">
            <?php if($section['image'] && $section['section_class'] != 'stars'): ?>
            <div class="col-sm-offset-1 col-sm-10">
                <img src="<?php echo $section['image'] ?>"/>
            </div>
            <?php endif; ?>
            <div class="<?php echo (($section['image'] && $section['section_class'] != 'stars')?'col-sm-5':'col-sm-offset-1 col-sm-10 text-center') ?>">
                <?php if($section['heading']): ?><h1 class="title theme-color text-center"><?php echo $section['heading'] ?></h1><?php endif; ?>
                <?php echo $section['content'] ?>
            </div><div class="clearfix"></div>
        </div>
    </section> <?php
    endif;
}
*/

 ?>


<?php
/*
$parts =get_post_meta($post->ID, 'blanket_parts', true);
if(!empty($parts[0]['image']) && !empty($parts[0]['part_class']) && !empty($parts[0]['heading']) ): ?>
<section class="<?php echo $parts[0]['part_class'] ? $parts[0]['part_class'] : 'student' ?>">
    <div class="container">
        <div class="col-sm-6">
            <h1><?php echo $parts[0]['heading'] ?></h1>
            <img class="pull-right" src="<?php echo $parts[0]['image'] ?>"/>
        </div>
        <div class="col-sm-6">
            <h1><?php echo $parts[1]['heading'] ?></h1>
            <img class="pull-left" src="<?php echo $parts[1]['image'] ?>"/>
        </div><div class="clearfix"></div>
    </div>
</section>
<?php endif;
*/
?>