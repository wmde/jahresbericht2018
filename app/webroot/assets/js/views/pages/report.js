/*!
 * Wikimedia Jahresbericht 2017
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
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  // Animate tiles on report landing page
  let jbs = $('.jb-hsplit');
  if (jbs.length) {
    if (Modernizr.touchevents) {
      jbs.forEach((el) => el.classList.add('come-in'));
    } else {
      jbs.forEach((el) => {
        new Waypoint({
          element: el,
          handler: () => {
            el.classList.add('come-in');
          },
          offset: '90%'
        })
      });
    }
  }

  // Animate slider
  let sliders = $('.slider');
  if (sliders.length) {
    require(['swiper'], function(Swiper) {
      sliders.forEach(el => {
        let slides = el.querySelectorAll('.swiper-slide');
        if (slides.length <= 1) {
          el.classList.remove('loading');
        } else {
          new Swiper(el, {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            centeredSlides: true,
            loop: true,
            slidesPerView: 1,
            onImagesReady: function() {
              el.classList.remove('loading');
            }
          });
        }
      });
    });
  }
});
