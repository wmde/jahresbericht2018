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
  baseUrl: `${App.assets.base}/js`,
  waitSeconds: 60,
  paths: {
    // Add your app specific JavaScript paths here,
    // if they need to be aliased or fetched from a CDN.
  },
  shim: {
    'compat/modernizr': {
      exports: 'Modernizr',
      deps: ['require/domready!']
    },
    'compat/scrollBehavior': {
      exports: 'smoothscroll'
    }
    // Add your app specific shims here.
  }
});


