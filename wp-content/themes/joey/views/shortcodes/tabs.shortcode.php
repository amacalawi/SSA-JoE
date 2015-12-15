<div class="<?php echo $a['class'] ?>">
    <div class="<?php echo $a['inner-class'] ?>">
        <ul class="nav nav-tabs"><?php
            $j=1;for ($i=(int)$navs_count; $i !== 0; $i--) { ?>
                <li class="<?php echo($i===$navs_count?'active':''); ?>">
                    <a href="#<?php echo $a['id'].$j++ ?>" data-toggle="tab"><strong><?php echo $blanket_tabtitles[ $j-2 ] ?></strong></a>
                </li><?php
            } ?>
        </ul>
        <div class="<?php echo $a['content-class']; ?>"><?php
            echo do_shortcode($content); ?>
        </div>
    </div>
</div>