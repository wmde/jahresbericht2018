/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('visible', [], function() {
  // This function replaces jQuery.offset().
  function offset(el) {
    let rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
  }

  // Returns true if 100px of an element are visible in the view.
  return function visible(element, partial) {
    let viewTop       = window.pageYOffset || document.documentElement.scrollTop,
        viewBottom    = viewTop + (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight),
        _top          = offset(element).top;

    return _top + 100 <= viewBottom;
  }
});
