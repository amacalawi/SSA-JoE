jQuery(document).ready(function($) {
	jQuery('.datepicker').datepicker({
		dateFormat: 'MM dd, yy'
	});

    // Carousel
    $(document).on('click', '.button-media', function(e) {
        e.preventDefault();
        var _this   = $(this).attr("id");
        var _target = $("#"+_this).attr("data-target");
        var _input  = $("#"+_this).attr("data-input");

        //If the uploader object has already been created, reopen the dialog
        // if (custom_uploader) {
        //     custom_uploader.open();
        //     return;
        // }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = new wp.media({
            title: 'Choose an Image',
            button: {
                text: "Set as Slide Image"
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $(_target).attr('src', attachment.url);
            $(_input).val(attachment.url);
        });

        //Open the uploader dialog
        custom_uploader.open();

        return false;

    });
    $('.button-add.carousel').click(function(){
        var $key = $('.carousel .carousel-item').length;
        var $_item = $('#main-carousel');
        $_item.append(
            '<div id="carousel_item_'+$key+'" class="carousel-item">'
                + '<div class="input-group">'
                    + '<button data-target="#carousel_item_'+$key+'" type="button" class="pull-right button-destroy carousel button button-default button-large"><i class="fa fa-times"></i></button>'
                + '</div>'
                + '<img id="pms_photos_image_'+$key+'" role="button" class="button-media" data-target="#pms_photos_image_'+$key+'" data-input="#pms_photos_image_input_'+$key+'" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" width="300" height="225">'
                + '<input id="pms_photos_image_input_'+$key+'" type="hidden" name="pms_photos[carousel]['+$key+'][image]">'
            + '<div class="input-group form-group">'
                + '<strong>Heading</strong><br>'
                + '<input type="text" name="pms_photos[carousel]['+$key+'][heading]" ><br>'
                + '<strong>Subheading</strong><br>'
                + '<input type="text" name="pms_photos[carousel]['+$key+'][subheading]" >'
            + '</div>'
            +'</div>'
            + '</div>');
    });
    $(document).on('click', '.button-destroy.carousel', function(){
        var _target = $(this).data("target");
        $(_target).fadeOut(1000).delay(1500).remove();
    });
    $(document).on('click', '.button-destroy.unset-img', function(){
        var _target = $(this).data("target"),
            _input  = $(this).data('input');
        $(_target).attr('src', '');
        $(_input).val('');
    });
    $(document).on('click', '#item-button-0', function(){
        var _target = $(this).data('target');
        $(_target).find('input').val('');
        $(_target).find('img').attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
    });
    $(document).on('click', '.button-destroy-all.carousel', function(){
        $('.carousel .carousel-item').each(function(){
            if( 'carousel_item_0' != $(this).attr('id') )
            {
                $(this).remove();
            } else {
                $(this).find('input, textarea').val('');
                $(this).find('img').attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
            }
        });
    });
});