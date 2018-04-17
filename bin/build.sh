#!/bin/bash -x
#
# Wikimedia Jahresbericht 2017
#
# Copyright (c) 2017 Atelier Disko - All rights reserved.
#
# Use of this source code is governed by the AGPL v3
# license that can be found in the LICENSE file.
#

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
sed -i -e "s|__PROJECT_VERSION__|$(cat VERSION.txt)|g" app/webroot/views/elements/de/header.php
if [[ -f app/webroot/views/elements/en/header.php ]]; then
	sed -i -e "s|__PROJECT_VERSION__|$(cat VERSION.txt)|g" app/webroot/views/elements/en/header.php
fi
rm -f app/webroot/index.*-e
rm -f app/webroot/views/elements/*/header.php-e

# Babelify in-place for full current ESx compatiblity.
cat << EOF > .babelrc
{
	"presets": [
		["env", {"targets": {"browsers": [
			"last 2 versions",
			"> 5%",
			"ie 11",
			"ff >= 48"
		]}}]
	],
	"ignore": [
		"underscore.js",
		"require.js",
		"require",
		"jquery.js",
		"modernizr.js",
		"core.js"
	]
}
EOF
babel app/webroot/assets/js -d app/webroot/assets/js

for f in $(find app/webroot/assets/js -type f -name *.js); do
	uglifyjs --compress --mangle -o $f.min -- $f && mv $f.min $f
done

for f in $(ls app/webroot/assets/css/*.css); do
	cssnextgen $f > $f.tmp && mv $f.tmp $f
	sqwish $f -o $f.min && mv $f.min $f
done
for f in $(find app/webroot/assets/css/views -type f -name *.css); do
    cssnextgen $f > $f.tmp && mv $f.tmp $f
    sqwish $f -o $f.min && mv $f.min $f
done

# We can't restrict image search to ico and img directories as images may be
# located in i.e. vid directories if they are posters.
for f in $(find app/webroot/assets -type f -name *.png); do
	# -ow flag requires pngcrush >=1.7.22
	# pngcrush -rem alla -rem text -q -ow $f
	pngcrush -rem alla -rem text -q $f $f.tmp && mv $f.tmp $f
done
for f in $(find app/webroot/assets -type f -name *.jpg); do
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

rm -fr .git*
