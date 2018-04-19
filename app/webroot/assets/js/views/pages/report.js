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
  'visible',
  'domready!'
], function(
  Modernizr,
  visible
) {
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  // Animate tiles on report landing page
  // see: https://css-tricks.com/slide-in-as-you-scroll-down-boxes/
  var rl = $(".report-landing");
  if (rl.length && !Modernizr.touchevents) {
    allMods = $(".jb-hsplit");

    // Already visible modules
    allMods.forEach(el => {
      if (visible(el, true)) {
        el.classList.add("already-visible");
        el.classList.add("come-in");
      }
    });

    throttled = _.throttle(function() {
      // Already visible modules
      allMods.forEach(el => {
        if (visible(el, true)) {
          el.classList.add("come-in");
        }
      });
    }, 100);

    window.addEventListener('scroll', throttled);
  }
  if (rl.length && Modernizr.touchevents) {
    allMods = $('.jb-hsplit');

    allMods.forEach(el => {
      el.classList.add("visible");
    });
  }

  // Animate slider
  let slider = $('.slider');
  if (slider.length) {
    require(['swiper'], function(Swiper) {
      slider.forEach(el => {
        let slides = el.querySelectorAll('.swiper-slide');

        if (slides.length <= 1) {
          el.classList.remove('loading');
        } else {
          let swiper = new Swiper(el[0], {
              nextButton: '.swiper-button-next',
              prevButton: '.swiper-button-prev',
              centeredSlides: true,
              loop: true,
              slidesPerView: 1,
              onImagesReady: function() {
                el.removeClass('loading');
              }
          });
        }
      });
    });
  }
});
