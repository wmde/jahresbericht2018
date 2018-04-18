/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'skrollr',
  'waypoint',
  'modernizr',
  'components/example',
  'domready!'
], function(
  Skrollr, Waypoint, Modernizr, Example
) {
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  // finance-banner - turn bagels on scroll
  let fb = $('.finance-banner');
  if (fb.length && !Modernizr.touchevents) {
    let s = Skrollr.init({
      forceHeight: false
    })
  }
});
