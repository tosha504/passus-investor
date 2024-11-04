intFunc = function () {
  //slider slider-ps
  jQuery(".carousel-ps__slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    infinite: false,
    swipe: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },

    ]
  });
};
if (window.acf) {
  acf.addAction("render_block_preview/type=carousel-ps", intFunc);
} else {
  intFunc();
}