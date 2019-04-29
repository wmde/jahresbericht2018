/*!
 * Wikimedia Jahresbericht 2018
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

requirejs.config({
  baseUrl: '/assets/js',
  waitSeconds: 60,
  paths: {
    // Base

    // More requirejs plugins are available in
    // js/require/*. Register them here if needed.
    'domready': 'require/domReady',

    // App
    // Add your app specific js paths here.
    'waypoint': 'waypoints',
    'swiper': 'swiper',

    // Components
    'components/achievements': 'components/achievements',
    'components/reports': 'components/reports',
    'components/chart': 'components/chart',

    // For compat and polyfills it is recommended to use
    // Atelier Disko's compat distribution and agument
    // the existing libraries found in js/compat.
    //
    // See https://github.com/atelierdisko/compat
    'modernizr': 'compat/modernizr',
    'smoothscroll': 'compat/smoothscroll'
  },
  shim: {
    // Base

    // App
    // Add your app specific shims here...
    'waypoint': {
      exports: 'Waypoint',
      deps: ['domready!']
    },

    // Compat
    'modernizr': {
      exports: 'Modernizr',
      deps: ['domready!']
    }
  }
});


