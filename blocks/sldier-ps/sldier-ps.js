intFunc = function () {
  //slider slider-ps
  jQuery(".slider-ps__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    infinite: false,
    swipe: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });
};
if (window.acf) {
  acf.addAction("render_block_preview/type=sldier-ps", intFunc);
} else {
  intFunc();
}