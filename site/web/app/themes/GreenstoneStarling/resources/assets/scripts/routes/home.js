/*eslint no-console: ["error", { allow: ["log"] }] */

export default {
  init() {
    // JavaScript to be fired on the home page
    const numberOfReviews = $('.review').length;

    let direction = 'right';

    $('.review').each(function(index) {
      const width = $(this).outerWidth();
      const left = (index * width) + (index * 30);
      $(this).css({'left': left + 'px'});
      $(this).attr('data-count', index);
    });

    var moveReviews = function() {

      if(direction === 'right') {
        reviewRight();
      } else {
        reviewLeft();
      }

      const selectedNumber = $('.review.selected').attr('data-count');

      console.log(selectedNumber);

      if(selectedNumber == 0) {
        direction = 'left';
      }

      if(selectedNumber == (numberOfReviews - 1)) {
        direction = 'right';
      }
    }

    var reviewRight = function() {
      $('.review').each(function() {

        const left = $(this).position().left;
        const width = $(this).outerWidth();
        const newLeft = width + 30 + left;

        let top = $(this).position().top;

        if(top === 30) {
          top = 60;
        } else if(top === 60) {
          top = 30;
        }

        $(this).css({'left': newLeft + 'px', 'top' : top + 'px'});
      });

    $('.review.selected').removeClass('selected').prev().addClass('selected');
  }


    var reviewLeft = function() {
      $('.review').each(function() {

        const left = $(this).position().left;
        const width = $(this).outerWidth();
        const newLeft = left - 30 - width;

        let top = $(this).position().top;

        if(top === 30) {
          top = 60;
        } else if(top === 60) {
          top = 30;
        }

        $(this).css({'left': newLeft + 'px', 'top' : top + 'px'});
      });

        $('.review.selected').removeClass('selected').next().addClass('selected');
      }



    setInterval(moveReviews, 5000);

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
