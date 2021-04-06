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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/customize-controls.js":
/*!********************************************!*\
  !*** ./resources/js/customize-controls.js ***!
  \********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _customize_controls_control_image_filter__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./customize-controls/control-image-filter */ "./resources/js/customize-controls/control-image-filter.js");
/* harmony import */ var _customize_controls_control_image_filter__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_customize_controls_control_image_filter__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _customize_controls_control_typography__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./customize-controls/control-typography */ "./resources/js/customize-controls/control-typography.js");
/* harmony import */ var _customize_controls_control_typography__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_customize_controls_control_typography__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _customize_controls_background_pattern__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./customize-controls/background-pattern */ "./resources/js/customize-controls/background-pattern.js");
/* harmony import */ var _customize_controls_background_pattern__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_customize_controls_background_pattern__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _customize_controls_content_layout__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./customize-controls/content-layout */ "./resources/js/customize-controls/content-layout.js");
/* harmony import */ var _customize_controls_content_layout__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_customize_controls_content_layout__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _customize_controls_footer__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./customize-controls/footer */ "./resources/js/customize-controls/footer.js");
/* harmony import */ var _customize_controls_footer__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_customize_controls_footer__WEBPACK_IMPORTED_MODULE_4__);
/**
 * Customize controls script.
 *
 * This imports all modules for the customize controls pane. The final result
 * gets saved back into `public/js/customize-controls.js`.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */




 // Hybrid Customize controls.
//
// Uncomment any of the below to import scripts for specific controls if using
// the `hybrid-customize` add-on.
// import checkboxMultiple from 'hybrid-customize/js/controls/checkbox-multiple.js';
// import palette          from 'hybrid-customize/js/controls/palette.js';
// import radioImage       from 'hybrid-customize/js/controls/radio-image.js';
// import selectGroup      from 'hybrid-customize/js/controls/select-group.js';
// import selectMultiple   from 'hybrid-customize/js/controls/select-multiple.js';

/***/ }),

/***/ "./resources/js/customize-controls/background-pattern.js":
/*!***************************************************************!*\
  !*** ./resources/js/customize-controls/background-pattern.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Font Customize Control.
 *
 * This file handles the JavaScript for the font customize control.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */
wp.customize.bind('ready', function () {
  // Global set via `wp_localize_script()`.
  var _tavernCustomizeContr = tavernCustomizeControls,
      backgroundPatterns = _tavernCustomizeContr.backgroundPatterns;
  var types = ['body', 'header', 'content', 'footer', 'sidebar_footer'];

  var backgroundSvgUrl = function backgroundSvgUrl(svg, fill, opacity) {
    var url = svg.replace(/fill="#[a-fA-F0-9_-]*"/, 'fill="' + fill + '"').replace(/fill-opacity="[0-9.]*"/, 'fill-opacity="' + opacity + '"').replace(/\"/g, '\'').replace(/\</g, '%3C').replace(/\>/g, '%3E').replace(/\&/g, '%26').replace(/\#/g, '%23');
    var css = 'url("data:image/svg+xml,' + url + '")';
    return css;
  };

  types.forEach(function (type) {
    var backgroundSvgControl = wp.customize.control("".concat(type, "_background_svg"));
    var backgroundSvgSetting = backgroundSvgControl.settings.default;
    var backgroundImageControl = wp.customize.control("".concat(type, "_background_image"));
    var backgroundImageSetting = backgroundImageControl.settings.default;
    wp.customize.control("".concat(type, "_background_type"), function (control) {
      control.setting.bind(function (bgType) {
        if ('svg' === bgType) {
          backgroundImageSetting.set(''); // Deactivate image controls.

          wp.customize.control("".concat(type, "_background_image")).deactivate(); // Activate SVG controls.

          wp.customize.control("".concat(type, "_background_svg")).activate();
          wp.customize.control("color_".concat(type, "_background_fill")).activate();
          wp.customize.control("".concat(type, "_background_fill_opacity")).activate();

          if (backgroundSvgSetting.get()) {
            wp.customize.control("".concat(type, "_background_attachment")).activate();
            wp.customize.control("".concat(type, "_background_size")).activate();
            wp.customize.control("".concat(type, "_background_repeat")).activate();
            wp.customize.control("".concat(type, "_background_position")).activate();
          }
        } else if ('image' === bgType) {
          backgroundSvgSetting.set(''); // Deactivate SVG controls.

          wp.customize.control("".concat(type, "_background_svg")).deactivate();
          wp.customize.control("color_".concat(type, "_background_fill")).deactivate();
          wp.customize.control("".concat(type, "_background_fill_opacity")).deactivate(); // Activate image controls.

          wp.customize.control("".concat(type, "_background_image")).activate();

          if (backgroundImageSetting.get()) {
            wp.customize.control("".concat(type, "_background_attachment")).activate();
            wp.customize.control("".concat(type, "_background_size")).activate();
            wp.customize.control("".concat(type, "_background_repeat")).activate();
            wp.customize.control("".concat(type, "_background_position")).activate();
          }
        } else {
          backgroundSvgSetting.set('');
          backgroundImageSetting.set('');
          wp.customize.control("".concat(type, "_background_image")).deactivate();
          wp.customize.control("".concat(type, "_background_svg")).deactivate();
          wp.customize.control("color_".concat(type, "_background_fill")).deactivate();
          wp.customize.control("".concat(type, "_background_fill_opacity")).deactivate();
          wp.customize.control("".concat(type, "_background_attachment")).deactivate();
          wp.customize.control("".concat(type, "_background_size")).deactivate();
          wp.customize.control("".concat(type, "_background_repeat")).deactivate();
          wp.customize.control("".concat(type, "_background_position")).deactivate();
        }
      });
    });
    wp.customize.control("color_".concat(type, "_background"), function (control) {
      control.setting.bind(function (color) {
        var blocks = document.querySelectorAll(backgroundSvgControl.selector + ' .svg-background__block');
        blocks.forEach(function (block) {
          block.style.backgroundColor = color;
        });
      });
    });
    wp.customize.control("color_".concat(type, "_background_fill"), function (control) {
      control.setting.bind(function (color) {
        var opacity = wp.customize.control("".concat(type, "_background_fill_opacity")).settings.default.get();
        var blocks = document.querySelectorAll(backgroundSvgControl.selector + ' .svg-background__block');
        blocks.forEach(function (block) {
          if (block.dataset.svg) {
            var pattern = backgroundPatterns[block.dataset.svg];
            block.style.backgroundImage = backgroundSvgUrl(pattern.svg, color, opacity);
          }
        });
      });
    });
    wp.customize.control("".concat(type, "_background_fill_opacity"), function (control) {
      control.setting.bind(function (opacity) {
        var color = wp.customize.control("color_".concat(type, "_background_fill")).settings.default.get();
        var blocks = document.querySelectorAll(backgroundSvgControl.selector + ' .svg-background__block');
        blocks.forEach(function (block) {
          if (block.dataset.svg) {
            var pattern = backgroundPatterns[block.dataset.svg];
            block.style.backgroundImage = backgroundSvgUrl(pattern.svg, color, opacity);
          }
        });
      });
    });
    wp.customize.control("".concat(type, "_background_svg"), function (control) {
      control.setting.bind(function (svg) {
        if (svg) {
          wp.customize.control("color_".concat(type, "_background_fill")).activate();
          wp.customize.control("".concat(type, "_background_fill_opacity")).activate();
          wp.customize.control("".concat(type, "_background_attachment")).activate();
          wp.customize.control("".concat(type, "_background_size")).activate();
          wp.customize.control("".concat(type, "_background_repeat")).activate();
          wp.customize.control("".concat(type, "_background_position")).activate();
        } else {
          wp.customize.control("color_".concat(type, "_background_fill")).deactivate();
          wp.customize.control("".concat(type, "_background_fill_opacity")).deactivate();
          wp.customize.control("".concat(type, "_background_attachment")).deactivate();
          wp.customize.control("".concat(type, "_background_size")).deactivate();
          wp.customize.control("".concat(type, "_background_repeat")).deactivate();
          wp.customize.control("".concat(type, "_background_position")).deactivate();
        }
      });
    });
    wp.customize.control("".concat(type, "_background_image"), function (control) {
      control.setting.bind(function (image) {
        if (image) {
          wp.customize.control("".concat(type, "_background_attachment")).activate();
          wp.customize.control("".concat(type, "_background_size")).activate();
          wp.customize.control("".concat(type, "_background_repeat")).activate();
          wp.customize.control("".concat(type, "_background_position")).activate();
        } else {
          wp.customize.control("".concat(type, "_background_attachment")).deactivate();
          wp.customize.control("".concat(type, "_background_size")).deactivate();
          wp.customize.control("".concat(type, "_background_repeat")).deactivate();
          wp.customize.control("".concat(type, "_background_position")).deactivate();
        }
      });
    });
  });
});

/***/ }),

/***/ "./resources/js/customize-controls/content-layout.js":
/*!***********************************************************!*\
  !*** ./resources/js/customize-controls/content-layout.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Global set via `wp_localize_script()`.
var _tavernCustomizeContr = tavernCustomizeControls,
    loopLayouts = _tavernCustomizeContr.loopLayouts,
    loopQueries = _tavernCustomizeContr.loopQueries,
    imageSizes = _tavernCustomizeContr.imageSizes;
Object.values(loopQueries).forEach(function (type) {
  wp.customize.control("loop_".concat(type, "_layout"), function (control) {
    control.setting.bind(function (layout) {
      // Activate/Deactivate the width and columns controls, depending
      // on whether the current layout supports them.
      var widthControl = wp.customize.control("loop_".concat(type, "_width"));
      var columnsControl = wp.customize.control("loop_".concat(type, "_columns"));
      loopLayouts[layout].supportsWidth ? widthControl.activate() : widthControl.deactivate();
      loopLayouts[layout].supportsColumns ? columnsControl.activate() : columnsControl.deactivate(); // Activate/Deactivate the featured image control, depending on
      // whether the layout supports them.  If the layout does support
      // featured images, only display the featured image sizes that
      // the layout supports.

      var featuredImageControl = wp.customize.control("loop_".concat(type, "_image_size"));
      var featuredImageSetting = featuredImageControl.settings.default;

      if (!loopLayouts[layout].imageSizes.length) {
        featuredImageControl.deactivate();
      } else {
        var select = document.querySelector(featuredImageControl.selector + ' [data-customize-setting-link=' + featuredImageSetting.id + ']'); // Remove all options from the select. We're going to
        // rebuild it below.

        for (var i = select.options.length; i >= 0; i--) {
          select.remove(i);
        } // Set the selected option. If the current option is
        // supported by the layout, use it. Otherwise, use the
        // first available featured image size.


        var selectedOption = loopLayouts[layout].imageSizes[0];

        if (loopLayouts[layout].imageSizes.includes(featuredImageSetting.get())) {
          selectedOption = featuredImageSetting.get();
        }

        featuredImageSetting.set(selectedOption);
        loopLayouts[layout].imageSizes.forEach(function (size) {
          var opt = document.createElement('option');
          opt.value = size;
          opt.innerHTML = imageSizes[size].label;

          if (size === selectedOption) {
            opt.setAttribute('selected', 'selected');
          }

          select.appendChild(opt);
        });
        featuredImageControl.activate();
      }
    });
  });
});

/***/ }),

/***/ "./resources/js/customize-controls/control-image-filter.js":
/*!*****************************************************************!*\
  !*** ./resources/js/customize-controls/control-image-filter.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Image Filter Customize Control.
 *
 * This file handles the JavaScript for the image filter customize control.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */
wp.customize.controlConstructor['tavern-image-filter'] = wp.customize.Control.extend({
  ready: function ready() {
    // Global set via `wp_localize_script()`.
    var filters = tavernCustomizeControls.imageFilters;
    var control = this;
    var functionSetting = control.settings.function;
    var defaultAmountSetting = control.settings.default_amount;
    var hoverAmountSetting = control.settings.hover_amount; // Updates the amount controls and amount settings when a new
    // filter function is chosen.

    functionSetting.bind(function (value) {
      var defaultAmountContainer = control.selector + ' .tavern-image-default-filter-amount';
      var hoverAmountContainer = control.selector + ' .tavern-image-hover-filter-amount';
      var defaultAmountSelector = control.selector + ' [data-customize-setting-link=' + defaultAmountSetting.id + ']';
      var hoverAmountSelector = control.selector + ' [data-customize-setting-link=' + hoverAmountSetting.id + ']';
      var amountContainers = document.querySelectorAll(defaultAmountContainer + ',' + hoverAmountContainer);
      var inputs = document.querySelectorAll(defaultAmountSelector + ',' + hoverAmountSelector); // Update the amounts settings with the default/lacuna
      // value for the filter.

      defaultAmountSetting.set(filters[value].lacuna);
      hoverAmountSetting.set(filters[value].lacuna); // If no filter function is chosen, hide the amount controls.
      // Otherwise, display them.

      amountContainers.forEach(function (container) {
        container.style.display = !value || 'none' === value ? 'none' : 'block';
      }); // Loop through the amount controls and set their min
      // and max attributes based on the filter chosen.

      inputs.forEach(function (input) {
        input.setAttribute('min', filters[value].min);
        input.setAttribute('max', filters[value].max);
      });
    });
  }
});

/***/ }),

/***/ "./resources/js/customize-controls/control-typography.js":
/*!***************************************************************!*\
  !*** ./resources/js/customize-controls/control-typography.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Font Customize Control.
 *
 * This file handles the JavaScript for the font customize control.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */
wp.customize.controlConstructor['tavern-typography'] = wp.customize.Control.extend({
  ready: function ready() {
    // Globals set via `wp_localize_script()`.
    var families = tavernCustomizeControls.fontFamilies;
    var styles = tavernCustomizeControls.fontStyles;
    var control = this;
    var familySetting = control.settings.family;
    var styleSetting = control.settings.style; // Bail if there is no family or style setting for this control.

    if (!familySetting || !styleSetting) {
      return;
    } // When a new font family is chosen, we need to get the family
    // object and update the font style list with the allowed styles
    // for the family.


    familySetting.bind(function (value) {
      var family = families[value];
      var select = document.querySelector(control.selector + ' [data-customize-setting-link=' + styleSetting.id + ']'); // Remove all options from the select. We're going to
      // rebuild it below.

      for (var i = select.options.length; i >= 0; i--) {
        select.remove(i);
      } // Set the selected option. If the current option is
      // supported by the family, use it. Otherwise, use the
      // first available style.


      var selectedOption = family.styles[0];

      if (family.styles.indexOf(styleSetting.get()) !== -1) {
        selectedOption = styleSetting.get();
      }

      styleSetting.set(selectedOption); // Loop through the family's supported styles and add
      // them to the dropdown.

      family.styles.forEach(function (styleName) {
        var opt = document.createElement('option');
        opt.value = styleName;
        opt.innerHTML = styles[styleName].label;

        if (styleName === selectedOption) {
          opt.setAttribute('selected', 'selected');
        }

        select.appendChild(opt);
      });
    });
  }
});

/***/ }),

/***/ "./resources/js/customize-controls/footer.js":
/*!***************************************************!*\
  !*** ./resources/js/customize-controls/footer.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Footer controls.
 *
 * Activates or deactivates the footer credit section based on whether the
 * "powered by" setting is true/false.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */
wp.customize.control('powered_by', function (control) {
  control.setting.bind(function (value) {
    var footerCredit = wp.customize.control('footer_credit');
    value ? footerCredit.deactivate() : footerCredit.activate();
  });
});

/***/ }),

/***/ 1:
/*!**************************************************!*\
  !*** multi ./resources/js/customize-controls.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\wp-content\themes\the-tavern\resources\js\customize-controls.js */"./resources/js/customize-controls.js");


/***/ })

/******/ });
//# sourceMappingURL=customize-controls.js.map