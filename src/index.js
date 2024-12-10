(function () {
  console.log('ready');
  const burger = jQuery(".burger"),
    body = jQuery('body'),
    burgerSpan = jQuery(".burger span"),
    nav = jQuery('.header__nav'),
    modal = jQuery('#videoModal'),
    openButton = jQuery('.open-video'),
    closeButton = jQuery('.close'),
    videoIframe = jQuery('#videoIframe');

  burger.on("click", function () {
    burgerSpan.toggleClass("active");
    nav.toggleClass("active");
    body.toggleClass("fixed-page");
  });

  function mobNavMenu() {
    jQuery(".menu-item-has-children a").on("click", function (e) {

      console.log(jQuery(e.target));
      jQuery(e.target).siblings("ul .sub-menu").slideToggle(500);

      if (
        jQuery(e.target)
          .parent()
          .children()
          .siblings("ul .sub-menu")
          .css("display") == "block"
      ) {
        jQuery(e.target)
          .parent()
          .siblings()
          .children("ul .sub-menu")
          .slideUp(500);

        jQuery(e.target)
          .parent()
          .siblings()
          .children("a")
          .removeClass("active");
      }


      if (!jQuery(this).parent().hasClass("active")) {
        jQuery(this).parent().toggleClass("active");
        jQuery(this).parent().siblings('.menu-item-has-children.active').toggleClass("active");
      } else {
        jQuery(this).parent().removeClass("active");

      }
    });
  }
  if (jQuery(window).width() < 1200) {
    mobNavMenu();
  }
  //Video
  openButton.on("click", function () {
    const videoUrl = jQuery(this).attr('data-video-url');
    videoIframe.attr('src', videoUrl);
    modal.css('display', 'block');
    body.toggleClass("fixed-page");
  });

  closeButton.on("click", function () {
    modal.css('display', 'none');
    videoIframe.attr('src', ''); // Stop the video when the modal is closed
    body.toggleClass("fixed-page");
  });

  window.onclick = function (event) {
    if (event.target.id === 'videoModal') {
      modal.css('display', 'none');
      body.removeClass("fixed-page");
      videoIframe.src = ''; // Stop the video when clicking outside the modal
    }
  };

  if (jQuery(window).width() < 992) {
    footerAccordionMenu()
  }

  function footerAccordionMenu() {
    jQuery('.footer__investor h6').on('click', function (e) {
      jQuery(e.target).siblings('.footer__investor_items').slideToggle(500)
      if (jQuery(e.target).parent().children().siblings('.footer__investor_items').css('display') == 'block') {
        jQuery(e.target).parent().siblings().children('.footer__investor_items').slideUp(500)
        jQuery(e.target).parent().siblings().removeClass('active')
      }

      if (!jQuery(e.target).parent().hasClass('active')) {
        jQuery(e.target).parent().addClass('active')
      } else {
        jQuery(e.target).parent().removeClass('active')
      }
    })
  }

  setTimeout(function () {
    if (getCookie('popupCookie') != 'submited') {
      jQuery('.cookies').css("display", "block").hide().fadeIn(2000);
    }

    jQuery('a.submit').click(function () {
      jQuery('.cookies').fadeOut();
      //sets the coookie to five minutes if the popup is submited (whole numbers = days)
      setCookie('popupCookie', 'submited', 7);
    });
  }, 5000);

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

})(jQuery);