#!/bin/bash -x
#
# Atelier Disko Distribution
#
# Copyright (c) 2013 Atelier Disko - All rights reserved.
#
# Licensed under the AD General Software License v1.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#
# You should have received a copy of the AD General Software
# License. If not, see http://atelierdisko.de/licenses.
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

version=$(cat VERSION.txt)
sed -i -e "s|__PROJECT_VERSION__|$version|g" app/webroot/index.*
rm -f app/webroot/index.*-e

# Babelify in-place for ES2015 compatiblity. Once we do not want to support IE11
# and iOS Safari <= 9.3 anymore we can safely remove this line or use babel
# to continously upgrade supported ECMAScript versions.
babel assets/js \
	-d assets/js \
	--presets babel-preset-es2015 \
	--ignore underscore.js,require.js,jquery.js,modernizr.js

for f in $(find assets/js -type f -name *.js); do
	uglifyjs --compress --mangle -o $f.min -- $f && mv $f.min $f
done

for f in $(ls assets/css/*.css); do
	cssnextgen $f > $f.tmp && mv $f.tmp $f
	sqwish $f -o $f.min && mv $f.min $f
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
# if [[ $CONTEXT != "prod" ]]; then
# 	composer -d app --prefer-dist install
# else
# 	composer -d app --prefer-dist --no-dev install
# fi
# composer -d app dump-autoload --optimize

rm -fr .git*

# Install .htaccess file into webroot, so Apache Webserver picks it up
# and enables pretty URLs.
# cat <<EOT >> app/webroot/.htaccess
# RewriteEngine On
# RewriteBase /
# RewriteCond %{REQUEST_FILENAME} !-f
# RewriteRule ^ index.php [L]
# EOT


