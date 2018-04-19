/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'domready!'
], function() {
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  function visible(element, partial) { // returns true if 100px of an element are visible in the view
    let viewTop       = window.pageYOffset || document.documentElement.scrollTop,
        viewBottom    = viewTop + (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight),
        _top          = offset(element).top,
    return _top + 100 <= viewBottom;
  }

  // Animate bagels on finance sub-pages
  // see: https://css-tricks.com/slide-in-as-you-scroll-down-boxes/
  // FIXME: Refakturisierung ohne JQUERY
  let bagel = $('.bagel'); // hier auch noch .bagel--alt hinzufügen
  if (bagel.length && !Modernizr.touchevents) {
    allMods = $(".bagel__image img");

    // Already visible modules
    allMods.forEach(el => {
      if (visible(el, true)) {
        el.classList.add("already-visible");
        el.classList.add("turn-in");
      }
    });
    let throttled2 = _.throttle(function() {
      allMods.forEach(el => {
        if (visible(el, true)) {
           el.classList.add("turn-in");
        }
      });
    }, 100);
    window.addEventListener('scroll', throttled);
  }
  if (bagel.length && Modernizr.touchevents) {
    allMods = $('.bagel__image img');
    allMods.forEach(el => {
      el.classList.add("turn-in");
    });
  }
});
