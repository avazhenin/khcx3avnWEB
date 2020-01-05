jQuery(function ($) {

    //Ajax contact
    var form = $('.contact-form');
    form.submit(function () {
        $this = $(this);
        $.post($(this).attr('action'), function (data) {
            $this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
        }, 'json');
        return false;
    });

    //Goto Top
    $('.gototop').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });
    //End goto top

});

$(document).ready(function () {
    resize_content(); //ресайз при инициализации страницы
    $(window).on('resize', function(){resize_content();}); //при изменении размера страницы меняем высоту контентного блока
});

function resize_content() {

    var new_height = $(window).innerHeight() - ($('.header').outerHeight() + $('.footer').outerHeight());
    if (new_height > $('.content').outerHeight()) {
        $('.content').css('height', new_height);
    }
}