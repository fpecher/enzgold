//main.js

$(document).ready(function() {
    
    window.sr = new scrollReveal();

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

    //Header fixed
    $(window).scroll(function(){
        var fromTopPx = 70; // distance to trigger
        var scrolledFromtop = $(window).scrollTop();
        if(scrolledFromtop > fromTopPx){
            $('header').addClass('scrolled');
        }else{
            $('header').removeClass('scrolled');
        }
    });

    $(window).scroll(function(){
        var fromTopPx = 1; // distance to trigger
        var scrolledFromtop = $(window).scrollTop();
        if(scrolledFromtop > fromTopPx){
            $('.subpage-menu').slideDown();
        }else{
            $('.subpage-menu').slideUp();
        }
    });


    //Metanav show and hide
    $(window).scroll(function(){
        var fromTopPx = 140; // distance to trigger
        var scrolledFromtop = $(window).scrollTop();
        if(scrolledFromtop > fromTopPx){
            $('.metanav').animate({
                right: '0'
            }, 500);
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



// /**
//  * main.js
//  * http://www.codrops.com
//  *
//  * Licensed under the MIT license.
//  * http://www.opensource.org/licenses/mit-license.php
//  * 
//  * Copyright 2014, Codrops
//  * http://www.codrops.com
//  */
// (function() {

//     var bodyEl = document.body,
//         content = document.querySelector( '.content-wrap' ),
//         openbtn = document.getElementById( 'open-button' ),
//         closebtn = document.getElementById( 'close-button' ),
//         isOpen = false;

//     function init() {
//         initEvents();
//     }

//     function initEvents() {
//         openbtn.addEventListener( 'click', toggleMenu );
//         if( closebtn ) {
//             closebtn.addEventListener( 'click', toggleMenu );
//         }

//         // close the menu element if the target it´s not the menu element or one of its descendants..
//         content.addEventListener( 'click', function(ev) {
//             var target = ev.target;
//             if( isOpen && target !== openbtn ) {
//                 toggleMenu();
//             }
//         } );
//     }

//     function toggleMenu() {
//         if( isOpen ) {
//             classie.remove( bodyEl, 'show-menu' );
//         }
//         else {
//             classie.add( bodyEl, 'show-menu' );
//         }
//         isOpen = !isOpen;
//     }

//     init();

// })();