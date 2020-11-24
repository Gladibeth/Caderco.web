// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $("#logo").addClass('img-size').attr('src', 'assets/img/CADERCO.svg').removeClass('scroll-up');
    $('.js-navbar-fixed').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('hr').addClass('delete-line');
    $('.language-ul').addClass('delete-language');


  }
  else {
    $("#logo").addClass('img-size').attr('src', 'assets/img/CADERCO_BLANCO.svg').removeClass('scroll-up');
    $('.js-navbar-fixed').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('hr').removeClass('delete-line');
    $('.language-ul').removeClass('delete-language');


  }
});


$(window).scroll(function () {
  if ($(document).scrollTop() > 540 && ($(window).width() >= 768)) {

    $('.redes-sociales').addClass('redes-js');
    $('.redes-sociales').addClass('fadeIn');
    $('.redes-sociales').addClass('wow');
  }
  else {

    $('.redes-sociales').removeClass('redes-js');
    $('.redes-sociales').removeClass('fadeIn');


  }
});