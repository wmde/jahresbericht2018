/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'visible',
  'underscore',
  'modernizr',
  'domready!'
], function(visible, _, Modernizr) {

  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  // Animate bagels on finance sub-pages
  // see: https://css-tricks.com/slide-in-as-you-scroll-down-boxes/
  let bagel = $('.bagel'); // hier auch noch .bagel--alt hinzufügen

  if (bagel.length && !Modernizr.touchevents) {
    allMods = $('.bagel__image img');

    // Already visible modules
    allMods.forEach(el => {
      if (visible(el, true)) {
        el.classList.add('already-visble');
        el.classList.add('turn-in');
      }
    });
    window.addEventListener('scroll', _.throttle(function() {
      allMods.forEach(el => {
        if (visible(el, true)) {
           el.classList.add('turn-in');
        }
      });
    }, 100));

    allMods = $('.bagel__image img');
    allMods.forEach(el => {
      el.classList.add('turn-in');
    });
  }
});
