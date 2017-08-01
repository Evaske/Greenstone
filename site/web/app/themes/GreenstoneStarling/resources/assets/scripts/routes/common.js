/*eslint no-console: ["error", { allow: ["log"] }] */

export default {
  init() {
    // JavaScript to be fired on all pages

    function reviews() {
      const numberOfReviews = $('.review').length;
      let direction = 'right';

      // Only run if desktop
      if($(window).width() > 1200) {
        $('.review').each(function(index) {

          if(index == 1) {
            $(this).addClass('selected');
          }

          const width = $(this).outerWidth();
          const left = (index * width) + (index * 30);
          $(this).css({'left': left + 'px'});
          $(this).attr('data-count', index);
        });
      }

      var moveReviews = function() {

        if(direction === 'right') {
          slideReview('right');
        } else {
          slideReview('left');
        }

        const selectedNumber = $('.review.selected').attr('data-count');

        if(selectedNumber == 0) {
          direction = 'left';
        }

        if(selectedNumber == (numberOfReviews - 1)) {
          direction = 'right';
        }
      };

      function slideReview(direction) {
        $('.review').each(function() {

          const left = $(this).position().left;
          const width = $(this).outerWidth();
          let newLeft;

          if(direction === 'right') {
            newLeft = width + 30 + left;
          } else {
            newLeft = left - 30 - width;
          }

          let top = $(this).position().top;

          if(top === 30) {
            top = 60;
          } else if(top === 60) {
            top = 30;
          }

          $(this).css({'left': newLeft + 'px', 'top' : top + 'px'});
        });

        if(direction === 'right') {
          $('.review.selected').removeClass('selected').prev().addClass('selected');
        } else {
          $('.review.selected').removeClass('selected').next().addClass('selected');
        }
      }

      if(numberOfReviews > 3 && $(window).width() > 1200) {
        setInterval(moveReviews, 5000);
      }
    }

    function scrollButtons() {
      $('.js-button-scroll').on('click', function() {
        const scrollTo = '.' + $(this).data('scrollto');
        const offset = $(scrollTo).offset().top;
        $('html, body').animate({ scrollTop: offset }, 1000);
      });
    }

    function mobileNav() {
      $('.js-mobile-nav').on('click', function() {
        if($('.js-mobile-menu').hasClass('open')) {
          $('.js-mobile-menu').animate({'top':'-200px'}).removeClass('open');
        } else {
          $('.js-mobile-menu').animate({'top':'70px'}).addClass('open');
        }
      });
    }

    reviews();
    scrollButtons();
    mobileNav();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
