//main.js

$(document).ready(function() {
    $(".item").hover(function () {
        $(this).find(".pv-hover").fadeToggle(500);
    });
    
    $('.cd-single-point').children('a').on('click', function(){
    	var selectedPoint = $(this).parent('li');
    	if( selectedPoint.hasClass('is-open') ) {
    		selectedPoint.removeClass('is-open').addClass('visited');
    	} else {
    		selectedPoint.addClass('is-open').siblings('.cd-single-point.is-open').removeClass('is-open').addClass('visited');
    	}
    });
    //close interest point description
    $('.cd-close-info').on('click', function(event){
    	event.preventDefault();
    	$(this).parents('.cd-single-point').eq(0).removeClass('is-open').addClass('visited');
    });

    $(window).scroll(function(){
        var fromTopPx = 70; // distance to trigger
        var scrolledFromtop = $(window).scrollTop();
        if(scrolledFromtop > fromTopPx){
            $('header').addClass('scrolled');
        }else{
            $('header').removeClass('scrolled');
        }
    });

    $('.toggler').on('click', function(){
        $('#menu-mobile-subpage').fadeToggle();
    });

});