#!/bin/bash -x
#
# Wikimedia Jahresbericht 2018
#
# Copyright (c) 2017 Atelier Disko - All rights reserved.
#
# Use of this source code is governed by the AGPL v3
# license that can be found in the LICENSE file.

set -o nounset
set -o errexit
set -o pipefail

# Must be executed from the project root (where Envfile is located). As the
# following actions are destructive we should also require to be invoked from
# inside a container, but that cannot be reliably be determined. Which we assume
# uses a copy of the project to work on.
[[ ! -f Envfile ]] && echo "error: not invoked from project root" && exit 1

source Envfile

# Replace special version string, wherever we find it.
for f in $(grep -R -l __PROJECT_VERSION__ app); do
	sed -i -e "s|__PROJECT_VERSION__|$(cat VERSION.txt)|g" $f
	rm -f ${f}*-e
done

# Restricts assets building to app's assets. Libraries must
# provide their own buildscript when they ship assets. This
# is because we cannot know if certain assets will need
# special compressors.

for f in $(ls app/resources/g11n/po/*/LC_MESSAGES/*.po); do
	msgfmt -o ${f/.po/.mo} --verbose $f
done

make \\.browserslistrc

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
babel app/webroot/assets/js -d app/webroot/assets/js

for f in $(find app/webroot/assets/js -type f -name *.js); do
	uglifyjs --compress --mangle -o $f.min -- $f && mv $f.min $f
done

for f in $(ls app/webroot/assets/css/*.css); do
	css-nextgen $f > $f.tmp && mv $f.tmp $f
	cleancss --skip-rebase $f -o $f.min && mv $f.min $f
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

if [[ -f app/composer.json ]]; then
	# Ensure we don't install dev tooling in production, for security (potential
	# information disclosure) and performance (larger file search trees) reasons.
	#
	# The composer binary may be executed by a higher or lower PHP version the
	# installed dependencies require. As we're simply installing and not updating we
	# can ignore this, to simplify build time requirements.
	if [[ $CONTEXT != "prod" ]]; then
		composer install --no-progress --no-interaction --ignore-platform-reqs -d app --prefer-dist
	else
		composer install --no-progress --no-interaction --ignore-platform-reqs -d app --prefer-dist --no-dev
	fi
	composer dump-autoload --no-interaction -d app --optimize
fi

rm .browserslistrc .babelrc
rm -fr .git* app/libraries/*/*/.git* app/libraries/*/.git*
