# Atelier Disko Micro Distribution
### Distribution for Atelier Disko micro projects.

# Abstract

This is an - internal to Atelier Disko - application distribution and contains
confidential and proprietary code. We use distributions as a boilerplate to quickly
start new projects.

This distribution is especially made for _micro_ projects. Such a project
doesn't have a real CMS powered backend but consists of plain HTML files or some
simple PHP files, CSS and JS.

# HTML

HTML files are to be placed in `app/webroot/`.

# PHP

To enable PHP on this project simply rename `app/webroot/index.html` to 
`index.php`. You may also create `app/composer.json` when you plan to
use composer. You also need to change the `app` directive inside the `Hoifile`.

# Contexts

`dev`, `stage`, `prod` are the default contexts this project is run withiin.
Socalled context patches are stored in `config/contexts/`. These patches can
be applied to the project to prepare it for a certain context. By default all
projects run within the `dev` contexts, so patches are only needed for all the
other ones.

As contexts usually contain sensitive information, we encrypt their patches
using `git-crypt`.

```
git-crypt unlock /path/to/key
patch < config/contexts/<CONTEXT>.patch
```

# Copyright & License

```
Copyright (c) 2015 Marius Wilms - All rights reserved. 
Copyright (c) 2016 Atelier Disko - All rights reserved. 

This project consists of multiple components which have differing licenses.
Please consult the license contract signed with Atelier Disko for more
information or the respective directories and file headers.

-- This software is proprietary and confidential. Redistributions   --
-- not permitted. Unless required by applicable law or agreed to    --
-- in writing, software distributed on an "AS IS" BASIS, WITHOUT    --
-- WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. --
```
