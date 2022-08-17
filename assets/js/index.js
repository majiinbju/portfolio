function fontResize(){
    var perc = parseInt($(window).width())/125;
    $('body').css('font-size',perc);
}

$(document).ready(function (){
    fontResize();
});

$(window).resize(function () {
    fontResize();
});
