#!/bin/bash -x
#
# Copyright 2013 David Persson. All rights reserved.
# Copyright 2016 Atelier Disko. All rights reserved.
#
# Use of this source code is governed by the AD General Software
# License v1 that can be found under https://atelierdisko.de/licenses
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

set -o nounset
set -o errexit
set -o pipefail

# Must be executed from the project root (where Envfile is located). As the
# following actions are destructive we should also require to be invoked from
# inside a container, but that cannot be reliably be determined. Which we assume
# uses a copy of the project to work on.
[[ ! -f Envfile ]] && echo "error: not invoked from project root" && exit 1

source Envfile

sed -i -e "s|__PROJECT_VERSION__|$(cat VERSION.txt)|g" app/webroot/index.*
rm -f app/webroot/index.*-e

# Restricts assets building to app's assets. Libraries must
# provide their own buildscript when they ship assets. This
# is because we cannot know if certain assets will need
# special compressors.

echo $TARGET_BROWSERS | tr '|' '\n' > .browserslistrc

# Babelify in-place for full current ESx compatiblity.
cat << EOF > .babelrc
{
	"ignore": [
		"**/underscore.js",
		"**/require.js",
		"**/require",
		"**/jquery.js",
		"**/modernizr.js",
		"**/core.js",
		"**/three.js"
	],
	"presets": [
		[
			"@babel/preset-env", {
				"debug": true
			}
		]
	]
}
EOF
babel assets/js -d assets/js

for f in $(find assets/js -type f -name *.js); do
	uglifyjs --compress --mangle -o $f.min -- $f && mv $f.min $f
done

# We want the minifier to remove file headers of inlined files, the main CSS
# file (base.css) already has a good enough header.
for f in $(find assets/css/{globals,components} -type f -name *.css); do
	sed -i 's/\/\*!/\/\*/g' $f
done
for f in $(ls assets/css/*.css); do
    css-nextgen $f > $f.tmp && mv $f.tmp $f
    cleancss --skip-rebase $f -o $f.min && mv $f.min $f
done
for f in $(find assets/css/views -type f -name *.css); do
    css-nextgen $f > $f.tmp && mv $f.tmp $f
    cleancss --skip-rebase $f -o $f.min && mv $f.min $f
done

# We can't restrict image search to ico and img directories as images may be
# located in i.e. vid directories if they are posters.
for f in $(find assets -type f -name *.png); do
	# -ow flag requires pngcrush >=1.7.22
	# pngcrush -rem alla -rem text -q -ow $f
	pngcrush -rem alla -rem text -q $f $f.tmp && mv $f.tmp $f
done
for f in $(find assets -type f -name *.jpg); do
	mogrify -strip $f
	# in place optimization requires jpegtran >=8d
	# jpegtran -optimize -copy none -outfile $f $f
	jpegtran -optimize -copy none -outfile $f.tmp $f && mv $f.tmp $f
done

rm -r .browserslistrc .babelrc
rm -fr .git* app/libraries/*/*/.git* app/libraries/*/.git*
