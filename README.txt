Atelier Disko Distribution
-- Distribution for Atelier Disko projects.

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

Copyright & License
-------------------
Copyright (c) 2013 Atelier Disko - All rights reserved. 

This project consists of multiple components which have differing licenses.
Please consult the license contract signed with Atelier Disko for more
information or the respective directories and file headers.

-- This software is proprietary and confidential. Redistributions   --
-- not permitted. Unless required by applicable law or agreed to    --
-- in writing, software distributed on an "AS IS" BASIS, WITHOUT    --
-- WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. --


