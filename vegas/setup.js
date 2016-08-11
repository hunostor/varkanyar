$(document).ready(function () {
	$('body').vegas({
    delay: 19000,
    transition: 'random',
    transitionDuration: 15000,
    slides: [
        { src: 'kepek/1.jpg' },
        { src: 'kepek/2.jpg' },
        { src: 'kepek/3.jpg' },
        { src: 'kepek/4.jpg' },
        { src: 'kepek/5.jpg' },
        { src: 'kepek/6.jpg' },
        { src: 'kepek/7.jpg' },
        { src: 'kepek/8.jpg' },
        { src: 'kepek/9.jpg' }
       ],
       overlay: "overlays/03.png",
       transition: [ 'swirlLeft2', 'zoomOut','swirlRight2', 'swirlLeft','swirlRight', 'zoomOut2' ],
       animation: 'random'
      }); 
});
