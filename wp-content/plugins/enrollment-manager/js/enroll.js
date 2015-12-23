jQuery(document).ready(function($) {

    submit_me(jQuery('#centre-picker-form'), '#centre-box-container');
    // jQuery('#centre-picker-form').submit();
    jQuery('.centre-picker').on('change', function(){
        var _val = $(this).val(),
            _form = $(this).parents('form');

        submit_me(_form, '#centre-box-container');

    });

});


function submit_me($form, html){
    jQuery(html).removeClass('animated fadeIn').addClass('valign infinite animated bounce').html('<div class="icon-container"><i class="fa fa-cog fa-spin fa-5x"></i><div class="text-center"></div></div>');
    jQuery.post(
        the_ajax_script.ajaxurl,
        $form.serialize(),
        function(response_from_the_action_function){
            setTimeout(function(){
                jQuery(html).removeClass('valign infinite animated bounce').addClass('animated fadeIn').html(response_from_the_action_function);
            }, 1000);
        }
    );
}