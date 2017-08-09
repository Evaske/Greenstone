/*eslint no-console: ["error", { allow: ["log"] }] */

export default {
  init() {

    let timer;
    const numOfSlides = $('.slider-image').length;
    let direction = 'left';

    (function () {
      let width = $(window).width();

      setInterval(function () {
        if ($(window).width() !== width) {
          width = $(window).width();
          $(window).trigger('resolutionchange');
        }
      }, 50);
    }());

    $(window).bind('resolutionchange', function(){
      clearInterval(timer);
      $('.slider-image').css({'transition':'left 0 linear'}).removeClass('active');
      setup();
      direction = 'left';
      timeStart();
    });

    function setup() {
      // Set each slider image horizontally
      $('.slider-image').each(function(index) {

        if(index == 0) {
          $(this).addClass('active');
        }

        const leftPos = $(window).outerWidth() * index;
        $(this).css({'left': leftPos + 'px'});
      });
    }

    setup();

    // Initial movement timer
    function timeStart() {

      setTimeout(function() {
        $('.slider-image').css({'transition':'left 1s linear'});
      }, 1000);

      timer = setInterval(function() {
        if(direction === 'left') {
          slideLeft();
        } else {
          slideRight();
        }

        const selectedNumber = $('.slider-image.active').attr('data-number');
        if(selectedNumber == 0) {
          direction = 'left';
        }

        if(selectedNumber == (numOfSlides - 1)) {
          direction = 'right';
        }
      }, 2000);
    }

    timeStart();

    function slideLeft() {
      $('.slider-image').each(function() {
        const currentLeft = $(this).position().left;
        const newLeft = currentLeft - $(window).outerWidth();
        $(this).css({'left': newLeft + 'px'});
      });
      $('.slider-image.active').removeClass('active').next().addClass('active');
    }

    function slideRight() {
      $('.slider-image').each(function() {
        const currentLeft = $(this).position().left;
        const newLeft = currentLeft + $(window).outerWidth();
        $(this).css({'left': newLeft + 'px'});
      });
      $('.slider-image.active').removeClass('active').prev().addClass('active');
    }


  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
