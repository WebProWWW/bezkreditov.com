/*!
 * @author Timur Valiyev
 * @link https://webprowww.github.io
 */
"use strict";function _classCallCheck(a,c){if(!(a instanceof c))throw new TypeError("Cannot call a class as a function")}(function(){$("*[data-percent]").each(function(a,c){var n=$(c),t=Number($(this).data("percent"));return n.css({width:"".concat(t,"%")})})}).call(void 0);