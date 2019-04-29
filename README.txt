Wikimedia Deutschland Jahresbericht 2018

Abstract
--------
This is the Wikimedia Deutschland Jahresbericht 2018 website. 

Server-side rendering
----------------------
PHP >= 5.5 is required to render the website on the server side. The front 
controller is at `app/webroot/index.php`.

Loading of CSS and JS
---------------------
These libaries will always be loaded and bootstrap
the applications JavaScript, they must always be present:

  - assets/js/jquery.js
  - assets/js/require.js
  - assets/js/base.js

These Stylesheets are always loaded and must be present:

  - asssets/css/reset.css
  - asssets/css/base.css

Inside `assets/js` you'll find `base.js` which is used for
requireJS configuration and loading. Script files that are included
directly are contained inside `assets/js/views/`.

Copyright & License
-------------------
This project is Copyright (c) 2017 Atelier Disko, the code is distributed under
the terms of the GNU Affero General Public License v3.0 if not otherwise stated.
For the full license text see the LICENSE file.

Vendor Libraries
----------------
This project contains 3rd party libraries/source code. These are licensed
and located as follows.

Path                                     Copyright Holder                License
..................................................................................................
assets/js/compat/core.js                 Denis Pushkarev                 MIT
assets/js/compat/modernizr.js            - see file header -             MIT
assets/js/compat/smoothscroll.js         Dustan Kasten                   MIT
assets/js/require.js                     JS Foundation and other         MIT
                                         contributors
assets/js/require/domReady.js            The Dojo Foundation             MIT or new BSD
assets/js/skrollr.js                     Alexander Prinzhorn             MIT
assets/js/swiper.js                      Vladimir Kharlampidi            MIT
assets/js/waypoints.js                   Caleb Troughton                 MIT
