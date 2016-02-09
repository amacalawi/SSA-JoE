jQuery(document).ready(function ($) {

    // Metabox
    $('.handletoggle').click(function (e) {
        $('.map').fadeToggle();
        $(this).find('.fa').toggleClass('fa-eye fa-eye-slash');
    });

    // Carousel
    $(document).on('click', '.button-media', function(e) {
        e.preventDefault();
        var _this   = $(this).attr("id");
        var _target = $("#"+_this).data("target");
        var _input  = $("#"+_this).data("input");
        var _buttonName = ( typeof( $("#"+_this).attr("data-buttonName") ) !== 'undefined' || (typeof( $("#"+_this).attr("data-buttonName") ) == true) ) ? $("#"+_this).data("buttonName") : 'Select Image';

        //If the uploader object has already been created, reopen the dialog
        // if (custom_uploader) {
        //     custom_uploader.open();
        //     return;
        // }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = new wp.media({
            title: 'Choose an Image',
            button: {
                text: _buttonName
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
        $_item.append('<div id="carousel_item_'+$key+'" class="carousel-item"><div class="input-group"><button data-target="#carousel_item_'+$key+'" type="button" class="pull-right button-destroy carousel button button-default button-large"><i class="fa fa-times"></i></button></div><img id="bb_carousel_image_'+$key+'" role="button" class="button-media" data-target="#bb_carousel_image_'+$key+'" data-input="#bb_carousel_image_input_'+$key+'" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" width="300" height="225"><input id="bb_carousel_image_input_'+$key+'" type="hidden" name="blanket_carousel['+$key+'][image]"><div class="heading-container"><div class="input-group"><i class="input-group-addon fa fa-header text-muted"></i><span class="input-group-addon">Heading</span><input type="text" name="blanket_carousel['+$key+'][heading]"></div></div><div class="subheading-container"><div class="input-group"><i class="input-group-addon fa fa-paragraph text-muted"></i><span class="input-group-addon">Subheading</span><textarea type="text" name="blanket_carousel['+$key+'][subheading]"></textarea><div class="input-group"><span class="input-group-addon">Parent Class</span><input type="text" name="blanket_carousel['+$key+'][subheadingclass]" value=""></div></div></div></div>');
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

    $('.button-add.section').click(function(){
        var $key = $('.sections .section-item').length;
        var $_item = $('#sections-container');
        $_item.append(
            '<div id="section_item_'+$key+'" class="section-item">'
                + '<div class="checkbox-container clearfix">'
                    + '<button id="section_item_image_'+$key+'_remove" data-target="#section_item_'+$key+'" type="button" class="pull-right button button-default button-circle button-destroy section" title="Remove this section">&times;</button>'
                + '</div>'
                + '<div id="section_item_image_container_'+$key+'" role="button" class="image-container button-media" data-target="#section_item_image_'+$key+'" data-input="#section_item_image_input_'+$key+'">'
                    + '<img id="section_item_image_'+$key+'" src="">'
                    + '<input id="section_item_image_input_'+$key+'" type="hidden" name="blanket_sections['+$key+'][image]" value="">'
                    + '<input type="hidden" name="blanket_sections['+$key+'][parentclass]" value="'+$('select#section-types').val()+'">'
                + '</div>'
                + '<div class="caption-container">'
                    + '<div class="form-group">'
                        + '<strong>Alternate to Image</strong>'
                        + '<span class="description">This will be displayed if the Image is empty.</span>'
                        + '<input type="text" name="blanket_sections['+$key+'][alt]" >'
                    + '</div>'
                    + '<div class="form-group">'
                        + '<strong>Heading</strong>'
                        + '<input type="text" name="blanket_sections['+$key+'][heading]">'
                    + '</div>'
                + '<div class="form-group">'
                    + '<strong>Content</strong>'
                    + '<textarea type="text" name="blanket_sections['+$key+'][content]"></textarea>'
                + '</div>'
                + '<div class="form-group">'
                    + '<strong>Section Class</strong>'
                    + '<input type="text" name="blanket_sections['+$key+'][section_class]">'
                + '</div>'
            + '</div>'
            + '</div>'
        );
    });
    $(document).on('click', '.button-destroy.section', function(){
        var _target = $(this).data("target");
        $(_target).fadeOut(1000).delay(1500).remove();
    });
    $(document).on('click', '.button-destroy-all.section', function(){
        $('.sections .section-item').each(function(){
            if( 'section_item_0' != $(this).attr('id') )
            {
                $(this).remove();
            } else {
                $(this).find('input, textarea').val('');
                $(this).find('img').attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
            }
        });
    });

    // Options
    $(document).on('click', '.button-remove', function(){
        var _target = $(this).data("target");
        var _input = $(this).data("input");
        $(_target).delay(1500).attr('src', '');
        $(_input).attr('val', '');
    });

    // #main-carousel.carousel-container
    $('.sortable').sortable({
        revert: true,
    });
    // .carousel-item
    $('.draggable').draggable({
        connectToSortable: "#main-carousel",
        revert: "invalid",

        // update values
        stop: function(event, ui) {
            var order = [];
            var $item = $('#main-carousel .carousel-item');
            var $key = $item.length - 1;

            //loop trought each li...
            $item.each( function(e) {
                //add each element position to the array...
                $key = $(this).index();
                order.push( $(this).index() );
                if( undefined === $(this).attr('id') )
                {
                    $key = $(this).index() - 1;
                }
                $(this).find('input[id*=bb_carousel_image]').attr('name', 'blanket_carousel['+$key+'][image]');
            });
            // join the array as single variable...
            var positions = order.join(';')
            //use the variable as you need!
        }
    });

});
