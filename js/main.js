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

    $(".toggler").click(function(event){
        event.preventDefault();
        if ( $(this).hasClass("open") ) {

            $('.hiddennav').animate({
               right: "-300px"
            }, 500, function(){
               $('.toggle').animate({
                   right: '2%'
               }, 200);
            });

        } else {
            
            $('.toggle').animate({
                right: '26%'
            }, 500, function(){
                $('.hiddennav').animate({
                    right: '0'
                }, 200);
                $('.subpage-menu').css('background', 'rgba(84, 84, 84, 1)');
            });

        }
        $(this).toggleClass("open");
        return false;
    });

    $('.closer').on('click', function(){
        $('.hiddennav').animate({
           right: "-300px"
        }, 500, function(){
           $('.toggle').animate({
               right: '2%'
           }, 200);
        });
    });

    $(document).bind('keydown',function(e){
          if ( e.which == 27 ) {
                      
             $('.hiddennav').animate({
                right: "-300px"
             }, 500, function(){
                $('.toggle').animate({
                    right: '2%'
                }, 200);
             });
          };
    });
});