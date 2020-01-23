require('jquery.scrollex');

var app = {
  init: function() {
    console.log('init');
    app.watchSection();
  },

  watchSection: function() {
    $('#intro').scrollex({
      mode: 'middle',
      enter: function () {
        $('.navbar__item__link[href="#intro"]').addClass('active');
      },
      leave: function () {
        $('.navbar__item__link[href="#intro"]').removeClass('active');
      }
    });

    $('#articles').scrollex({
      mode: 'middle',
      enter: function () {
        $('.navbar__item__link[href="#articles"]').addClass('active');
      },
      leave: function () {
        $('.navbar__item__link[href="#articles"]').removeClass('active');
      }
    });

    $('#counters').scrollex({
      mode: 'middle',
      enter: function () {
        $('.navbar__item__link[href="#counters"]').addClass('active');
      },
      leave: function () {
        $('.navbar__item__link[href="#counters"]').removeClass('active');
      }
    });
  }
};

$(app.init);
