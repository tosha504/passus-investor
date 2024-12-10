intFunc = function () {
  jQuery(document).on('click', '.technologies-list a', function (e) {
    e.preventDefault();

    const filterTag = jQuery(this).data('filter');
    if (jQuery(e.target).hasClass('button__outline')) {
      jQuery(e.target).removeClass('button__outline')
        .addClass('button__primary')
    }
    console.log(jQuery(e.target).parent().siblings().children().removeClass('button__primary')
      .addClass('button__outline'));
    slider.slick('slickUnfilter');
    if (filterTag === '*') {
      slider.slick('slickFilter', function () {
        return true;
      });
    } else {
      slider.slick('slickFilter', function () {
        return jQuery(this).data('tag') === filterTag;
      });
    }
    slider.slick('refresh');
  })

  const slider = jQuery('.recordings-filters-ps__items').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    infinite: false,
    swipe: true,
    responsive: [{
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
  acf.addAction("render_block_preview/type=recordings-filters-ps", intFunc);
} else {
  intFunc();
}