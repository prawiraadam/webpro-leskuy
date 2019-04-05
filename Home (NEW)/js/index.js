var options = {
  accessibility: true,
  prevNextButtons: true,
  pageDots: true,
  setGallerySize: false,
  arrowShape: {
    x0: 10,
    x1: 60,
    y1: 50,
    x2: 60,
    y2: 45,
    x3: 15
  }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function () {
  flkty.slides.forEach(function (slide, i) {
    var image = slides[i];
    var x = (slide.target + flkty.x) * -1/3;
    image.style.backgroundPosition = x + 'px';
  });
});

//Parallax Effect on Mouse Move
 $(window).mousemove(function(e) {
    var change;
    var xpos=e.clientX;var ypos=e.clientY;var left= change*20;
    var  xpos=xpos*2;ypos=ypos*2;
    $('.inner').css('right',(( 0+(xpos/300))+"px"));           
  });