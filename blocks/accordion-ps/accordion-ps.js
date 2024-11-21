intFunc = function () {
  jQuery(document).on('click', '.question', function (e) {
    if (!jQuery(e.target).hasClass('button__primary')) {
      if (jQuery(this).parent().siblings().children('div.answer').is(':visible')) {
        jQuery(this).parent().siblings().children('.question').removeClass('active')
        jQuery(this).parent().siblings().children('.question').children('button').removeClass('active')
        jQuery(this).parent().siblings().children('div.answer').slideUp(200);
      }
      jQuery(this).toggleClass('active')
      jQuery(this).children('button').toggleClass('active')
      jQuery(this).siblings('div.answer').slideToggle(200)
    }
  })
};
if (window.acf) {
  acf.addAction("render_block_preview/type=accordion-ps", intFunc);
} else {
  intFunc();
}