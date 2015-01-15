/*!
 * Compat RequireJS Plugin
 *
 * Copyright (c) 2013-2014 Atelier Disko - All rights reserved.
 *
 * Licensed under the BSD 3-Clause License.
 * http://opensource.org/licenses/bsd-3-clause
 */
define('compat', function(module) {
  var normalize = function(name, normalize) {
    return normalize(name);
  };

  var load = function(name, req, onload) {
    req(['compatManager'], function(Manager) {
      Manager.run([
        name
      ]).done(onload);
    });
  };

  return {
    load: load,
    normalize: normalize
  };
});
