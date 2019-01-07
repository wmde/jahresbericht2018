/*!
 * Copyright 2013 David Persson. All rights reserved.
 * Copyright 2016 Atelier Disko. All rights reserved.
 *
 * Use of this source code is governed by the AD General Software
 * License v1 that can be found under https://atelierdisko.de/licenses
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 */

requirejs.config({
  baseUrl: App.assets.base,
  waitSeconds: 60,
  paths: {
    // Base
    'underscore': 'js/underscore',

    // More requirejs plugins are available in
    // js/require/*. Register them here if needed.
    'domready': 'js/require/domReady',
    'async': 'js/require/async',

    // App
    'router': 'js/router',
    'notify': 'js/notify',
    // Add your app specific JavaScript paths here.

    // Compat
    'modernizr': 'js/compat/modernizr',
    'fetch': 'js/compat/fetch'
  },
  shim: {
    // App
    // Add your app specific shims here...

    // Compat
    'modernizr': {
      exports: 'Modernizr',
      deps: ['domready!']
    }
  }
});


