/*!
 * App
 *
 * Copyright (c) 2013 Atelier Disko - All rights reserved.
 *
 * Licensed under the AD General Software License v1.
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *
 * You should have received a copy of the AD General Software
 * License. If not, see https://atelierdisko.de/licenses.
 */

requirejs.config({
  baseUrl: '/assets/js',
  waitSeconds: 60,
  paths: {
    // Base
    'jquery': 'jquery',

    // More requirejs plugins are available in
    // js/require/*. Register them here if needed.
    'domready': 'require/domReady',

    // App
    // Add your app specific js paths here.

    // For compat and polyfills it is recommended to use
    // Atelier Disko's compat distribution and agument
    // the existing libraries found in js/compat.
    //
    // See https://github.com/atelierdisko/compat
    'modernizr': 'compat/modernizr'
  },
  shim: {
    // Base

    // App
    // Add your app specific shims here...

    // Compat
    'modernizr': {
      exports: 'Modernizr',
      deps: ['domready!']
    }
  }
});


