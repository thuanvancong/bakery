/**
 * Init Swiper
 */
(function($) {
  if ( typeof Swiper !== "undefined" ) {
    const swiper = new Swiper('.swiper', {
      slidesPerView: 1.3,
      spaceBetween: 12,
      centeredSlides: true,
      autoplay: {
        delay: 3200,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      followFinger: false,
      breakpoints: {
        768: {
          slidesPerView: 2.3,
          spaceBetween: 30,
        },
      },
    });
  }
}(jQuery));