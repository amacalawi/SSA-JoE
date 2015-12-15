<div id="cover-carousel" class="flexslider">
    <ul class="slides"><?php
        if( is_array($carousels) ) {
            foreach ($carousels as $carousel) { ?>
                <li style="background-image: url(<?php echo $carousel['image'] ?>);">
                    <div class="container">
                        <div class="<?php echo $carousel['subheadingclass'] ?> col-sm-6">
                            <h1 class="heading"><?php echo $carousel['heading'] ?></h1>
                            <h1><?php echo $carousel['subheading'] ?></h1>
                        </div>
                    </div>
                </li><?php
            }
        } else {
            echo "<div data-message='No carousel items to load'></div>";
        } ?>
    </ul>
</div>