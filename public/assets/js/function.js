$(function(){
    $("#languages .dropdown-item").click(function(){
        const lang_code = $(this).data('langcode');
        window.location = 'http://multiple.test/language/change?lang='+ lang_code;
    })
});

