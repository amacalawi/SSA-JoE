<?php
if( array_key_exists('carousel', $events_meta) && !empty($events_meta['carousel'][0]['image']))
{ ?>
<div class="fade-slider"><?php
    foreach ($events_meta['carousel'] as $key => $value) { ?>
        <div class="slick-item">
            <img data-lazy="<?php echo $value['image'] ?>">
        </div><?php
    }
?>
</div><?php
}
else
{
    echo $post_thumbnail;
}
 ?>