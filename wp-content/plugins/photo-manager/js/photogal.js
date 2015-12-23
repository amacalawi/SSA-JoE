jQuery(document).ready(function ($) {
    $(".photogal").lightGallery({
        thumbnail: true,
        selector:'.image-selector',
        mode: 'lg-zoom-out',
        download: false,
        mousewheel: true,
    });
});