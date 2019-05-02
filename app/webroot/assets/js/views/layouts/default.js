/*!
 * Wikimedia Jahresbericht 2018
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

require(['require/domReady!'], function() {
  'use strict';

   // Imprint toggle
  let toggle = document.querySelector('.imprint-toggle');
  let close = document.querySelector('.imprint-close');
  let imprint = document.querySelector('.imprint');

  toggle.addEventListener('click', function(ev) {
    ev.preventDefault();

    imprint.classList.toggle('invis');
    close.classList.toggle('invis');

    if (!imprint.classList.contains('invis')) {
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
  close.addEventListener('click', function(ev) {
    ev.preventDefault();
    close.classList.add('invis');
    imprint.classList.add('invis');
  });

  // Animate mobile navigation
  let menuContainer = document.querySelector('.mn-container');
  let logo = document.querySelector('.real-logo');
  let menuOpenButton = document.querySelector('.mn-trigger');
  let menuCloseButton = document.querySelector('.mn-close');

  menuOpenButton.addEventListener('click', () => {
    menuContainer.classList.add('mn-inframe');
    document.body.classList.add('no-scroll');
    logo.classList.add('no-filter');
  });

  menuCloseButton.addEventListener('click', () => {
    menuContainer.classList.remove('mn-inframe');
    document.body.classList.remove('no-scroll');
    logo.classList.remove('no-filter');
  });
});
