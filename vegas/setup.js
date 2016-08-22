$(document).ready(function () {
    // var w == a bongeszo szelessege pixelben
    var w = window.innerWidth;
    if (w > 600) { // 600 pixel felett ez a blokk hajtodik vegre
    	$('body').vegas({
        delay: 19000,
        transition: 'fade',
        transitionDuration: 2000,
        slides: [
            { src: 'kepek/banner/1.jpg', delay: '5000', transition: 'fade' },
            { src: 'kepek/banner/2.jpg' },
            { src: 'kepek/banner/3.jpg' },
            { src: 'kepek/banner/4.jpg' },
            { src: 'kepek/banner/5.jpg' },
            { src: 'kepek/banner/6.jpg' },
            { src: 'kepek/banner/7.jpg' },
            { src: 'kepek/banner/8.jpg' }

           ],
           animation: 'random'
          });
    } else {
        $('body').vegas({
        slides: [
            { src: 'kepek/banner/1.jpg',},
           ],
          });
    }
});
