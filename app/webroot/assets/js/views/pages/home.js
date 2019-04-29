/*!
 * Wikimedia Jahresbericht 2018
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
  'components/chart',
  'domready!'
], function(
  Skrollr,
  Modernizr,
  Waypoint,
  Achievements,
  Reports,
  Chart
) {
  let $1 = document.querySelector.bind(document);
  let $ = document.querySelectorAll.bind(document);

  // home hero image - change saturation
  // finance-banner - turn bagels on scroll
  if (!Modernizr.touchevents) {
    Skrollr.init({ forceHeight: false });
  }

  let achievements = new Achievements($1('.achievements'));
  new Waypoint({
    element: $1('.achievements'),
    handler: dir => {
			if (dir === 'down') {
        achievements.init();
			}
    },
    offset: '70%'
  })

  let reports = new Reports($1('.reports'));
  new Waypoint({
    element: $1('.reports'),
    handler: dir => {
			if (dir === 'down') {
        $1('.reports').classList.remove('loading')
			}
    },
    offset: '60%'
  })

  let chart = new Chart($1('.chart'));
  new Waypoint({
    element: $1('.chart'),
    handler: dir => {
			if (dir === 'down') {
        chart.init();
			}
    },
    offset: '60%'
  })

  new Waypoint({
    element: $1('.home__box'),
    handler: dir => {
      if (dir === 'down') {
         $1('.home__box').classList.add('comes-in')
      }
    },
    offset: '80%'
  })
});
