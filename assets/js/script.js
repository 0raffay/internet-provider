$(document).ready(function () {
  sliders();
  header();

  $("input[type='tel'], input[type='number']").on("keyup", function () {
    var regex = /^[1-9][0-9]*$/;

    if (!regex.test($(this).val())) {
      $(this).val($(this).val().replace(/[^1-9]/g, ''));
    }
  });
});


function header() {
  let stickyElement = ".bottomHeader";
  let stickyClass = "header-fixed";

  let stickyOffset = $(stickyElement).offset().top;
  $(document).scroll(function () {
    var sticky = $(stickyElement),
      scroll = $(window).scrollTop();
    if (scroll >= stickyOffset) sticky.addClass(stickyClass);
    else sticky.removeClass(stickyClass);
  });

  let burgerButton = $('.burgerButton')
  let mobileMenu = $('.rfMobileMenu')
  let closeButton = $('.rfMobileMenuClose')
  burgerButton.click(function () {
    mobileMenu.toggleClass('active')
  })

  closeButton.click(function () {
    mobileMenu.removeClass('active')
  })
  tabbingByTarget({
    buttonAttr: "mobile-button-accordion",
    targetAttr: "mobile-button-accordion-target",
    nothingOnActive: false,
    initialHideAll: true,
  })
}


function sliders() {
  $(".blogSlider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false, responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  })

  $(".testimonialSlider").slick({
    speed: 300,
    arrows: true,
    nextArrow: $(".testimonialSliderButtons .next"),
    prevArrow: $(".testimonialSliderButtons .prev"),
  })
}