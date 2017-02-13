/**
 * Created by Lime on 13.02.2017.
 */
$(document).ready(function(){
    $('#dev_style').on('change', function(){
        $('#main_chat_messages').toggleClass('flat_style', $(this).is(':checked')).toggleClass('bubbles', !$(this).is(':checked'));
    });
});