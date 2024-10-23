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

eval("(function () {\n  console.log('ready');\n  var burger = jQuery(\".burger\"),\n    burgerSpan = jQuery(\".burger span\"),\n    nav = jQuery('.header__nav'),\n    body = jQuery('body');\n  burger.on(\"click\", function () {\n    burgerSpan.toggleClass(\"active\");\n    nav.toggleClass(\"active\");\n    body.toggleClass(\"fixed-page\");\n  });\n  setTimeout(function () {\n    if (getCookie('popupCookie') != 'submited') {\n      jQuery('.cookies').css(\"display\", \"block\").hide().fadeIn(2000);\n    }\n    jQuery('a.submit').click(function () {\n      jQuery('.cookies').fadeOut();\n      //sets the coookie to five minutes if the popup is submited (whole numbers = days)\n      setCookie('popupCookie', 'submited', 7);\n    });\n  }, 5000);\n  function getCookie(cname) {\n    var name = cname + \"=\";\n    var ca = document.cookie.split(';');\n    for (var i = 0; i < ca.length; i++) {\n      var c = ca[i];\n      while (c.charAt(0) == ' ') {\n        c = c.substring(1);\n      }\n      if (c.indexOf(name) == 0) {\n        return c.substring(name.length, c.length);\n      }\n    }\n    return \"\";\n  }\n  function setCookie(cname, cvalue, exdays) {\n    var d = new Date();\n    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);\n    var expires = \"expires=\" + d.toUTCString();\n    document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";\n  }\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwiYnVyZ2VyIiwialF1ZXJ5IiwiYnVyZ2VyU3BhbiIsIm5hdiIsImJvZHkiLCJvbiIsInRvZ2dsZUNsYXNzIiwic2V0VGltZW91dCIsImdldENvb2tpZSIsImNzcyIsImhpZGUiLCJmYWRlSW4iLCJjbGljayIsImZhZGVPdXQiLCJzZXRDb29raWUiLCJjbmFtZSIsIm5hbWUiLCJjYSIsImRvY3VtZW50IiwiY29va2llIiwic3BsaXQiLCJpIiwibGVuZ3RoIiwiYyIsImNoYXJBdCIsInN1YnN0cmluZyIsImluZGV4T2YiLCJjdmFsdWUiLCJleGRheXMiLCJkIiwiRGF0ZSIsInNldFRpbWUiLCJnZXRUaW1lIiwiZXhwaXJlcyIsInRvVVRDU3RyaW5nIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3NyYy9pbmRleC5qcz9hMjlkIl0sInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiAoKSB7XHJcbiAgY29uc29sZS5sb2coJ3JlYWR5Jyk7XHJcbiAgY29uc3QgYnVyZ2VyID0galF1ZXJ5KFwiLmJ1cmdlclwiKSxcclxuICAgIGJ1cmdlclNwYW4gPSBqUXVlcnkoXCIuYnVyZ2VyIHNwYW5cIiksXHJcbiAgICBuYXYgPSBqUXVlcnkoJy5oZWFkZXJfX25hdicpLFxyXG4gICAgYm9keSA9IGpRdWVyeSgnYm9keScpO1xyXG5cclxuICBidXJnZXIub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBidXJnZXJTcGFuLnRvZ2dsZUNsYXNzKFwiYWN0aXZlXCIpO1xyXG4gICAgbmF2LnRvZ2dsZUNsYXNzKFwiYWN0aXZlXCIpO1xyXG4gICAgYm9keS50b2dnbGVDbGFzcyhcImZpeGVkLXBhZ2VcIik7XHJcbiAgfSk7XHJcblxyXG4gIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xyXG4gICAgaWYgKGdldENvb2tpZSgncG9wdXBDb29raWUnKSAhPSAnc3VibWl0ZWQnKSB7XHJcbiAgICAgIGpRdWVyeSgnLmNvb2tpZXMnKS5jc3MoXCJkaXNwbGF5XCIsIFwiYmxvY2tcIikuaGlkZSgpLmZhZGVJbigyMDAwKTtcclxuICAgIH1cclxuXHJcbiAgICBqUXVlcnkoJ2Euc3VibWl0JykuY2xpY2soZnVuY3Rpb24gKCkge1xyXG4gICAgICBqUXVlcnkoJy5jb29raWVzJykuZmFkZU91dCgpO1xyXG4gICAgICAvL3NldHMgdGhlIGNvb29raWUgdG8gZml2ZSBtaW51dGVzIGlmIHRoZSBwb3B1cCBpcyBzdWJtaXRlZCAod2hvbGUgbnVtYmVycyA9IGRheXMpXHJcbiAgICAgIHNldENvb2tpZSgncG9wdXBDb29raWUnLCAnc3VibWl0ZWQnLCA3KTtcclxuICAgIH0pO1xyXG4gIH0sIDUwMDApO1xyXG5cclxuICBmdW5jdGlvbiBnZXRDb29raWUoY25hbWUpIHtcclxuICAgIHZhciBuYW1lID0gY25hbWUgKyBcIj1cIjtcclxuICAgIHZhciBjYSA9IGRvY3VtZW50LmNvb2tpZS5zcGxpdCgnOycpO1xyXG4gICAgZm9yICh2YXIgaSA9IDA7IGkgPCBjYS5sZW5ndGg7IGkrKykge1xyXG4gICAgICB2YXIgYyA9IGNhW2ldO1xyXG4gICAgICB3aGlsZSAoYy5jaGFyQXQoMCkgPT0gJyAnKSB7XHJcbiAgICAgICAgYyA9IGMuc3Vic3RyaW5nKDEpO1xyXG4gICAgICB9XHJcbiAgICAgIGlmIChjLmluZGV4T2YobmFtZSkgPT0gMCkge1xyXG4gICAgICAgIHJldHVybiBjLnN1YnN0cmluZyhuYW1lLmxlbmd0aCwgYy5sZW5ndGgpO1xyXG4gICAgICB9XHJcbiAgICB9XHJcbiAgICByZXR1cm4gXCJcIjtcclxuICB9XHJcblxyXG4gIGZ1bmN0aW9uIHNldENvb2tpZShjbmFtZSwgY3ZhbHVlLCBleGRheXMpIHtcclxuICAgIHZhciBkID0gbmV3IERhdGUoKTtcclxuICAgIGQuc2V0VGltZShkLmdldFRpbWUoKSArIChleGRheXMgKiAyNCAqIDYwICogNjAgKiAxMDAwKSk7XHJcbiAgICB2YXIgZXhwaXJlcyA9IFwiZXhwaXJlcz1cIiArIGQudG9VVENTdHJpbmcoKTtcclxuICAgIGRvY3VtZW50LmNvb2tpZSA9IGNuYW1lICsgXCI9XCIgKyBjdmFsdWUgKyBcIjtcIiArIGV4cGlyZXMgKyBcIjtwYXRoPS9cIjtcclxuICB9XHJcblxyXG59KShqUXVlcnkpOyJdLCJtYXBwaW5ncyI6IkFBQUEsQ0FBQyxZQUFZO0VBQ1hBLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLE9BQU8sQ0FBQztFQUNwQixJQUFNQyxNQUFNLEdBQUdDLE1BQU0sQ0FBQyxTQUFTLENBQUM7SUFDOUJDLFVBQVUsR0FBR0QsTUFBTSxDQUFDLGNBQWMsQ0FBQztJQUNuQ0UsR0FBRyxHQUFHRixNQUFNLENBQUMsY0FBYyxDQUFDO0lBQzVCRyxJQUFJLEdBQUdILE1BQU0sQ0FBQyxNQUFNLENBQUM7RUFFdkJELE1BQU0sQ0FBQ0ssRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFZO0lBQzdCSCxVQUFVLENBQUNJLFdBQVcsQ0FBQyxRQUFRLENBQUM7SUFDaENILEdBQUcsQ0FBQ0csV0FBVyxDQUFDLFFBQVEsQ0FBQztJQUN6QkYsSUFBSSxDQUFDRSxXQUFXLENBQUMsWUFBWSxDQUFDO0VBQ2hDLENBQUMsQ0FBQztFQUVGQyxVQUFVLENBQUMsWUFBWTtJQUNyQixJQUFJQyxTQUFTLENBQUMsYUFBYSxDQUFDLElBQUksVUFBVSxFQUFFO01BQzFDUCxNQUFNLENBQUMsVUFBVSxDQUFDLENBQUNRLEdBQUcsQ0FBQyxTQUFTLEVBQUUsT0FBTyxDQUFDLENBQUNDLElBQUksQ0FBQyxDQUFDLENBQUNDLE1BQU0sQ0FBQyxJQUFJLENBQUM7SUFDaEU7SUFFQVYsTUFBTSxDQUFDLFVBQVUsQ0FBQyxDQUFDVyxLQUFLLENBQUMsWUFBWTtNQUNuQ1gsTUFBTSxDQUFDLFVBQVUsQ0FBQyxDQUFDWSxPQUFPLENBQUMsQ0FBQztNQUM1QjtNQUNBQyxTQUFTLENBQUMsYUFBYSxFQUFFLFVBQVUsRUFBRSxDQUFDLENBQUM7SUFDekMsQ0FBQyxDQUFDO0VBQ0osQ0FBQyxFQUFFLElBQUksQ0FBQztFQUVSLFNBQVNOLFNBQVNBLENBQUNPLEtBQUssRUFBRTtJQUN4QixJQUFJQyxJQUFJLEdBQUdELEtBQUssR0FBRyxHQUFHO0lBQ3RCLElBQUlFLEVBQUUsR0FBR0MsUUFBUSxDQUFDQyxNQUFNLENBQUNDLEtBQUssQ0FBQyxHQUFHLENBQUM7SUFDbkMsS0FBSyxJQUFJQyxDQUFDLEdBQUcsQ0FBQyxFQUFFQSxDQUFDLEdBQUdKLEVBQUUsQ0FBQ0ssTUFBTSxFQUFFRCxDQUFDLEVBQUUsRUFBRTtNQUNsQyxJQUFJRSxDQUFDLEdBQUdOLEVBQUUsQ0FBQ0ksQ0FBQyxDQUFDO01BQ2IsT0FBT0UsQ0FBQyxDQUFDQyxNQUFNLENBQUMsQ0FBQyxDQUFDLElBQUksR0FBRyxFQUFFO1FBQ3pCRCxDQUFDLEdBQUdBLENBQUMsQ0FBQ0UsU0FBUyxDQUFDLENBQUMsQ0FBQztNQUNwQjtNQUNBLElBQUlGLENBQUMsQ0FBQ0csT0FBTyxDQUFDVixJQUFJLENBQUMsSUFBSSxDQUFDLEVBQUU7UUFDeEIsT0FBT08sQ0FBQyxDQUFDRSxTQUFTLENBQUNULElBQUksQ0FBQ00sTUFBTSxFQUFFQyxDQUFDLENBQUNELE1BQU0sQ0FBQztNQUMzQztJQUNGO0lBQ0EsT0FBTyxFQUFFO0VBQ1g7RUFFQSxTQUFTUixTQUFTQSxDQUFDQyxLQUFLLEVBQUVZLE1BQU0sRUFBRUMsTUFBTSxFQUFFO0lBQ3hDLElBQUlDLENBQUMsR0FBRyxJQUFJQyxJQUFJLENBQUMsQ0FBQztJQUNsQkQsQ0FBQyxDQUFDRSxPQUFPLENBQUNGLENBQUMsQ0FBQ0csT0FBTyxDQUFDLENBQUMsR0FBSUosTUFBTSxHQUFHLEVBQUUsR0FBRyxFQUFFLEdBQUcsRUFBRSxHQUFHLElBQUssQ0FBQztJQUN2RCxJQUFJSyxPQUFPLEdBQUcsVUFBVSxHQUFHSixDQUFDLENBQUNLLFdBQVcsQ0FBQyxDQUFDO0lBQzFDaEIsUUFBUSxDQUFDQyxNQUFNLEdBQUdKLEtBQUssR0FBRyxHQUFHLEdBQUdZLE1BQU0sR0FBRyxHQUFHLEdBQUdNLE9BQU8sR0FBRyxTQUFTO0VBQ3BFO0FBRUYsQ0FBQyxFQUFFaEMsTUFBTSxDQUFDIiwiZmlsZSI6Ii4vc3JjL2luZGV4LmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/index.js\n");

/***/ }),

/***/ "./sass/index.scss":
/*!*************************!*\
  !*** ./sass/index.scss ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zYXNzL2luZGV4LnNjc3MiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vc2Fzcy9pbmRleC5zY3NzPzM4Y2IiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./sass/index.scss\n");

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
/******/ 			"src/index": 0
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
/******/ 	__webpack_require__.O(undefined, ["src/index"], () => (__webpack_require__("./src/index.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["src/index"], () => (__webpack_require__("./sass/index.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;