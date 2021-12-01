/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
var ActionLogger = (function () {
    function ActionLogger() {
        this.url = window.location.href;
    }
    ActionLogger.prototype.logToConsole = function (action) {
        console.log("{Action: " + ActionType[action] + ", URL: " + this.url + "}");
    };
    return ActionLogger;
}());
exports.ActionLogger = ActionLogger;
var ActionType;
(function (ActionType) {
    ActionType[ActionType["Unknown"] = 0] = "Unknown";
    ActionType[ActionType["SiteLoad"] = 1] = "SiteLoad";
    ActionType[ActionType["SiteUnload"] = 2] = "SiteUnload";
})(ActionType = exports.ActionType || (exports.ActionType = {}));


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
__webpack_require__(3);
module.exports = __webpack_require__(4);


/***/ }),
/* 2 */
/***/ (function(module, exports) {



/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
var ActionLogger_1 = __webpack_require__(0);
var ActionLogger_2 = __webpack_require__(0);
var AL = new ActionLogger_1.ActionLogger();
window.onload = function () { AL.logToConsole(ActionLogger_2.ActionType.SiteLoad); };
window.onbeforeunload = function () { AL.logToConsole(ActionLogger_2.ActionType.SiteUnload); };


/***/ }),
/* 4 */
/***/ (function(module, exports) {

function toggleNav() {
    this.parentElement.classList.toggle('responsive');
}
window.onload = function () {
    var navs = document.getElementsByTagName('nav');
    for (var i = 0, j = navs.length; i < j; i++) {
        var icons = navs[i].getElementsByClassName('navbar-icon');
        if (icons.length > 0)
            icons[0].addEventListener('click', toggleNav);
    }
};


/***/ })
/******/ ]);