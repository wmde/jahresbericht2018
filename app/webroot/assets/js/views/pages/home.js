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
  'modernizr',
  'waypoint',
  'components/achievements',
  'components/reports',
  'domready!'
], function(
  Skrollr, Modernizr, Waypoint, Achievements, Reports
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

  let achievements = new Achievements($1('.achievements'));
  new Waypoint({
    element: $1('.achievements'),
    handler: dir => {
			if (dir === 'down') {
        achievements.init();
			} else {
        //el.classList.add('inset');
      }
    },
    offset: '70%'
  })
  let reports = new Reports($1('.reports'));

  let reports = new Reports($1('.reports'));

  new Waypoint({
    element: $1('.home__box'),
    handler: dir => {
      if (dir === 'down') {
         $1('.home__box').classList.add('comes-in')
      }
    },
    offset: '80%'
  })

  //  let chart;
  //
  //  new Waypoint('.member-chart', {
  //    handler: () => {
  //      if (!chart) { // Initialize just once.
  //        chart = new Chart(document.querySelector('.chart'));
  //      }
  //    }
  //  });

});
