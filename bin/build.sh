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

# Must be executed from the project root (where Envfile is located). Will
# operate on and modify the *current* files in tree. Be sure to operate on a
# copy.
[[ ! -f Envfile ]] && echo "error: not invoked from project root" && exit 1

source Envfile
revision=$(git rev-parse --short HEAD)

sed -i -e "s|__VERSION_BUILD__|$revision|g" VERSION.txt
# Workaround for older BSD versions of sed that need
# a suffix after -i while interpreting -e as the suffix.
[[ -f VERSION.txt-e ]] && rm VERSION.txt-e
sed -i -e "s|__PROJECT_VERSION__|$(cat VERSION.txt)|g" app/webroot/index.*
rm -f app/webroot/index.*-e

# Restricts assets building to app's assets. Libraries must
# provide their own buildscript when they ship assets. This
# is because we cannot know if certain assets will need
# special compressors.

echo $TARGET_BROWSERS | tr '|' '\n' > .browserslistrc

# Babel cli can be installed locally, but presets are always search locally.
cat << EOF > package.json
{
	"devDependencies": {
		"@babel/preset-env": "^7.0.0"
	}
}
EOF
npm install --save-dev

# Babelify in-place for full current ESx compatiblity.
cat << EOF > .babelrc
{
	"ignore": [
		"underscore.js",
		"require.js",
		"require",
		"jquery.js",
		"modernizr.js",
		"core.js",
		"three.js"
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
    cssnextgen $f > $f.tmp && mv $f.tmp $f
    cleancss --skip-rebase $f -o $f.min && mv $f.min $f
done
for f in $(find assets/css/views -type f -name *.css); do
    cssnextgen $f > $f.tmp && mv $f.tmp $f
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

# Ensure we don't install dev tooling in production, for security (potential
# information disclosure) and performance (larger file search trees) reasons.
if [[ -f app/composer.json ]]; then
	if [[ $CONTEXT != "prod" ]]; then
		composer install -d app --prefer-dist
	else
		composer install -d app --prefer-dist --no-dev
	fi
	composer dump-autoload  -d app --optimize
fi

rm -r node_modules packages.json .browserslistrc .babelrc
rm -fr .git*
