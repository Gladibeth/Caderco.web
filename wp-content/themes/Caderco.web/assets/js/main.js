


//navbar
let activeOne = $('#navbarNav').find('a.nav-link.active');

$(window).on('activate.bs.scrollspy', function (e, obj) {
  activeOne = $('#navbarNav').find('a.nav-link.active');
});

$('a.nav-link').hover(function () {
  activeOne.removeClass('active')
  $(this).addClass('active')
}, function () {
  console.log('hover out')
  $(this).removeClass('active')
  activeOne.addClass('active')
})

// Menú responsive
$(function () {
  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open');
    $('body').toggleClass('offcanvas-expanded');
  })
})


$(".hamburger").on("click", function () {
  $(this).toggleClass("is-active");
});

$('.nav-link').click(function () {
  $('.offcanvas-collapse').removeClass('open');
  $('.hamburger').toggleClass('is-active');
  $('body').removeClass('offcanvas-expanded');
})




// change language
let navLanguage = $('.nav-language').find('a.language')

$('.language').click(function () {
  if (navLanguage.hasClass('active')) {
    navLanguage.toggleClass('active');
  }
});

// filter projects
$('.grid').isotope({
  itemSelector: '.grid-item',
});

// filter items on button click
$('.filter-button-group').on('click', 'li', function () {
  var filterValue = $(this).attr('data-filter');
  $('.grid').isotope({ filter: filterValue });
  $('.filter-button-group li ').removeClass('active');
  $(this).addClass('active');
});



/* Check the location of each element */
$('.content').each(function (i) {

  var bottom_of_object = $(this).offset().top + $(this).outerHeight();
  var bottom_of_window = $(window).height();

  if (bottom_of_object > bottom_of_window) {
    $(this).addClass('hidden');
  }
});
$(window).scroll(function () {
  /* Check the location of each element hidden */
  $('.hidden').each(function (i) {

    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
    var bottom_of_window = $(window).scrollTop() + $(window).height();

    /* If the object is completely visible in the window, fadeIn it */
    if (bottom_of_window > bottom_of_object) {
      $(this).animate({ 'opacity': '1' }, 700);
    }
  });
});


// counter up

$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  var position = $('#counter').scrollTop()
  // console.log(scroll);

  if (scroll >= position) {
    $('.counter').each(function () {
      var $this = $(this),
        countTo = $this.attr('data-count');

      $({ countNum: $this.text() }).animate({
        countNum: countTo
      },
        {
          duration: 3000,
          easing: 'linear',
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
            //alert('finished');
          }
        });
    });
  }
});

// carousel single project

$('.slider-projects').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  fade: true,
  autoplay: true,
  autoplaySpeed: 2000,
});


$('.team-carousel').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 1000
      }
    }
  ]
});
