/*eslint no-console: ["error", { allow: ["log"] }] */

export default {
  init() {
    const timerCycle = 10000;

    const numOfSlides = $('.slider-image').length;
    let slideNum = 1;

    // Set home slider height for the first hero image
    const imgHeight = $('.slider-image:first-of-type img').height();
    $('.home-slider').css({'height': imgHeight + 'px', 'width': '100%'});

    // Set each slider image horizontally
    $('.slider-image').each(function(index) {
      const leftPos = $(window).outerWidth() * index;
      $(this).css({'transform': 'translateX(' + leftPos + 'px)'});
    });

    setTimeout(function() {
      $('.slider-image').each(function() {
        $(this).css({'visibility': 'visible'});
      });
      moveHeroLeft();
    }, timerCycle);

    function moveHeroLeft() {

      const timer = setTimeout(function() {
        moveHeroLeft();
      }, timerCycle);

      if(slideNum === numOfSlides) {
        clearTimeout(timer);
        moveHeroRight();
        return;
      }

      $('.slider-image').each(function() {
        const currTrans = $(this).css('transform').split(/[()]/)[1];
        const leftPos = currTrans.split(',')[4];
        const browserWidth = $(window).outerWidth();
        const newPos = leftPos - browserWidth;

        $(this).css({'transform': 'translateX(' + newPos + 'px)'});
      });
      slideNum++;
    }

    function moveHeroRight() {

      const timer = setTimeout(function() {
        moveHeroRight();
      }, timerCycle);

      if(slideNum === 1) {
        clearTimeout(timer);
        moveHeroLeft();
        return;
      }

      $('.slider-image').each(function() {
        const currTrans = $(this).css('transform').split(/[()]/)[1];
        const leftPos = currTrans.split(',')[4];
        const browserWidth = $(window).outerWidth();
        const newPos = parseInt(leftPos) + parseInt(browserWidth);

        $(this).css({'transform': 'translateX(' + newPos + 'px)'});
      });
      slideNum--;
    }

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
