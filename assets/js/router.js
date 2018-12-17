/*!
 * Copyright 2014 David Persson. All rights reserved.
 * Copyright 2017 Atelier Disko. All rights reserved.
 *
 * Use of this source code is governed by a BSD-style
 * license that can be found in the LICENSE file.
 */

define('router', [], function() {
  'use strict';

  // Router only has one method (`match`) and an instance of the class is
  // exported globally.
  class Router {
    constructor(routes) {
      this.routes = routes;
    }

    // This method currently returns a promise for BC and FC. We may later
    // decide to resolve routes via an API endpoint.
    match(name, params) {
      let template = this.routes[name];

      Object.keys(params || {}).forEach((k) => {
        template = template.replace(
          '__' + this._underscore(k).toUpperCase() + '__',
          params[k]
        );
      });

      return new Promise((resolve, reject) => {
        resolve(template);
      });
    }

    // Helper function to turn camlized strings into
    // underscored i.e. (foreignKey -> foreign_Key).
    _underscore(camelized) {
      let result = '' + camelized;

      result = result.replace(/([A-Z\d]+)([A-Z][a-z])/g, '$1_$2');
      result = result.replace(/([a-z\d])([A-Z])/g, '$1_$2');
      result = result.replace(/-/g, '_');

      return result;
    }
  }

  // Expects to have access to a global `App` object that must have a `routes`
  // property defined on it, containing all route mappings.
  if (window.console !== undefined) {
    if (window.App === undefined) {
        console.error('Global App object not defined.');
    } else if (window.App.routes === undefined) {
        console.error('Global App object hast no routes key.');
    }
  }
  return window.router = new Router(App.routes);
});
