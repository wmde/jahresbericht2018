/*!
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require([
  'underscore',
  'modernizr',
  'domready!'
], function(
  _, Modernizr
) {
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  let body = $1('body');
  let imprint = $1('.imprint');
  let close = $1('.imprint-close');
  let toggle = $1('.imprint-toggle');

  let allMods, throttled;

  // Imprint toggle
  toggle.addEventListener("click", function(ev) {
    ev.preventDefault();

    imprint.classList.toggle("invis");
    close.classList.toggle("invis");

    if (!imprint.classList.contains("invis")) {
      let rect = imprint.getBoundingClientRect();
      if ('scrollBehavior' in document.documentElement.style) {
          window.scrollTo({top: window.pageYOffset + rect.top - 40, behavior: 'smooth'});
      } else {
        require(['smoothscroll'], function() {
          window.scrollTo({top: window.pageYOffset + rect.top - 40, behavior: 'smooth'});
        });
      }
    }

  });
  close.addEventListener("click", function(ev) {
    ev.preventDefault();
    close.classList.add("invis");
    imprint.classList.add("invis");
  });

  // Animate mobile navigation
  let mnTrigger = $1('.mn-trigger');
  let mncontainer = $1('.mn-container');
  let logo = $1('.real-logo');
  let mnClose = $1('.mn-close');

  mnTrigger.addEventListener("click", ev => {
    mncontainer.classList.add('mn-inframe');
    body.classList.add('no-scroll');
    logo.classList.add('no-filter');
  });

  mnClose.addEventListener("click", ev => {
    mncontainer.classList.remove('mn-inframe');
    body.classList.remove('no-scroll');
    logo.classList.remove('no-filter');
  });
});
