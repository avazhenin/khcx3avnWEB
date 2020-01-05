$(document).ready(function () {
    $('.open_popup').click(function () {
        $('#shadow').css('opacity','0.5');
        $('#popup, #shadow').fadeIn(200);
        return false;
    });

    $('#close').click(function () {
        $('#popup,#shadow').fadeOut(200);
    });
});

function popupFunc(num) {
    $('#popup,#shadow').fadeIn(300);
    document.getElementById("changeHere").innerHTML = num;
    return false;
};