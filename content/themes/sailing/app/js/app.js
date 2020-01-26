require('jquery.scrollex');

var app = {
  init: function() {
    console.log('init');

    var rellax = new Rellax('.header__title', {
      speed: 3
    });

    $('.page > *[id]').each(function () {
      var id = $(this).attr('id');

      $(this).scrollex({
        mode: 'middle',
        enter: function () {
          app.handleEnterElement(id);
        },
        leave: function () {
          app.handleLeaveElement(id);
        }
      });
    });

    $('.navbar__item__link[href*="#"]:not([href="#"])').on('click', app.handleLinksClick)
  },

  handleEnterElement: function (element_id) {
    $('.navbar__item__link[href="#' + element_id + '"]').addClass('active');
  },

  handleLeaveElement: function (element_id) {
    $('.navbar__item__link[href="#' + element_id + '"]').removeClass('active');
  },

  handleLinksClick: function (event) {
    var clickedElement = event.target;
    var target = $(clickedElement.hash);

    if (target.length) {
      var targetPosition = target.offset().top;
      $('html, body').animate({
        'scrollTop': targetPosition
      }, 700);
    }
  }
};

$(app.init);
