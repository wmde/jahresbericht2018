/*!
 * Minimalistic Scroll To functionality
 *
 * Copyright (c) 2013 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the BSD 3-clause license.
 */
define('scrollTo', ['jquery'], function($) {

  function toOffsets(x, y, speed, easing) {
    var result = new $.Deferred();

    $('html, body').animate(
      {
        scrollTop: y,
        scrollLeft: x
      },
      speed || 'normal',
      easing || 'swing',
      result.resolve
    );

     return result;
  }

  function toElement(element, speed, easing) {
    var offset = $(element).offset();

    return toOffsets(
      offset.left,
      offset.top,
      speed,
      easing
    );
  }

  return {
    element: toElement,
    offsets: toOffsets
  };
});
