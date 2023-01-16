$(document).ready(function () {
  $('header').height();
  $('.header-open-menu').height($('header').height());

  $('.burger-block').on('click', function () {
    $('.burger').toggleClass('active');

    $('.menu').toggleClass('active');
    $('.menu-block').toggleClass('active');
  });
});