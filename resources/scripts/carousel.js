document.addEventListener('DOMContentLoaded', () => {
  const swiperConfigs = [
    { container: '.swiper-container-content-cards', autoplay: true },
    { container: '.swiper-container-news', navigation: true },
    { container: '.swiper-container-featured-image', autoplay: true, pagination: true, numSlidesMobile: 1, numSlidesDesktop: 1 },
  ];

  swiperConfigs.forEach((config) => {
    const defaultSwiperOptions = {
      slidesPerView: 3,
      spaceBetween: 14,
      breakpoints: {
        0: { slidesPerView: config.numSlidesMobile || 1 },
        640: { slidesPerView: config.numSlidesMobile || 2 },
        1024: { slidesPerView: config.numSlidesDesktop || 3 },
      },
    };

    config.autoplay ? defaultSwiperOptions.autoplay = { delay: 8000 } : null;
    config.navigation ? defaultSwiperOptions.navigation = {nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev"} : null;
    config.pagination ? defaultSwiperOptions.pagination = {el: ".swiper-pagination",clickable: true } : null;

    new Swiper(config.container, defaultSwiperOptions);
  });
});