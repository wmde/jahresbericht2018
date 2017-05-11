/*!
 * Minimalistic Scroll To functionality
 *
 * Copyright (c) 2013 Atelier Disko - All rights reserved.
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
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
