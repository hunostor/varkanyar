$(document).ready(function () {
	$('body').vegas({
    delay: 19000,
    transition: 'random',
    transitionDuration: 15000,
    slides: [
        { src: 'KEPEK/1.jpg' },
        { src: 'KEPEK/2.jpg' },
        { src: 'KEPEK/3.jpg' },
        { src: 'KEPEK/4.jpg' },
        { src: 'KEPEK/5.jpg' },
        { src: 'KEPEK/6.jpg' },
        { src: 'KEPEK/7.jpg' },
        { src: 'KEPEK/8.jpg' },
        { src: 'KEPEK/9.jpg' }
       ],
       overlay: "overlays/03.png",
       transition: [ 'swirlLeft2', 'zoomOut','swirlRight2', 'swirlLeft','swirlRight', 'zoomOut2' ],
       animation: 'random'
      }); 
});
