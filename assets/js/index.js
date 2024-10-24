/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ (() => {

eval("(function () {\n  console.log('ready');\n  var burger = jQuery(\".burger\"),\n    burgerSpan = jQuery(\".burger span\"),\n    nav = jQuery('.header__nav'),\n    body = jQuery('body');\n  burger.on(\"click\", function () {\n    burgerSpan.toggleClass(\"active\");\n    nav.toggleClass(\"active\");\n    body.toggleClass(\"fixed-page\");\n  });\n  if (jQuery(window).width() < 992) {\n    footerAccordionMenu();\n  }\n  function footerAccordionMenu() {\n    jQuery('.footer__investor h6').on('click', function (e) {\n      jQuery(e.target).siblings('.footer__investor_items').slideToggle(500);\n      if (jQuery(e.target).parent().children().siblings('.footer__investor_items').css('display') == 'block') {\n        jQuery(e.target).parent().siblings().children('.footer__investor_items').slideUp(500);\n        jQuery(e.target).parent().siblings().removeClass('active');\n      }\n      if (!jQuery(e.target).parent().hasClass('active')) {\n        jQuery(e.target).parent().addClass('active');\n      } else {\n        jQuery(e.target).parent().removeClass('active');\n      }\n    });\n  }\n  setTimeout(function () {\n    if (getCookie('popupCookie') != 'submited') {\n      jQuery('.cookies').css(\"display\", \"block\").hide().fadeIn(2000);\n    }\n    jQuery('a.submit').click(function () {\n      jQuery('.cookies').fadeOut();\n      //sets the coookie to five minutes if the popup is submited (whole numbers = days)\n      setCookie('popupCookie', 'submited', 7);\n    });\n  }, 5000);\n  function getCookie(cname) {\n    var name = cname + \"=\";\n    var ca = document.cookie.split(';');\n    for (var i = 0; i < ca.length; i++) {\n      var c = ca[i];\n      while (c.charAt(0) == ' ') {\n        c = c.substring(1);\n      }\n      if (c.indexOf(name) == 0) {\n        return c.substring(name.length, c.length);\n      }\n    }\n    return \"\";\n  }\n  function setCookie(cname, cvalue, exdays) {\n    var d = new Date();\n    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);\n    var expires = \"expires=\" + d.toUTCString();\n    document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";\n  }\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwiYnVyZ2VyIiwialF1ZXJ5IiwiYnVyZ2VyU3BhbiIsIm5hdiIsImJvZHkiLCJvbiIsInRvZ2dsZUNsYXNzIiwid2luZG93Iiwid2lkdGgiLCJmb290ZXJBY2NvcmRpb25NZW51IiwiZSIsInRhcmdldCIsInNpYmxpbmdzIiwic2xpZGVUb2dnbGUiLCJwYXJlbnQiLCJjaGlsZHJlbiIsImNzcyIsInNsaWRlVXAiLCJyZW1vdmVDbGFzcyIsImhhc0NsYXNzIiwiYWRkQ2xhc3MiLCJzZXRUaW1lb3V0IiwiZ2V0Q29va2llIiwiaGlkZSIsImZhZGVJbiIsImNsaWNrIiwiZmFkZU91dCIsInNldENvb2tpZSIsImNuYW1lIiwibmFtZSIsImNhIiwiZG9jdW1lbnQiLCJjb29raWUiLCJzcGxpdCIsImkiLCJsZW5ndGgiLCJjIiwiY2hhckF0Iiwic3Vic3RyaW5nIiwiaW5kZXhPZiIsImN2YWx1ZSIsImV4ZGF5cyIsImQiLCJEYXRlIiwic2V0VGltZSIsImdldFRpbWUiLCJleHBpcmVzIiwidG9VVENTdHJpbmciXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vc3JjL2luZGV4LmpzP2EyOWQiXSwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uICgpIHtcclxuICBjb25zb2xlLmxvZygncmVhZHknKTtcclxuICBjb25zdCBidXJnZXIgPSBqUXVlcnkoXCIuYnVyZ2VyXCIpLFxyXG4gICAgYnVyZ2VyU3BhbiA9IGpRdWVyeShcIi5idXJnZXIgc3BhblwiKSxcclxuICAgIG5hdiA9IGpRdWVyeSgnLmhlYWRlcl9fbmF2JyksXHJcbiAgICBib2R5ID0galF1ZXJ5KCdib2R5Jyk7XHJcblxyXG4gIGJ1cmdlci5vbihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgIGJ1cmdlclNwYW4udG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XHJcbiAgICBuYXYudG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XHJcbiAgICBib2R5LnRvZ2dsZUNsYXNzKFwiZml4ZWQtcGFnZVwiKTtcclxuICB9KTtcclxuXHJcblxyXG4gIGlmIChqUXVlcnkod2luZG93KS53aWR0aCgpIDwgOTkyKSB7XHJcbiAgICBmb290ZXJBY2NvcmRpb25NZW51KClcclxuICB9XHJcblxyXG4gIGZ1bmN0aW9uIGZvb3RlckFjY29yZGlvbk1lbnUoKSB7XHJcbiAgICBqUXVlcnkoJy5mb290ZXJfX2ludmVzdG9yIGg2Jykub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgalF1ZXJ5KGUudGFyZ2V0KS5zaWJsaW5ncygnLmZvb3Rlcl9faW52ZXN0b3JfaXRlbXMnKS5zbGlkZVRvZ2dsZSg1MDApXHJcbiAgICAgIGlmIChqUXVlcnkoZS50YXJnZXQpLnBhcmVudCgpLmNoaWxkcmVuKCkuc2libGluZ3MoJy5mb290ZXJfX2ludmVzdG9yX2l0ZW1zJykuY3NzKCdkaXNwbGF5JykgPT0gJ2Jsb2NrJykge1xyXG4gICAgICAgIGpRdWVyeShlLnRhcmdldCkucGFyZW50KCkuc2libGluZ3MoKS5jaGlsZHJlbignLmZvb3Rlcl9faW52ZXN0b3JfaXRlbXMnKS5zbGlkZVVwKDUwMClcclxuICAgICAgICBqUXVlcnkoZS50YXJnZXQpLnBhcmVudCgpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpXHJcbiAgICAgIH1cclxuXHJcbiAgICAgIGlmICghalF1ZXJ5KGUudGFyZ2V0KS5wYXJlbnQoKS5oYXNDbGFzcygnYWN0aXZlJykpIHtcclxuICAgICAgICBqUXVlcnkoZS50YXJnZXQpLnBhcmVudCgpLmFkZENsYXNzKCdhY3RpdmUnKVxyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIGpRdWVyeShlLnRhcmdldCkucGFyZW50KCkucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpXHJcbiAgICAgIH1cclxuICAgIH0pXHJcbiAgfVxyXG5cclxuICBzZXRUaW1lb3V0KGZ1bmN0aW9uICgpIHtcclxuICAgIGlmIChnZXRDb29raWUoJ3BvcHVwQ29va2llJykgIT0gJ3N1Ym1pdGVkJykge1xyXG4gICAgICBqUXVlcnkoJy5jb29raWVzJykuY3NzKFwiZGlzcGxheVwiLCBcImJsb2NrXCIpLmhpZGUoKS5mYWRlSW4oMjAwMCk7XHJcbiAgICB9XHJcblxyXG4gICAgalF1ZXJ5KCdhLnN1Ym1pdCcpLmNsaWNrKGZ1bmN0aW9uICgpIHtcclxuICAgICAgalF1ZXJ5KCcuY29va2llcycpLmZhZGVPdXQoKTtcclxuICAgICAgLy9zZXRzIHRoZSBjb29va2llIHRvIGZpdmUgbWludXRlcyBpZiB0aGUgcG9wdXAgaXMgc3VibWl0ZWQgKHdob2xlIG51bWJlcnMgPSBkYXlzKVxyXG4gICAgICBzZXRDb29raWUoJ3BvcHVwQ29va2llJywgJ3N1Ym1pdGVkJywgNyk7XHJcbiAgICB9KTtcclxuICB9LCA1MDAwKTtcclxuXHJcbiAgZnVuY3Rpb24gZ2V0Q29va2llKGNuYW1lKSB7XHJcbiAgICB2YXIgbmFtZSA9IGNuYW1lICsgXCI9XCI7XHJcbiAgICB2YXIgY2EgPSBkb2N1bWVudC5jb29raWUuc3BsaXQoJzsnKTtcclxuICAgIGZvciAodmFyIGkgPSAwOyBpIDwgY2EubGVuZ3RoOyBpKyspIHtcclxuICAgICAgdmFyIGMgPSBjYVtpXTtcclxuICAgICAgd2hpbGUgKGMuY2hhckF0KDApID09ICcgJykge1xyXG4gICAgICAgIGMgPSBjLnN1YnN0cmluZygxKTtcclxuICAgICAgfVxyXG4gICAgICBpZiAoYy5pbmRleE9mKG5hbWUpID09IDApIHtcclxuICAgICAgICByZXR1cm4gYy5zdWJzdHJpbmcobmFtZS5sZW5ndGgsIGMubGVuZ3RoKTtcclxuICAgICAgfVxyXG4gICAgfVxyXG4gICAgcmV0dXJuIFwiXCI7XHJcbiAgfVxyXG5cclxuICBmdW5jdGlvbiBzZXRDb29raWUoY25hbWUsIGN2YWx1ZSwgZXhkYXlzKSB7XHJcbiAgICB2YXIgZCA9IG5ldyBEYXRlKCk7XHJcbiAgICBkLnNldFRpbWUoZC5nZXRUaW1lKCkgKyAoZXhkYXlzICogMjQgKiA2MCAqIDYwICogMTAwMCkpO1xyXG4gICAgdmFyIGV4cGlyZXMgPSBcImV4cGlyZXM9XCIgKyBkLnRvVVRDU3RyaW5nKCk7XHJcbiAgICBkb2N1bWVudC5jb29raWUgPSBjbmFtZSArIFwiPVwiICsgY3ZhbHVlICsgXCI7XCIgKyBleHBpcmVzICsgXCI7cGF0aD0vXCI7XHJcbiAgfVxyXG5cclxufSkoalF1ZXJ5KTsiXSwibWFwcGluZ3MiOiJBQUFBLENBQUMsWUFBWTtFQUNYQSxPQUFPLENBQUNDLEdBQUcsQ0FBQyxPQUFPLENBQUM7RUFDcEIsSUFBTUMsTUFBTSxHQUFHQyxNQUFNLENBQUMsU0FBUyxDQUFDO0lBQzlCQyxVQUFVLEdBQUdELE1BQU0sQ0FBQyxjQUFjLENBQUM7SUFDbkNFLEdBQUcsR0FBR0YsTUFBTSxDQUFDLGNBQWMsQ0FBQztJQUM1QkcsSUFBSSxHQUFHSCxNQUFNLENBQUMsTUFBTSxDQUFDO0VBRXZCRCxNQUFNLENBQUNLLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBWTtJQUM3QkgsVUFBVSxDQUFDSSxXQUFXLENBQUMsUUFBUSxDQUFDO0lBQ2hDSCxHQUFHLENBQUNHLFdBQVcsQ0FBQyxRQUFRLENBQUM7SUFDekJGLElBQUksQ0FBQ0UsV0FBVyxDQUFDLFlBQVksQ0FBQztFQUNoQyxDQUFDLENBQUM7RUFHRixJQUFJTCxNQUFNLENBQUNNLE1BQU0sQ0FBQyxDQUFDQyxLQUFLLENBQUMsQ0FBQyxHQUFHLEdBQUcsRUFBRTtJQUNoQ0MsbUJBQW1CLENBQUMsQ0FBQztFQUN2QjtFQUVBLFNBQVNBLG1CQUFtQkEsQ0FBQSxFQUFHO0lBQzdCUixNQUFNLENBQUMsc0JBQXNCLENBQUMsQ0FBQ0ksRUFBRSxDQUFDLE9BQU8sRUFBRSxVQUFVSyxDQUFDLEVBQUU7TUFDdERULE1BQU0sQ0FBQ1MsQ0FBQyxDQUFDQyxNQUFNLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLHlCQUF5QixDQUFDLENBQUNDLFdBQVcsQ0FBQyxHQUFHLENBQUM7TUFDckUsSUFBSVosTUFBTSxDQUFDUyxDQUFDLENBQUNDLE1BQU0sQ0FBQyxDQUFDRyxNQUFNLENBQUMsQ0FBQyxDQUFDQyxRQUFRLENBQUMsQ0FBQyxDQUFDSCxRQUFRLENBQUMseUJBQXlCLENBQUMsQ0FBQ0ksR0FBRyxDQUFDLFNBQVMsQ0FBQyxJQUFJLE9BQU8sRUFBRTtRQUN0R2YsTUFBTSxDQUFDUyxDQUFDLENBQUNDLE1BQU0sQ0FBQyxDQUFDRyxNQUFNLENBQUMsQ0FBQyxDQUFDRixRQUFRLENBQUMsQ0FBQyxDQUFDRyxRQUFRLENBQUMseUJBQXlCLENBQUMsQ0FBQ0UsT0FBTyxDQUFDLEdBQUcsQ0FBQztRQUNyRmhCLE1BQU0sQ0FBQ1MsQ0FBQyxDQUFDQyxNQUFNLENBQUMsQ0FBQ0csTUFBTSxDQUFDLENBQUMsQ0FBQ0YsUUFBUSxDQUFDLENBQUMsQ0FBQ00sV0FBVyxDQUFDLFFBQVEsQ0FBQztNQUM1RDtNQUVBLElBQUksQ0FBQ2pCLE1BQU0sQ0FBQ1MsQ0FBQyxDQUFDQyxNQUFNLENBQUMsQ0FBQ0csTUFBTSxDQUFDLENBQUMsQ0FBQ0ssUUFBUSxDQUFDLFFBQVEsQ0FBQyxFQUFFO1FBQ2pEbEIsTUFBTSxDQUFDUyxDQUFDLENBQUNDLE1BQU0sQ0FBQyxDQUFDRyxNQUFNLENBQUMsQ0FBQyxDQUFDTSxRQUFRLENBQUMsUUFBUSxDQUFDO01BQzlDLENBQUMsTUFBTTtRQUNMbkIsTUFBTSxDQUFDUyxDQUFDLENBQUNDLE1BQU0sQ0FBQyxDQUFDRyxNQUFNLENBQUMsQ0FBQyxDQUFDSSxXQUFXLENBQUMsUUFBUSxDQUFDO01BQ2pEO0lBQ0YsQ0FBQyxDQUFDO0VBQ0o7RUFFQUcsVUFBVSxDQUFDLFlBQVk7SUFDckIsSUFBSUMsU0FBUyxDQUFDLGFBQWEsQ0FBQyxJQUFJLFVBQVUsRUFBRTtNQUMxQ3JCLE1BQU0sQ0FBQyxVQUFVLENBQUMsQ0FBQ2UsR0FBRyxDQUFDLFNBQVMsRUFBRSxPQUFPLENBQUMsQ0FBQ08sSUFBSSxDQUFDLENBQUMsQ0FBQ0MsTUFBTSxDQUFDLElBQUksQ0FBQztJQUNoRTtJQUVBdkIsTUFBTSxDQUFDLFVBQVUsQ0FBQyxDQUFDd0IsS0FBSyxDQUFDLFlBQVk7TUFDbkN4QixNQUFNLENBQUMsVUFBVSxDQUFDLENBQUN5QixPQUFPLENBQUMsQ0FBQztNQUM1QjtNQUNBQyxTQUFTLENBQUMsYUFBYSxFQUFFLFVBQVUsRUFBRSxDQUFDLENBQUM7SUFDekMsQ0FBQyxDQUFDO0VBQ0osQ0FBQyxFQUFFLElBQUksQ0FBQztFQUVSLFNBQVNMLFNBQVNBLENBQUNNLEtBQUssRUFBRTtJQUN4QixJQUFJQyxJQUFJLEdBQUdELEtBQUssR0FBRyxHQUFHO0lBQ3RCLElBQUlFLEVBQUUsR0FBR0MsUUFBUSxDQUFDQyxNQUFNLENBQUNDLEtBQUssQ0FBQyxHQUFHLENBQUM7SUFDbkMsS0FBSyxJQUFJQyxDQUFDLEdBQUcsQ0FBQyxFQUFFQSxDQUFDLEdBQUdKLEVBQUUsQ0FBQ0ssTUFBTSxFQUFFRCxDQUFDLEVBQUUsRUFBRTtNQUNsQyxJQUFJRSxDQUFDLEdBQUdOLEVBQUUsQ0FBQ0ksQ0FBQyxDQUFDO01BQ2IsT0FBT0UsQ0FBQyxDQUFDQyxNQUFNLENBQUMsQ0FBQyxDQUFDLElBQUksR0FBRyxFQUFFO1FBQ3pCRCxDQUFDLEdBQUdBLENBQUMsQ0FBQ0UsU0FBUyxDQUFDLENBQUMsQ0FBQztNQUNwQjtNQUNBLElBQUlGLENBQUMsQ0FBQ0csT0FBTyxDQUFDVixJQUFJLENBQUMsSUFBSSxDQUFDLEVBQUU7UUFDeEIsT0FBT08sQ0FBQyxDQUFDRSxTQUFTLENBQUNULElBQUksQ0FBQ00sTUFBTSxFQUFFQyxDQUFDLENBQUNELE1BQU0sQ0FBQztNQUMzQztJQUNGO0lBQ0EsT0FBTyxFQUFFO0VBQ1g7RUFFQSxTQUFTUixTQUFTQSxDQUFDQyxLQUFLLEVBQUVZLE1BQU0sRUFBRUMsTUFBTSxFQUFFO0lBQ3hDLElBQUlDLENBQUMsR0FBRyxJQUFJQyxJQUFJLENBQUMsQ0FBQztJQUNsQkQsQ0FBQyxDQUFDRSxPQUFPLENBQUNGLENBQUMsQ0FBQ0csT0FBTyxDQUFDLENBQUMsR0FBSUosTUFBTSxHQUFHLEVBQUUsR0FBRyxFQUFFLEdBQUcsRUFBRSxHQUFHLElBQUssQ0FBQztJQUN2RCxJQUFJSyxPQUFPLEdBQUcsVUFBVSxHQUFHSixDQUFDLENBQUNLLFdBQVcsQ0FBQyxDQUFDO0lBQzFDaEIsUUFBUSxDQUFDQyxNQUFNLEdBQUdKLEtBQUssR0FBRyxHQUFHLEdBQUdZLE1BQU0sR0FBRyxHQUFHLEdBQUdNLE9BQU8sR0FBRyxTQUFTO0VBQ3BFO0FBRUYsQ0FBQyxFQUFFN0MsTUFBTSxDQUFDIiwiZmlsZSI6Ii4vc3JjL2luZGV4LmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/index.js\n");

/***/ }),

/***/ "./gutenberg-styles/banner-ps.scss":
/*!*****************************************!*\
  !*** ./gutenberg-styles/banner-ps.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9ndXRlbmJlcmctc3R5bGVzL2Jhbm5lci1wcy5zY3NzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2d1dGVuYmVyZy1zdHlsZXMvYmFubmVyLXBzLnNjc3M/MDVmYyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./gutenberg-styles/banner-ps.scss\n");

/***/ }),

/***/ "./sass/index.scss":
/*!*************************!*\
  !*** ./sass/index.scss ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zYXNzL2luZGV4LnNjc3MiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vc2Fzcy9pbmRleC5zY3NzPzc4MmIiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./sass/index.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/index": 0,
/******/ 			"src/index": 0,
/******/ 			"css-blocks/banner-ps": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["src/index","css-blocks/banner-ps"], () => (__webpack_require__("./src/index.js")))
/******/ 	__webpack_require__.O(undefined, ["src/index","css-blocks/banner-ps"], () => (__webpack_require__("./gutenberg-styles/banner-ps.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["src/index","css-blocks/banner-ps"], () => (__webpack_require__("./sass/index.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;