/*eslint no-console: ["error", { allow: ["log"] }] */

export default {
  init() {

    const numberOfReviews = $('.review').length;
    let direction = 'right';

    // Only run if not mobile
    if($(window).width() > 415) {
      $('.review').each(function(index) {
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
        const width = $(this).outerWidth;
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

    if(numberOfReviews > 3) {
      setInterval(moveReviews, 5000);
    }

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
