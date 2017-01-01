Atelier Disko Distribution
-- Distribution for Atelier Disko projects.

-- REPLACE THIS README WITH YOUR PROJECT'S README  --
-- REPLACE THE LICENSE WITH YOUR PROJECT'S LICENSE --

Abstract
--------
This is an application distribution. This distribution is providing a
boilerplate for Atelier Disko projects and contains confidential and
proprietary code.

This distribution especially is made for "micro" projects. Such a project
doesn't have a backend but consists of plain HTML files, CSS and JS.

HTML
----
HTML files are to be placed in `app/webroot/`.

Autoloading of CSS and JS
-------------------------
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

Authors
-------
David Persson for Atelier Disko (david@atelierdisko.de).

Copyright & License
-------------------
Copyright (c) 2013-2015 Atelier Disko - All rights reserved.

-- This software is proprietary and confidential. Redistributions   --
-- not permitted. Unless required by applicable law or agreed to    --
-- in writing, software distributed on an "AS IS" BASIS, WITHOUT    --
-- WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. --

Copyright and license information for contained 3rd party libraries can
be found in (a) the `doc/licenses` directory, (b) the header of the files
contained in the library or (c) the directory of the library.

