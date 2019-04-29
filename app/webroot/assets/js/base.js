/*!
 * Wikimedia Jahresbericht 2018
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

requirejs.config({
  baseUrl: `${App.assets.base}/js`,
  waitSeconds: 60,
  paths: {
    // Add your app specific JavaScript paths here,
    // if they need to be aliased or fetched from a CDN.
  },
  shim: {
    // Add your app specific shims here...
    'waypoints': {
      exports: 'Waypoint',
      deps: ['require/domReady!']
    },
    'compat/modernizr': {
      exports: 'Modernizr',
      deps: ['require/domReady!']
    },
    'compat/scrollBehavior': {
      exports: 'smoothscroll'
    }
  }
});


