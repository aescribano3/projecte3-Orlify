$(document).ready(function () {
    if ($.cookie('acceptCookies') == null) {
        $('#cookie-notification').show();
    } else {
        $('#cookie-notification').hide();
    }
    $("#accept-cookies").click(function () {
        $("#cookie-notification").slideUp("slow");
        $.cookie("acceptCookies", "2");
    });
});