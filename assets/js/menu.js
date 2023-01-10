$(document).ready(function () {
  $('.hidden-blocks > div, .hidden-blocks > .menu-item-has-children').on('click', function () {
    $(this).parents('.hidden-blocks').find('.menu-item-has-children').removeClass('isOpened');
    $(this).toggleClass('isOpened');
  });

  $('.burger-block').on('click', function () {
    $('.burger').toggleClass('active');

    if ($(window).width() < 1280) {
      $('.menu-mobile').toggleClass('hidden');
      $('.menu-mobile').toggleClass('block');
    } else {
      $('.menu-desktop').toggleClass('hidden');
      $('.menu-desktop').toggleClass('block');
      if ($('#burger-text').text() == "Plus") {
        $('#burger-text').text('Moins');
      } else {
        $('#burger-text').text('Plus');
      }
    }
  });

  $('.menu-header-droite .menu-item-has-children a').on('click', function () {
    $('.menu-header-droite .menu-item-has-children a').removeClass('open-submenu');
    $(this).addClass('open-submenu');
  });
});