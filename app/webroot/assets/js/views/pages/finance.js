/*!
 * Wikimedia Jahresbericht 2018
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'modernizr',
  'waypoint',
  'domready!'
], function(
  Modernizr,
  Waypoint
) {
  // Animate bagels on finance sub-pages
  let bagels = document.querySelectorAll('.bagel');
  if (bagels.length && !Modernizr.touchevents) {
    bagels.forEach((el) => {
      new Waypoint({
        element: el,
        handler: () => {
          el.querySelector('.bagel__image img').classList.add('turn-in');
        },
        offset: '70%'
      })
    });
  }
});
