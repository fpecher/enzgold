//main.js

$(document).ready(function() {
    $(".item").hover(function () {
        $(this).find(".pv-hover").fadeToggle(500);
    })
})

$(document).ready(function () {

    $(".player").mb_YTPlayer();

});