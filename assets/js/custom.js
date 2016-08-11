/*=============================================================
    Authour URL: www.designbootstrap.com
    
    http://www.designbootstrap.com/

    License: MIT

    http://opensource.org/licenses/MIT

    100% Free To use For Personal And Commercial Use.

    IN EXCHANGE JUST TELL PEOPLE ABOUT THIS WEBSITE
   
========================================================  */

$(document).ready(function () {

/*====================================
SCROLLING SCRIPTS
======================================*/

$('.scroll-me a').bind('click', function (event) { //just pass scroll-me in design and start scrolling
var $anchor = $(this);
$('html, body').stop().animate({
scrollTop: $($anchor.attr('href')).offset().top
}, 1200, 'easeInOutExpo');
event.preventDefault();
});


/*====================================
SLIDER SCRIPTS
======================================*/


$('#carousel-slider').carousel({
interval: 8000 //TIME IN MILLI SECONDS
});


/*====================================
VAGAS SLIDESHOW SCRIPTS
======================================*/
// $.vegas('slideshow', 
// {backgrounds: [
// { src: 'KEPEK/1.jpg', delay: 11100 , fade: 3000 },
// { src: 'KEPEK/2.jpg', fade: 3000, delay: 11000 },
// { src: 'KEPEK/3.jpg', fade: 3000, delay: 11000 },
// { src: 'KEPEK/4.jpg', fade: 3000, delay: 11000 },
// { src: 'KEPEK/5.jpg', fade: 3000, delay: 11000 },
// { src: 'KEPEK/6.jpg', fade: 3000, delay: 11000 },
// { src: 'KEPEK/7.jpg', fade: 3000, delay: 11000 },
// { src: 'KEPEK/8.jpg', fade: 3000, delay: 11000 },
// ]
// }
// )('overlay');


/*====================================
POPUP IMAGE SCRIPTS
======================================*/
$('.fancybox-media').fancybox({
openEffect: 'elastic',
closeEffect: 'elastic',
helpers: {
title: {
type: 'inside'
}
}
});


/*====================================
FILTER FUNCTIONALITY SCRIPTS
======================================*/
$(window).load(function () {
var $container = $('#work-div');
$container.isotope({
filter: '*',
animationOptions: {
duration: 750,
easing: 'linear',
queue: false
}
});
$('.caegories a').click(function () {
$('.caegories .active').removeClass('active');
$(this).addClass('active');
var selector = $(this).attr('data-filter');
$container.isotope({
filter: selector,
animationOptions: {
duration: 750,
easing: 'linear',
queue: false
}
});
return false;
});

});



/*====================================
WRITE YOUR CUSTOM SCRIPTS BELOW
======================================*/







});
